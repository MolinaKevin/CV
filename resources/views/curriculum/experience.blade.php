@php
    $locale = \Session::get('locale') ? \Session::get('locale') : \App::getLocale();
    $boxLabel = function ($box) use ($locale) {
        return $box->getTranslation('name', $locale, false)
            ?: $box->getTranslation('name', 'es', false)
            ?: $box->getRawOriginal('name');
    };
    $boxContent = function ($box) use ($locale) {
        return $box->getTranslation('content', $locale, false)
            ?: $box->getTranslation('content', 'es', false)
            ?: $box->getRawOriginal('content');
    };
@endphp

<section class="body-font">
    <style>
        .cv-experience-content p + p {
            margin-top: .75rem;
        }

        .cv-experience-content ul {
            margin: .75rem 0 0;
            padding-left: 1.5rem;
            list-style: disc;
        }

        .cv-experience-content li + li {
            margin-top: .4rem;
        }
    </style>
    <div class="flex flex-col text-center w-full pb-2">
        @switch($selected->type)
            @case(1)
                <div class="cv-experience-content lg:w-100 mx-auto text-left leading-relaxed text-paleta-secundario">{!! $boxContent($selected) !!}</div>
                @break
            @case(2)
                <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                        @foreach($selected->products as $product)
                        <div wire:key="experience-product-{{ $product->id }}" class="p-2 sm:w-1/5 w-full">
                            <div class="bg-paleta-primario rounded flex p-4 h-full items-center">
                                <i class="{{ $product->icon }} fa-2x text-paleta-secundario w-6 h-6 flex-shrink-0 mr-4"></i>
                                <span class="title-font font-medium">{{ $product->name }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                @break
            @case(3)
                @php
                    $location = trim(strip_tags($boxContent($selected)));
                    $knownLocations = [
                        'universitätsmedizin göttingen' => [51.552, 9.944],
                        'göttingen' => [51.534, 9.935],
                        'potsdam' => [52.400, 13.060],
                        'brandsen' => [-35.168, -58.234],
                        'punta lara' => [-34.822, -57.977],
                        'la plata' => [-34.921, -57.955],
                    ];
                    $coordinates = null;

                    foreach ($knownLocations as $needle => $point) {
                        if (mb_stripos($location, $needle) !== false) {
                            $coordinates = $point;
                            break;
                        }
                    }
                @endphp
                @if($coordinates)
                    @php
                        [$latitude, $longitude] = $coordinates;
                        $bbox = implode(',', [
                            $longitude - 0.06,
                            $latitude - 0.04,
                            $longitude + 0.06,
                            $latitude + 0.04,
                        ]);
                    @endphp
                    <div class="h-100 bg-gray-300 rounded-lg overflow-hidden p-10 py-56 pb-2 pl-8 flex items-end justify-start relative">
                        <iframe
                            width="100%"
                            height="100%"
                            class="absolute inset-0"
                            frameborder="0"
                            title="Mapa de {{ $location }}"
                            scrolling="no"
                            src="https://www.openstreetmap.org/export/embed.html?bbox={{ rawurlencode($bbox) }}&amp;layer=mapnik&amp;marker={{ $latitude }}%2C{{ $longitude }}"
                            style="filter: grayscale(1) contrast(1.2) opacity(0.4);"
                        ></iframe>
                        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                            <div class="px-8">
                                <h2 class="title-font font-semibold text-paleta-secundario tracking-widest text-xs">{{ __('LOCACIÓN') }}</h2>
                                <p class="mt-1 text-paleta-secundario">{{ $location }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="rounded-lg border-2 border-paleta-cuaternario bg-paleta-primario p-10 text-center">
                        <i class="fas fa-map-marker-alt fa-3x text-paleta-cuaternario mb-4"></i>
                        <h2 class="title-font font-semibold text-paleta-secundario tracking-widest text-xs">{{ __('LOCACIÓN') }}</h2>
                        <p class="mt-2 text-paleta-secundario">{{ $location }}</p>
                        <a
                            class="inline-flex mt-5 items-center text-paleta-cuaternario hover:text-paleta-secundario font-semibold"
                            href="https://www.openstreetmap.org/search?query={{ rawurlencode($location) }}"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Ver en OpenStreetMap <i class="fas fa-external-link-alt ml-2"></i>
                        </a>
                    </div>
                @endif
                @break
            @case(4)
                <div class="container px-5 py-4 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        @foreach($selected->screenshots as $image)
                            <div class="lg:w-1/3 sm:w-1/2 p-4 h-50">
                                <div class="flex relative h-60 cursor-pointer" wire:click.stop="$emit('showModal',{{ $image }})">
                                  <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ $image->url }}">
                                  <div class="px-8 py-10 relative z-10 w-full border-4 border-paleta-secundario bg-paleta-primario opacity-0 hover:opacity-90">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-paleta-quinario mb-1">{{ $image->getTranslation('subtitle', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) }}</h2>
                                    <h1 class="title-font text-lg font-medium text-paleta-secundario mb-3">{{ $image->getTranslation('title', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) }}</h1>
                                    <p class="leading-relaxed text-paleta-secundario">{!! $image->getTranslation('content', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) !!}</p>
                                  </div>
                                </div>
                              </div>
                         @endforeach
                    </div>
                </div>
                @break
            @case(5)
                <div class="flex flex-wrap md:-m-2 -m-1">
                  <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                      <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                      <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/501x301">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                      <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
                    </div>
                  </div>
                  <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                      <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                      <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/502x302">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                      <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
                    </div>
                  </div>
                </div>
                @break
        @endswitch
    </div>
    <div class="flex mx-auto flex-wrap mb-2 divide-x-2 divide-paleta-secundario border-2 border-paleta-secundario">
        @foreach($boxes as $box)
            <a
                wire:key="experience-box-{{ $box->id }}"
                class="px-6 py-3 text-sm justify-center title-font font-medium bg-paleta-primario inline-flex items-center leading-none {{ $selected->id == $box->id ? 'border-paleta-secundario text-paleta-primario bg-paleta-cuaternario' : 'border-paleta-secundario text-paleta-secundario '  }} hover:text-paleta-primario hover:bg-paleta-cuaternario tracking-wider cursor-pointer md:px-12 lg:text-base"
                style="width: {{ 100 / max($count, 1) }}%;"
                wire:click.stop="changeBox({{ $box->id }})"
            >
                <i class="w-5 h-5 mr-3 {{ $box->icon }}"></i>
                <span class="uppercase">{!! $boxLabel($box) !!}</span>
            </a>
        @endforeach
    </div>
</section>
