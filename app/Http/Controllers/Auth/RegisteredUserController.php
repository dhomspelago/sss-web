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
            $user,
            $request->input('f_first_name'),
            $request->input('f_middle_name'),
            $request->input('f_last_name')
        );

        $this->storeMothersName(
            $user,
            $request->input('m_first_name'),
            $request->input('m_middle_name'),
            $request->input('m_last_name')
        );

        $this->storeSpouse($user, $request->input('spouse'));

        $this->storeChildren($user, $request->input('children'));

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    private function storeFathersName($user, $firstName, $middleName, $lastName)
    {
        $user->father()->create([
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
        ]);
    }

    private function storeMothersName($user, $firstName, $middleName, $lastName)
    {
        $user->mother()->create([
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
        ]);
    }

    private function storeSpouse($user, $spouse)
    {
        if (! is_null($spouse['first_name']) && ! is_null($spouse['last_name'])) {
            $user->spouse()->create([
                'first_name' => $spouse['first_name'],
                'middle_name' => $spouse['middle_name'],
                'last_name' => $spouse['last_name'],
                'date_of_birth' => ! is_null($spouse['date_of_birth']) ? Carbon::parse($spouse['date_of_birth']) : null,
            ]);
        }
    }

    private function storeChildren($user, $childrens)
    {
        $items = $this->removeNullItem($childrens);

        foreach ($items as $data) {
            $user->childrens()->create([
                'first_name' => $data['first_name'],
                'middle_name' => $data['middle_name'],
                'last_name' => $data['last_name'],
                'date_of_birth' => ! is_null($data['date_of_birth']) ? Carbon::parse($data['date_of_birth']) : null,
            ]);
        }

    }

    private function removeNullItem(array $items)
    {
        foreach ($items as $key => $data) {
            if (is_null($data['first_name']) && is_null($data['last_name'])) {
                unset($items[$key]);
            }
        }

        return $items;
    }
}
