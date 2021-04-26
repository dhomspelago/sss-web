<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Father;
use App\Models\Mother;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {

        $user = User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => Carbon::parse($request->input('date_of_birth')),
            'place_of_birth' => $request->input('place_of_birth'),
            'gender' => $request->input('gender'),
            'civil_status' => $request->input('civil_status'),
            'tax_identification_number' => $request->input('tax_identification_number'),
            'nationality' => $request->input('nationality'),
            'religion' => $request->input('religion'),
            'home_address' => $request->input('home_address'),
            'baranggay' => $request->input('baranggay'),
            'district' => $request->input('district'),
            'locality' => $request->input('locality'),
            'zip_code' => $request->input('zip_code'),
            'mobile_number' => $request->input('mobile_number'),
            'telephone_number' => $request->input('telephone_number'),
        ]);

        $this->storeFathersName(
            $request->input('f_first_name'),
            $request->input('f_middle_name'),
            $request->input('f_last_name')
        );

        $this->storeMothersName(
            $request->input('m_first_name'),
            $request->input('m_middle_name'),
            $request->input('m_last_name')
        );

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    private function storeFathersName($firstName, $middleName, $lastName)
    {
        Father::query()->create([
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
        ]);
    }

    private function storeMothersName($firstName, $middleName, $lastName)
    {
        Mother::query()->create([
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
        ]);
    }
}
