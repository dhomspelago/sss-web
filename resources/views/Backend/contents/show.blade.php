@extends('backend.layouts.app')

@section('content')
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <h1 class="uppercase pb-4 text-blue-600">Update Announcement or Updates</h1>
          <div class="mt-10 sm:mt-0">
            @include('backend.includes.errors')
            <div class="md:grid">
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('backend.contents.update', $content) }}" method="POST"
                      enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6 mb">
                      <div class="grid grid-cols-6 gap-6 pb-3">
                        <div class="col-span-6 sm:col-span-3">
                          <picture>
                            <img src="{{ asset('content/'. $content->image ) }}" alt="image" class="w-100 h-40"
                                 id="imgPreview">
                          </picture>
                        </div>
                      </div>
                      <div class="grid grid-cols-6 gap-6 pb-3">
                        <div class="col-span-6 sm:col-span-3">
                          <label
                            class="flex flex-col items-center px-2 py-2 bg-white text-blue rounded-lg shadow-lg
                            tracking-wide uppercase border border-blue-600 cursor-pointer hover:bg-blue-800 hover:text-white">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                              <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                            </svg>
                            <span class="mt-2 text-base leading-normal">Select a file</span>
                            <input type="file" class="hidden" accept="image/*" id="imgUpload" name="image"/>
                          </label>
                        </div>
                      </div>
                      <div class="grid grid-cols-6 gap-6 pb-3">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">
                            Type
                          </label>
                          <select id="type" name="type"
                                  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md
                                    shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="{{ \App\Models\Content::ANNOUNCEMENT_TYPE }}"
                              {{ $content->type === \App\Models\Content::ANNOUNCEMENT_TYPE ? ' selected="selected"' : ''}}>
                              Announcement
                            </option>
                            <option value="{{ \App\Models\Content::UPDATE_TYPE }}"
                              {{ $content->type === \App\Models\Content::UPDATE_TYPE ? ' selected="selected"' : ''}}
                            >Update
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">
                            Published
                          </label>
                          <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-blue-600" name="is_published"
                                   checked="{{ $content->is_published }}">
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                      <button type="submit"
                              class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm
                              font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none
                               focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Update
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
  <script>
    document.getElementById('imgUpload').addEventListener('change', showImagePrev)

    function showImagePrev () {
      const validExtensions = ['png', 'jpg', 'jpeg']
      const fileName = this.files[0].name
      const fileExtension = fileName.split('.').pop()

      if (!validExtensions.includes(fileExtension)) {
        alert('Invalid File! only accept file : ' + validExtensions.join(', '))

        return
      }
      if (this.files && this.files[0]) {
        const reader = new FileReader()
        const image = document.getElementById('imgPreview')
        reader.onload = function (e) {
          image.classList.remove('hidden')
          image.setAttribute('src', e.target.result)
        }

        reader.readAsDataURL(this.files[0])
      }
    }

  </script>
@endsection
