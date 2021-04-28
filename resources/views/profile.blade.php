@extends('layouts.app')

@section('content')
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="ml-5">
      </div>
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
                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" readonly
                               value="{{ $user->first_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                        <input type="text" name="middle_name" id="middle_name" autocomplete="family-name"
                               readonly
                               value="{{ $user->middle_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Last name
                        </label>
                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" readonly
                               value="{{ $user->last_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700"><span
                            class="text-red-500 mr-1">*</span>Email address</label>
                        <input type="text" name="email" id="email" autocomplete="email" readonly
                               value="{{ $user->email }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700"><span
                            class="text-red-500 mr-1">*</span>Date of birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth"
                               value="{{ $user->date_of_birth }}"
                               readonly
                               class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="place_of_birth" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Place of birth
                        </label>
                        <input type="text" name="place_of_birth" id="place_of_birth"
                               readonly
                               value="{{ $user->place_of_birth }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>


                      <div class="col-span-6 sm:col-span-2">
                        <label for="gender" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Gender
                        </label>
                        <input type="text" name="gender" id="gender"
                               readonly
                               value="{{ $user->gender }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md capitalize">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="civil_status" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Civil Status
                        </label>
                        <input type="text" name="civil_status" id="civil_status"
                               readonly
                               value="{{ $user->civil_status }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md capitalize">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="tax_identification_number" class="block text-sm font-medium text-gray-700">
                          Tax identification No (if any)</label>
                        <input type="text" name="tax_identification_number" id="tax_identification_number"
                               readonly
                               value="{{ $user->tax_identification_number }}"
                               class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="nationality" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Nationality
                        </label>
                        <input type="text" name="nationality" id="nationality"
                               readonly
                               value="{{ $user->nationality }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="religion" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Religion
                        </label>
                        <input type="text" name="religion" id="religion"
                               readonly
                               value="{{ $user->religion }}"
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
                        <input type="text" name="home_address" id="home_address" readonly
                               value="{{ $user->home_address }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                  shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="baranggay" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Baranggay
                        </label>
                        <input type="text" name="baranggay" id="baranggay" readonly
                               value="{{ $user->baranggay }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-1">
                        <label for="district" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>District
                        </label>
                        <input type="text" name="district" id="district" readonly
                               value="{{ $user->district }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="locality" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Locality
                        </label>
                        <input type="text" name="locality" id="locality" readonly
                               value="{{ $user->locality }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-1">
                        <label for="zip_code" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Zip Code
                        </label>
                        <input type="number" name="zip_code" id="zip_code" readonly
                               value="{{ $user->zip_code }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-3">
                        <label for="mobile_number" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Mobile Number
                        </label>
                        <input type="number" name="mobile_number" id="mobile_number"
                               value="{{ $user->mobile_number }}"
                               readonly
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-3">
                        <label for="telephone_number" class="block text-sm font-medium text-gray-700">Tel. Number
                        </label>
                        <input type="number" name="telephone_number" id="telephone_number"
                               readonly
                               value="{{ $user->telephone_number }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="f_first_name" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Father's First name</label>
                        <input type="text" name="f_first_name" id="f_first_name" autocomplete="given-name"
                               value="{{ $user->father->first_name }}"
                               readonly
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="f_middle_name" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Father's Middle name</label>
                        <input type="text" name="f_middle_name" id="f_middle_name" autocomplete="given-name"
                               readonly
                               value="{{ $user->father->middle_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="f_last_name" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Father's Last name</label>
                        <input type="text" name="f_last_name" id="f_last_name" autocomplete="given-name" readonly
                               value="{{ $user->father->last_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="m_first_name" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Mothers's Maiden First name</label>
                        <input type="text" name="m_first_name" id="m_first_name" autocomplete="given-name" readonly
                               value="{{ $user->mother->first_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="m_middle_name" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Mothers's Maiden Middle name</label>
                        <input type="text" name="m_middle_name" id="m_middle_name" autocomplete="given-name"
                               readonly
                               value="{{ $user->mother->middle_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="m_last_name" class="block text-sm font-medium text-gray-700">
                          <span class="text-red-500 mr-1">*</span>Mothers's Maiden Last name</label>
                        <input type="text" name="m_last_name" id="m_last_name" autocomplete="given-name" readonly
                               value="{{ $user->mother->last_name  }}"
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
                               value="{{ $user->spouse->first_name }}"
                               readonly
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="s_middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                        <input type="text" name="spouse[middle_name]" id="s_middle_name" autocomplete="family-name"
                               readonly
                               value="{{ $user->spouse->middle_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-1">
                        <label for="s_last_name" class="block text-sm font-medium text-gray-700">
                          Last name
                        </label>
                        <input type="text" name="spouse[last_name]" id="s_last_name" autocomplete="family-name"
                               value="{{ $user->spouse->last_name }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div class="col-span-6 sm:col-span-2">
                        <label for="s_date_of_birth" class="block text-sm font-medium text-gray-700">
                          Date of birth
                        </label>
                        <input type="date" name="spouse[date_of_birth]" id="s_date_of_birth"
                               readonly
                               value="{{ $user->spouse->date_of_birth }}"
                               class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div class="col-span-6">
                        <span class="font-bold">Children</span>
                      </div>
                      @foreach($user->childrens as $children)
                        <div class="col-span-6 sm:col-span-2">
                          <label for="c_first_name" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="children[0][first_name]" id="c_first_name"
                                 autocomplete="given-name"
                                 value="{{ $children->first_name}}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="f_middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                          <input type="text" name="children[0][middle_name]" id="f_middle_name"
                                 readonly
                                 autocomplete="given-name"
                                 value="{{ $children->middle_name }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="f_last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="children[0][last_name]" id="f_last_name" autocomplete="given-name"
                                 readonly
                                 value="{{ $children->last_name }}"
                                 class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                          <label for="date_of_birth" class="block text-sm font-medium text-gray-700">
                            Date of birth
                          </label>
                          <input type="date" name="children[0][date_of_birth]" id="date_of_birth"
                                 value="{{ $children->date_of_birth}}"
                                 class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                         shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                      @endforeach
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
            <h1 class="uppercase pb-4 text-blue-600">
              C.) For Self-Employed/Overseas Filipino Worker/Non-Working Spouse
            </h1>
            <div class="md:grid">
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6">
                        <span class="font-bold">Self Employed (SE)</span>
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="profession_business" class="block text-sm font-medium text-gray-700">
                          Profession Business
                        </label>
                        <input type="text" name="profession_business" id="profession_business"
                               value="{{ $user->other->profession_business }}"
                               readonly
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="business_started" class="block text-sm font-medium text-gray-700">
                          Business Started
                        </label>
                        <input type="date" name="business_started" id="business_started"
                               value="{{ $user->other->business_started }}"
                               readonly
                               class="b-day mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full
                                 shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="self_monthly_earning" class="block text-sm font-medium text-gray-700">
                          Monthly Earning
                        </label>
                        <input type="number" name="self_monthly_earning" id="self_monthly_earning"
                               readonly
                               value="{{ $user->other->self_monthly_earning  }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div class="col-span-6">
                        <span class="font-bold">Overseas Filipino Worker (OFW)</span>
                      </div>

                      <div class="col-span-6 sm:col-span-4">
                        <label for="foreign_address" class="block text-sm font-medium text-gray-700">
                          Foreign Address
                        </label>
                        <input type="text" name="foreign_address" id="foreign_address"
                               readonly
                               value="{{  $user->other->foreign_address }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-2">
                        <label for="overseas_monthly_earning" class="block text-sm font-medium text-gray-700">
                          Monthly Earning
                        </label>
                        <input type="number" name="overseas_monthly_earning" id="overseas_monthly_earning"
                               readonlyQ
                               value="{{ $user->other->overseas_monthly_earning }}"
                               class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6">
                        <label for="is_applying_for_membership" class="block text-sm font-medium text-gray-700">
                          Are you applying for membership in the Flex Fund Program?
                          <br>
                          <small class="text-gray-500 italic">
                            Note: Check the box below if Yes leave if blank if No
                          </small>
                        </label>
                        <input type="checkbox" name="is_applying_for_membership" id="is_applying_for_membership"
                               value="on"
                               readonly
                          {{ $user->other->is_applying_for_membership  ? 'checked' : ''}}>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
