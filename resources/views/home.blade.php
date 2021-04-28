@extends('layouts.app')

@section('content')
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="mb-10">
            <div class="text-center mb-10 text-xl font-bold italic">
              <h1>Announcement(s) Section</h1>
            </div>
            @forelse($announcements as $announcement)
              <div class="flex">
                <div class="pb-5 rounded-lg shadow-lg m-auto">
                  <img
                    src="{{ asset('content/'. $announcement->image) }}" alt="{{$announcement->image}}"
                    style="width: 45rem; height: 24rem"
                    class="rounded-t-lg">
                </div>
              </div>
            @empty
              <h1 class="text-center text-blue-400">NO ANNOUNCEMENT YET!</h1>
            @endforelse
          </div>
          <div>
            <div class="text-center mb-10 text-xl font-bold italic">
              <h1>Updates(s) Section</h1>
            </div>
            @forelse($updates as $update)
              <div class="flex">
                <div class="pb-5 rounded-lg shadow-lg m-auto">
                  <img
                    src="{{ asset('content/'. $update->image) }}" alt="{{$update->image}}"
                    style="width: 45rem; height: 24rem"
                    class="rounded-t-lg">
                </div>
              </div>
            @empty
              <h1 class="text-center text-blue-400">NO UPDATES YET!</h1>
            @endforelse
          </div>
        </div>
      </div>
    </div>
@endsection
