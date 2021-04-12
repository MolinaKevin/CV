<div>
    <div class="container px-5 py-24 mx-auto">
        <div class="-my-8 divide-y-2 divide-paleta-secundario">
            @foreach($steps as $step)
                <div class="flex flex-col">
                    <div class="py-8 flex flex-wrap md:flex-nowrap js-show-on-scroll">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-paleta-secundario">{!! $step->getTranslation('place', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) !!}</span>
                            <span class="mt-1 text-paleta-secundario opacity-75 text-sm">{{ $step->begin }} - {{ $step->finish }}</span>
                        </div>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-paleta-secundario title-font mb-2">{!! $step->getTranslation('title', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) !!}</h2>
                            <p class="leading-relaxed text-paleta-secundario">{!! $step->getTranslation('description', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) !!}</p>
                            @if($active != $step->id)
                                <a wire:click="$emit('timelineSelect',{{ $step->id }})" class="text-paleta-secundario inline-flex items-center mt-4 cursor-pointer">{{ __('Leer mas') }}
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                    @if($active == $step->id)
                        <livewire:experience :step="$active" />
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
