<div class="mx-auto h-full flex flex-col">
    @if($selection)
        <div class="flex flex-wrap flex-row mb-20">
            <div class="w-1/3 flex-col items-center text-center border-r border-gray-400">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Que tecnologias, skills?</h1>
                <p class="w-full leading-relaxed text-gray-500">Si no esta seguro de contactarme, dejeme ayudarle a buscar profesionales.</p>
            </div>

            <div class="flex flex-initial m-w-2/3 px-10 items-center text-center ">
                @foreach($selection as $select)
                    <div class="mb-2 mr-2">
                        <button wire:click="removeProduct({{ $select["id"] }})" class="rounded-md py-2 px-4 text-gray-100 bg-gray-900 hover:bg-gray-800 focus:outline-none">
                            {{ $select["name"] }} <i class="fas fa-times fa-fw"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Que tecnologias, skills?</h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Si no esta seguro de contactarme, dejeme ayudarle a buscar profesionales.</p>
        </div>
    @endif
    <div class="flex flex-wrap -m-4">
        @foreach($products as $product)
            <div wire:click="addProduct({{ $product }})" class="xl:w-1/3 md:w-1/2 p-4 ">
                <div class="border border-gray-200 p-6 rounded-lg cursor-pointer transform hover:scale-105 transition duration-300 erase-in-out">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full text-indigo-500 mb-4">
                        <i class="fab fa-{{ $product->icon }} fa-2x"></i>
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{ $product->name }}</h2>
                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
  </div>
