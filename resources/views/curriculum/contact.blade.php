<div class="w-full h-full sm:h-5/6 text-gray-600 body-font relative">
    <div
        wire:loading.flex
        wire:target="contactSubmit"
        class="fixed inset-0 z-50 items-center justify-center p-4"
        style="z-index: 80; background-color: rgba(0, 25, 70, .60);"
        role="status"
        aria-live="polite"
    >
        <div class="flex items-center rounded-lg bg-white px-6 py-4 text-paleta-secundario shadow-xl">
            <svg class="h-6 w-6 animate-spin" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
            </svg>
            <span class="ml-3">{{ __('Enviando mensaje…') }}</span>
        </div>
    </div>

    @if($feedback)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4" style="z-index: 90; background-color: rgba(0, 25, 70, .60);" role="dialog" aria-modal="true" aria-live="assertive">
            <div class="w-full max-w-md rounded-lg bg-white p-6 text-paleta-secundario shadow-xl">
                <h3 class="mb-3 text-lg font-bold">
                    {{ $feedbackType === 'error' ? __('No se pudo enviar el mensaje') : __('Mensaje enviado') }}
                </h3>
                <p class="mb-6">{{ $feedback }}</p>
                <button
                    type="button"
                    wire:click="clearFeedback"
                    class="w-full rounded bg-paleta-cuaternario px-4 py-2 font-bold text-paleta-primario hover:bg-paleta-quinario hover:text-paleta-secundario"
                >
                    {{ __('Cerrar') }}
                </button>
            </div>
        </div>
    @endif

    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="Mapa de Potsdam" scrolling="no" src="https://www.openstreetmap.org/export/embed.html?bbox=12.963%2C52.352%2C13.166%2C52.448&amp;layer=mapnik&amp;marker=52.400%2C13.060" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
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
            <label for="name" class="leading-7 text-sm text-paleta-secundario">{{ __('Nombre') }}</label>
            <div class="relative mb-4">
                <input wire:model="name" type="text" id="name" name="name" class="w-full bg-white rounded border-2 focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('name') border-red-500 @else border-paleta-cuaternario @enderror">
                @error('name')
                    <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <label for="email" class="leading-7 text-sm text-paleta-secundario">{{ __('Email') }}</label>
            <div class="relative mb-4">
                <input wire:model="email" type="email" id="email" name="email" class="w-full bg-white rounded border-2 focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('email') border-red-500 @else border-paleta-cuaternario @enderror " />
                @error('email')
                    <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <label for="subject" class="leading-7 text-sm text-paleta-secundario">{{ __('Asunto') }}</label>
            <div class="relative mb-4">
                <input wire:model="subject" type="text" id="subject" name="subject" class="w-full bg-white rounded border-2 focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('subject')border-red-500 @else border-paleta-cuaternario @enderror">
                @error('subject')
                    <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <label for="message" class="leading-7 text-sm text-paleta-secundario">{{ __('Mensaje') }}</label>
            <div class="relative mb-4">
                <textarea wire:model="message" id="message" name="message" class="w-full bg-white rounded focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out border-2 @error('message') border-red-500 @else border-paleta-cuaternario @enderror"></textarea>
                @error('message')
                    <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button
                class="bg-paleta-cuaternario hover:bg-paleta-quinario text-paleta-primario hover:text-paleta-secundario font-bold border-0 py-2 px-6 focus:outline-none rounded text-lg disabled:cursor-wait disabled:opacity-70"
                wire:click="contactSubmit"
                wire:loading.attr="disabled"
                wire:target="contactSubmit"
            >
                <span wire:loading.remove wire:target="contactSubmit">{{ __('Enviar') }}</span>
                <span wire:loading wire:target="contactSubmit">{{ __('Enviando…') }}</span>
            </button>
        </div>
    </div>
</div>
