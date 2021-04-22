<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{

    /**
     * The authentication factory instance.
     *
     * @var Auth
     */
    protected $auth;

    protected $guard;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
        parent::__construct($auth);
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string[] ...$guards
     * @return mixed
     *
     * @throws AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $this->guard = $guards;

        $this->authenticate($request, $guards);

        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (in_array('backend', $this->guard)) {
            return route('backend.login');
        }
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
