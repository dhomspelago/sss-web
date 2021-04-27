@extends('layouts.app')

@section('content')
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="ml-5">
        @include('backend.includes.errors')
      </div>
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
          <div class="p-6 bg-white border-b border-gray-200">
            <div class="mt-10 sm:mt-0">
              <h1 class="uppercase pb-4 text-blue-600">A.) PERSONAL DATA</h1>
              <div class="md:grid">
                <div class="mt-5 md:mt-0 md:col-span-2">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-2">
                          <label for="first_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>First name</label>
                          <input type="text" name="first_name" id="first_name" autocomplete="given-name" required
                                 value="{{ old('first_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                          <input type="text" name="middle_name" id="middle_name" autocomplete="family-name"
                                 value="{{ old('middle_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Last name
                          </label>
                          <input type="text" name="last_name" id="last_name" autocomplete="family-name" required
                                 value="{{ old('last_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="email" class="block text-sm font-medium text-gray-700"><span
                              class="text-red-500 mr-1">*</span>Email address</label>
                          <input type="text" name="email" id="email" autocomplete="email" required
                                 value="{{ old('email') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="password" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Password
                          </label>
                          <input type="password" name="password" id="password" required
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Confirm Password
                          </label>
                          <input type="password" name="password_confirmation" id="password_confirmation" required
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="date_of_birth" class="block text-sm font-medium text-gray-700"><span
                              class="text-red-500 mr-1">*</span>Date of birth</label>
                          <input type="date" name="date_of_birth" id="date_of_birth"
                                 min="1901-01-01"
                                 value="{{ old('date_of_birth') }}"
                                 required
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="place_of_birth" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Place of birth
                          </label>
                          <input type="text" name="place_of_birth" id="place_of_birth"
                                 required
                                 value="{{ old('place_of_birth') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <div class="col-span-6 sm:col-span-2">
                          <label for="gender" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Gender
                          </label>
                          <select id="gender" name="gender"
                                  required
                                  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md
                                           shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="male">MALE</option>
                            <option value="female">FEMALE</option>
                          </select>
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="civil_status" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Civil Status
                          </label>
                          <select id="civil_status" name="civil_status"
                                  required
                                  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md
                                           shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="widowed">Widowed</option>
                          </select>
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="tax_identification_number" class="block text-sm font-medium text-gray-700">
                            Tax identification No (if any)</label>
                          <input type="text" name="tax_identification_number" id="tax_identification_number"
                                 value="{{ old('tax_identification_number') }}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="nationality" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Nationality
                          </label>
                          <input type="text" name="nationality" id="nationality"
                                 required
                                 value="{{ old('nationality') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="religion" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Religion
                          </label>
                          <input type="text" name="religion" id="religion"
                                 required
                                 value="{{ old('religion') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6">
                          <label for="home_address" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>
                            Home address
                            <small class="text-gray-500 italic">
                              (Rm/FL/Unit No. /Bldg. name /House Lot and Blk No. /Street name/Subdivision)
                            </small>
                          </label>
                          <input type="text" name="home_address" id="home_address" required
                                 value="{{ old('home_address') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                          shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="baranggay" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Baranggay
                          </label>
                          <input type="text" name="baranggay" id="baranggay" required
                                 value="{{ old('baranggay') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="district" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>District
                          </label>
                          <input type="text" name="district" id="district" required
                                 value="{{ old('district') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="locality" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Locality
                          </label>
                          <input type="text" name="locality" id="locality" required
                                 value="{{ old('locality') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="zip_code" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Zip Code
                          </label>
                          <input type="number" name="zip_code" id="zip_code" required
                                 value="{{ old('zip_code') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="mobile_number" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Mobile Number
                          </label>
                          <input type="number" name="mobile_number" id="mobile_number"
                                 value="{{ old('mobile_number') }}"
                                 required
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="telephone_number" class="block text-sm font-medium text-gray-700">Tel. Number
                          </label>
                          <input type="number" name="telephone_number" id="telephone_number"
                                 value="{{ old('telephone_number') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_first_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Father's First name</label>
                          <input type="text" name="f_first_name" id="f_first_name" autocomplete="given-name"
                                 value="{{ old('f_first_name') }}"
                                 required
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_middle_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Father's Middle name</label>
                          <input type="text" name="f_middle_name" id="f_middle_name" autocomplete="given-name"
                                 value="{{ old('f_middle_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_last_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Father's Last name</label>
                          <input type="text" name="f_last_name" id="f_last_name" autocomplete="given-name" required
                                 value="{{ old('f_last_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="m_first_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Mothers's Maiden First name</label>
                          <input type="text" name="m_first_name" id="m_first_name" autocomplete="given-name" required
                                 value="{{ old('m_first_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="m_middle_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Mothers's Maiden Middle name</label>
                          <input type="text" name="m_middle_name" id="m_middle_name" autocomplete="given-name"
                                 value="{{ old('m_middle_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="m_last_name" class="block text-sm font-medium text-gray-700">
                            <span class="text-red-500 mr-1">*</span>Mothers's Maiden Last name</label>
                          <input type="text" name="m_last_name" id="m_last_name" autocomplete="given-name" required
                                 value="{{ old('m_last_name') }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-10">
          <div class="p-6 bg-white border-b border-gray-200">
            <div class="mt-10 sm:mt-0">
              <h1 class="uppercase pb-4 text-blue-600">B.) Dependent(s) / Beneficiary/ies</h1>
              <div class="md:grid">
                <div class="mt-5 md:mt-0 md:col-span-2">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6">
                          <span class="font-bold">Spouse</span>
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="s_first_name" class="block text-sm font-medium text-gray-700">
                            First name</label>
                          <input type="text" name="spouse[first_name]" id="s_first_name" autocomplete="given-name"
                                 value="{{ old('spouse')['first_name'] ?? null }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="s_middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                          <input type="text" name="spouse[middle_name]" id="s_middle_name" autocomplete="family-name"
                                 value="{{ old('spouse')['middle_name'] ?? null }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="s_last_name" class="block text-sm font-medium text-gray-700">
                            Last name
                          </label>
                          <input type="text" name="spouse[last_name]" id="s_last_name" autocomplete="family-name"
                                 value="{{ old('spouse')['last_name'] ?? null }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                          <label for="s_date_of_birth" class="block text-sm font-medium text-gray-700">
                            Date of birth
                          </label>
                          <input type="date" name="spouse[date_of_birth]" id="s_date_of_birth"
                                 min="1901-01-01"
                                 value="{{ old('spouse')['date_of_birth'] ?? null }}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6">
                          <span class="font-bold">Children</span>
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="c_first_name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="children[0][first_name]" id="c_first_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[0]['first_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="f_middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                          <input type="text" name="children[0][middle_name]" id="f_middle_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[0]['middle_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="children[0][last_name]" id="f_last_name" autocomplete="given-name"
                                 value="{{ old('children')[0]['last_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="date_of_birth" class="block text-sm font-medium text-gray-700">
                            Date of birth
                          </label>
                          <input type="date" name="children[0][date_of_birth]" id="date_of_birth"
                                 min="1901-01-01"
                                 value="{{ old('children')[0]['date_of_birth'] ?? null}}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <div class="col-span-6 sm:col-span-2">
                          <label for="c_first_name" class="block text-sm font-medium text-gray-700">
                            First name</label>
                          <input type="text" name="children[1][first_name]" id="c_first_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[1]['first_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="f_middle_name" class="block text-sm font-medium text-gray-700">
                            Middle name</label>
                          <input type="text" name="children[1][middle_name]" id="f_middle_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[1]['middle_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_last_name" class="block text-sm font-medium text-gray-700">
                            Last name</label>
                          <input type="text" name="children[1][last_name]" id="f_last_name" autocomplete="given-name"
                                 value="{{ old('children')[1]['last_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="date_of_birth" class="block text-sm font-medium text-gray-700">
                            Date of birth
                          </label>
                          <input type="date" name="children[1][date_of_birth]" id="date_of_birth"
                                 min="1901-01-01"
                                 value="{{ old('children')[1]['date_of_birth'] ?? null}}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <div class="col-span-6 sm:col-span-2">
                          <label for="c_first_name" class="block text-sm font-medium text-gray-700">
                            First name</label>
                          <input type="text" name="children[2][first_name]" id="c_first_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[2]['first_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="f_middle_name" class="block text-sm font-medium text-gray-700">
                            Middle name</label>
                          <input type="text" name="children[2][middle_name]" id="f_middle_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[2]['middle_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_last_name" class="block text-sm font-medium text-gray-700">
                            Last name</label>
                          <input type="text" name="children[2][last_name]" id="f_last_name" autocomplete="given-name"
                                 value="{{ old('children')[2]['last_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="date_of_birth" class="block text-sm font-medium text-gray-700">
                            Date of birth
                          </label>
                          <input type="date" name="children[2][date_of_birth]" id="date_of_birth"
                                 min="1901-01-01"
                                 value="{{ old('children')[2]['date_of_birth'] ?? null}}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <div class="col-span-6 sm:col-span-2">
                          <label for="c_first_name" class="block text-sm font-medium text-gray-700">
                            First name</label>
                          <input type="text" name="children[3][first_name]" id="c_first_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[3]['first_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="f_middle_name" class="block text-sm font-medium text-gray-700">
                            Middle name</label>
                          <input type="text" name="children[3][middle_name]" id="f_middle_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[3]['middle_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_last_name" class="block text-sm font-medium text-gray-700">
                            Last name</label>
                          <input type="text" name="children[3][last_name]" id="f_last_name" autocomplete="given-name"
                                 value="{{ old('children')[3]['last_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="date_of_birth" class="block text-sm font-medium text-gray-700">
                            Date of birth
                          </label>
                          <input type="date" name="children[3][date_of_birth]" id="date_of_birth"
                                 min="1901-01-01"
                                 value="{{ old('children')[3]['date_of_birth'] ?? null}}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <div class="col-span-6 sm:col-span-2">
                          <label for="c_first_name" class="block text-sm font-medium text-gray-700">
                            First name</label>
                          <input type="text" name="children[4][first_name]" id="c_first_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[4]['first_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="f_middle_name" class="block text-sm font-medium text-gray-700">
                            Middle name</label>
                          <input type="text" name="children[4][middle_name]" id="f_middle_name"
                                 autocomplete="given-name"
                                 value="{{ old('children')[4]['middle_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_last_name" class="block text-sm font-medium text-gray-700">
                            Last name</label>
                          <input type="text" name="children[4][last_name]" id="f_last_name" autocomplete="given-name"
                                 value="{{ old('children')[4]['last_name'] ?? null}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="date_of_birth" class="block text-sm font-medium text-gray-700">
                            Date of birth
                          </label>
                          <input type="date" name="children[4][date_of_birth]" id="date_of_birth"
                                 min="1901-01-01"
                                 value="{{ old('children')[4]['date_of_birth'] ?? null}}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit"
                              class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Register
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('js')
  <script>
    const date = new Date()
    const subtractedDate = new Date(date.setFullYear(date.getFullYear() - 18))
    const day = subtractedDate.getDate()
    const month = subtractedDate.getMonth() + 1
    const formattedDate = subtractedDate.getFullYear() + '-' + ('0' + month).slice(-2) + '-' + ('0' + day).slice(-2)

    document.querySelectorAll('input[type=date]').forEach(function (e) {
      e.setAttribute('max', formattedDate)
    })
  </script>
@endsection
