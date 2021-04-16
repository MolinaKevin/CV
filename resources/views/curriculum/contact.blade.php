<div class="w-full h-full sm:h-5/6 text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79414.4675204447!2d9.856813326380006!3d51.53702337775974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a4d4b86f98cac7%3A0x425ac6d94ac3e30!2sG%C3%B6ttingen%2C%20Germany!5e0!3m2!1sen!2sus!4v1611048382620!5m2!1sen!2sus" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container w-full sm:py-10 px-8 mx-auto flex">
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">{{ __('Formulario de contacto') }}</h2>
            <div class="relative mb-4">
                <div class="flex my-2 ">
                    <button class="w-1/2 text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                    hover:border-paleta-cuaternario hover:bg-paleta-cuaternario hover:text-paleta-primario
                    bg-teal-100
                    @if($active == 0)
                        bg-paleta-cuaternario
                        text-paleta-primario
                        border-paleta-cuaternario
                    @else
                        text-paleta-cuaternario
                        border-paleta-cuaternario
                    @endif
                    border duration-200 ease-in-out
                    transition"

                    wire:click="setEmail(0)">
                        <div class="flex leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather w-5 h-5 mr-1">
                             @if($active == 0)
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            @else
                                <circle cx="12" cy="12" r="10"></circle>
                            @endif
                            </svg>
                            {{ __('Contacto') }}</div>
                    </button>
                    <button class="w-1/2 text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                    hover:border-paleta-cuaternario hover:bg-paleta-cuaternario hover:text-paleta-primario
                    @if($active == 1)
                        bg-paleta-cuaternario
                        text-paleta-primario
                        border-paleta-cuaternario
                    @else
                        text-paleta-cuaternario
                        border-paleta-cuaternario
                    @endif
                    border duration-200 ease-in-out
                    transition"

                    wire:click="setEmail(1)">
                        <div class="flex leading-5">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="feather w-5 h-5 mr-1">

                            @if($active == 1)
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            @else
                                <circle cx="12" cy="12" r="10"></circle>
                            @endif
                           </svg>

                            {{ __('Ofertas') }}</div>
                    </button>
                </div>
            </div>
            <div class="relative mb-4">
                <label for="nombre" class="leading-7 text-sm text-paleta-secundario">{{ __('Nombre') }}</label>
                <input wire:model="name" type="text" id="name" name="name" class="w-full bg-white rounded border-2 border-paleta-cuaternario focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-paleta-secundario">{{ __('Email') }}</label>
                <input wire:model="email" type="email" id="email" name="email" class="w-full bg-white rounded border-2 border-paleta-cuaternario focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-paleta-secundario">{{ __('Asunto') }}</label>
                <input wire:model="subject" type="text" id="subject" name="subject" class="w-full bg-white rounded border-2 border-paleta-cuaternario focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>

            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-paleta-secundario">{{ __('Mensaje') }}</label>
                <textarea wire:model="message" id="message" name="message" class="w-full bg-white rounded focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out border-2 border-paleta-cuaternario"></textarea>
            </div>
            <button class="bg-paleta-secundario hover:bg-paleta-quinario text-paleta-quinario hover:text-paleta-secundario font-bold border-0 py-2 px-6 focus:outline-none rounded text-lg"
                wire:submit.prevent="contactSubmit">
                {{ __('Enviar') }}
            </button>
        </div>
    </div>
</div>
