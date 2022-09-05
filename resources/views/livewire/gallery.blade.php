<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">
  <div class="mx-auto w-full">
      <h1 class="mx-auto text-3xl py-4 border-b mb-5 bg-blue-100 rounded-lg text-center w-full">Dokumentasi</h1>

            <div class="flex flex-wrap bg-blue-100 rounded-lg shadow relative w-full px-3 py-3">
                @foreach ($sliders as $slider)
                    <div class="flex flex-wrap w-1/4 shadow rounded bg-blue-50 mr-1/2 ml-1/2 mb-2 hover:scale-110 transition duration-300 ease-in-out">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                src="{{ asset('storage/' . $slider->slider) }}">
                        </div>
                        <div class="bg-blue-200 w-full rounded m-1">
                            <span class="ml-2">Title: .....</span>
                        </div>
                    </div>
                @endforeach
            </div>

  </div>
</section>