<section class="overflow-hidden text-gray-700 ">
    <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32 mb-3">
      <div class="flex flex-wrap -m-1 md:-m-2">
        @foreach ( $sliders as $slider)
        <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="{{ asset('storage/'.$slider->slider) }}">
          </div>
          <div class="bg-red-100 w-full rounded m-1">
          <span class="ml-2">Title: .....</span>
          </div>
        </div>
        @endforeach
        {{-- <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
          </div>
          <span class="ml-2">Title: .....</span>
        </div>
        <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
          </div>
          <span class="ml-2">Title: .....</span>
        </div>
        <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
          <span class="ml-2">Title: .....</span>
        </div>
        <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
          </div>
          <span class="ml-2">Title: .....</span>
        </div>
        <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
          </div>
          <span class="ml-2">Title: .....</span>
        </div>
        <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
          </div>
          <span class="ml-2">Title: .....</span>
        </div>
        <div class="flex flex-wrap w-1/4 shadow rounded bg-white mr-1/2 ml-1/2 mb-2">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
          <span class="ml-2">Title: .....</span>
        </div> --}}
        {{-- <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(76).webp">
          </div>
          <span>Title: .....</span>
        </div>
        <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
          </div>
          <span>Title: .....</span>
        </div> --}}
      </div>
    </div>
  </section>