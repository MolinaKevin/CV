<div class="mx-auto h-full flex flex-col">
    @if($selection)
        <div class="flex flex-wrap flex-row mb-20">
            <div class="w-1/3 flex-col items-end text-center m-auto">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-paleta-secundario">Que tecnologias, skills?</h1>
                <p class="w-full leading-relaxed text-paleta-secundario">Si no esta seguro de contactarme, dejeme ayudarle a buscar profesionales.</p>
            </div>
            <div class="flex flex-wrap lg:w-2/3 sm:mb-2 -mx-2 border-l border-paleta-secundario ">
                @foreach($selection as $select)
                    <div class="p-2 sm:w-1/4 w-1/2">
                        <div class="bg-paleta-cuaternario rounded flex p-4 items-center" >
                            <i class="{{ $select["icon"] }} fa-2x text-paleta-quinario w-6 h-6 flex-shrink-0 mr-4"></i>
                            <span class="title-font font-medium text-paleta-quinario">{!! $select["name"] !!}</span>
                            <button
                                class="rounded-full w-6 h-6 p-0 border-0 inline-flex items-center justify-center text-paleta-secundario hover:bg-paleta-secundario hover:text-paleta-quinario ml-auto mr-0 "
                                wire:click="removeProduct({!! $select["id"] !!})"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                @endforeach
                <div class="p-2 sm:w-1/4 w-1/2">
                        <div
                            class="bg-paleta-cuaternario rounded flex p-4 items-center cursor-pointer hover:bg-paleta-secundario hover:text-paleta-quinario"
                            wire:click="removeProducts"
>
                            <i class="fas fa-times fa-2x text-paleta-quinario w-6 h-6 flex-shrink-0 mr-4"></i>
                            <span class="title-font font-medium text-paleta-quinario">Limpiar</span>
                            <button
                                class="rounded-full w-6 h-6 p-0 border-0 inline-flex items-center justify-center text-paleta-secundario hover:bg-paleta-secundario hover:text-paleta-quinario ml-auto mr-0 "
                                                            >
                            </button>
                        </div>
                    </div>

            </div>
        </div>
    @else
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-paleta-terciario">Que tecnologias, skills?</h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-paleta-terciario">Si no esta seguro de contactarme, dejeme ayudarle a buscar profesionales.</p>
        </div>
    @endif
    <div class="flex flex-wrap -m-4 mb-3">
        <div class=" md:block  {{ $selection ? ($search && $type == '0' ) ? 'w-1/2' : 'w-1/3' : 'w-1/2' }} p-4" >
            <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>

                <input
                    type="text"
                    class="pl-10 pr-4 w-full py-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-paleta-cuaternario dark:border-paleta-cuaternario rounded-lg focus:border-paleta-cuaternario dark:focus:border-paleta-cuaternario focus:outline-none focus:ring focus:ring-paleta-cuaternario"
                    placeholder="Search"
                    wire:model="search"
                />

            </div>
        </div>
        <div class="{{ $selection ? 'xl:w-1/3' : 'w-1/2' }} md:w-1/2 p-4 flex ">
            <select
                wire:model="type"
                class="{{ ($search || $type != '0' ) ? 'w-full' : 'w-1/2 mr-2' }} rounded-lg focus:border-paleta-cuaternario focus:outline-none focus:ring focus:ring-paleta-cuaternario">
                <option value="">Todo</option>
                <option value="1">Hard Skills</option>
                <option value="2">Soft Skills</option>
            </select>
            @if($search || $this->tipo != "Todos")
            <button
                wire:click="limpiar"
                class="text-white w-1/2 bg-paleta-cuaternario border-0 ml-2 py-2 px-6 focus:outline-none hover:bg-paleta-secundario rounded-lg text-lg">
                Limpiar

            </button>
        @endif

        </div>

        @if($selection)
        <div class=" md:block  w-1/3 xl:w-1/3 md:w-1/2 p-4" >
            <button
                wire:click="showModal"
                class="text-white w-full bg-paleta-cuaternario border-0 py-2 pr-6 focus:outline-none hover:bg-paleta-secundario rounded-lg text-lg">
                Un resultado cercano a la busqueda encontrado
            </button>
        </div>
        @endif
    </div>

    <div class="flex flex-wrap -m-4">
        @if($products->count())
            @foreach($products as $product)
                <div  class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-paleta-secundario bg-paleta-terciario p-6 rounded-lg cursor-pointer transform hover:scale-105 transition duration-300 erase-in-out">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full text-paleta-primario mb-4">
                            <i class="{{ $product->icon }} fa-2x"></i>
                        </div>
                        <h2 class="text-lg text-paleta-quinario font-medium title-font mb-2">{!! $product->name !!}</h2>
                        <p class="leading-relaxed text-paleta-quinario">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="w-full p-4 text-paleta-secundario">
                No hay resultados disponibles para la busqueda: <br />
                {{ $search ? "Cadena buscada: \"$search\"" : ''}} {{ $search ? '-' : '' }} Tipo "{{ $this->tipo }}"
            </div>
        @endif
    </div>
    <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">
            {{ __('Resultados') }}
        </x-slot>

        <x-slot name="content">
            <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 overflow-hidden shadow-md rounded-lg">
                <img class="w-full h-100 object-cover" src="{{ asset('storage/images/yo.jfif') }}" alt="Article">

                <div class="p-6">
                    <div>
                        <span class="text-blue-600 dark:text-blue-400 text-xs font-medium uppercase">Kevin Alejandro Molina</span>
                        <br />
                        @if($selectionIn)
                            Skills coincidentes:
                            <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                                @foreach($selectionIn as $select)
                                  <div class="p-2 sm:w-1/2 w-full">
                                    <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                      </svg>
                                      <span class="title-font font-medium">{{ $select["name"] }}</span>
                                    </div>
                                  </div>
                                @endforeach
                            </div>
                        @endif
                        @if($selectionOut)
                            Skills no coincidentes:
                            <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                                @foreach($selectionOut as $select)
                                  <div class="p-2 sm:w-1/2 w-full">
                                    <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                      </svg>
                                      <span class="title-font font-medium">{{ $select["name"] }}</span>
                                    </div>
                                  </div>
                                @endforeach
                            </div>
                        @endif
                        @if($selectionDiverse)
                            Tecnolog&iacute;as en aprendizaje:
                            <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                                @foreach($selectionDiverse as $select)
                                  <div class="p-2 sm:w-1/2 w-full">
                                    <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                      </svg>
                                      <span class="title-font font-medium">{{ $select["name"] }}</span>
                                    </div>
                                  </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>
</div>


