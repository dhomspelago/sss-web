@extends('backend.layouts.app')

@section('content')
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <div class="flex justify-end items-center pt-4 pr-2">
                    <x-button class="bg-blue-600 mb-4">
                      Create Announcement or Update
                    </x-button>
                  </div>
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                      <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                      </th>
                      <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Type
                      </th>
                      <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Image
                      </th>
                      <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Published
                      </th>
                      <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                      </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($contents as $content)
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{ $content->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          {{$content->type }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                          <picture>
                            <img src="{{ asset('assets/images/'. $content->image ) }}" alt="{{ $content->image  }}"
                                 class="w-12 h-10">
                          </picture>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                          @if($content->is_published)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-green-600"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"/>
                            </svg>
                          @endif
                          @if(! $content->is_published)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-red-600"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"/>
                            </svg>
                          @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                          <a href="#" class="text-blue-600 hover:text-blue-900 mr-1">View & Update</a>
                          <form method="POST" action="{{ route('backend.contents.destroy', $content) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600 hover:text-red-900">
                              Delete
                            </button>
                          </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center" colspan="5">
                          EMPTY ITEM
                        </td>
                      </tr>
                    @endforelse
                    <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
