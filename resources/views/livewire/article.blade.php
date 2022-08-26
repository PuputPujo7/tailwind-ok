<section>
<div aria-label="group of cards" tabindex="0" class="focus:outline-none p-8 w-full justify-center bg-blue-100 px-2 mt-2 rounded">
    <a class="block text-2xl font-bold text-center text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300 pb-5"
        href="#">Articles</a>
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="lg:flex items-center justify-center w-full">
        @foreach ($articles as $article)
        <div tabindex="0" aria-label="card 1"
            class="focus:outline-none lg:w-4/12 m-3 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
            
            <div class="flex items-center border-b border-gray-200 pb-6">
                {{-- <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar"
                    class="w-12 h-12 rounded-full" /> --}}
                    <img src="{{ asset('storage/'. $article->picture) }}" alt="coin avatar"
                    class="w-12 h-12 rounded-full" />
                <div class="flex items-start justify-between w-full">
                    <div class="pl-3 w-full">
                        <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                            {{ $article->title }}</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36
                            members</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">
                            Source: {{ $article->createdby }}</p>
                    </div>
                    <div role="img" aria-label="bookmark">
                        <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="px-2">
                <p class="card-text text-justify">{{ substr($article->content, 0, 250) }} ....
                    <a href="#">Selengkapnya</a>
                  </p>
                <div tabindex="0" class="focus:outline-none flex">
                    <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin
                    </div>
                    <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                        #crypto</div>
                </div>
            </div>
            
        </div>
        @endforeach
        
    </div>
    
</div>
</section>
{{-- @foreach ($articles as $article)
    <div class="">
     
            <a href="" class="gambararticle">
                <img class="img-responsive img-thumbnail img-center" style="width:330px;height:230px" src="{{ $article->picture }}" alt="Generic placeholder image">
              <h5>
                <a href="" class="judul">{{ $article->title }}</a>
              </h5>
              <p class="card-text text-justify">{{ substr($article->content, 0, 250) }} ....
                <a href="#">Selengkapnya</a>
              </p>
              <h6>Created by : {{ $article->createdby }}</h6>
              <h6>{{ $article->created_at->format('Y-m-d')  }}</h6>
            </a>
          
    </div>
  @endforeach --}}