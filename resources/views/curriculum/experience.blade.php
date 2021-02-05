<section class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap flex-col">
        <div class="flex mx-auto flex-wrap mb-2">
            @foreach($boxes as $box)

                <a
                    class="sm:px-24 py-3 w-1/2 sm:w-1/{{ $count }} justify-center sm:justify-start border-b-2 title-font font-medium bg-gray-100 inline-flex items-center leading-none {{ $selected->id == $box->id ? 'border-indigo-500 text-indigo-500' : 'border-gray-200 hover:text-gray-900' }} tracking-wider rounded-t cursor-pointer"
                    wire:click="$emit('changeBox',{{ $box->id }})"
                >
                    <i class="w-5 h-5 mr-3 {{ $box->icon }}"></i>
                    <span class="uppercase">{!! $box->name !!}</span>
                </a>
            @endforeach

        </div>
        <!--img class="xl:w-1/4 lg:w-1/3 md:w-1/2 w-2/3 block mx-auto mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600"-->
        <div class="flex flex-col text-center w-full">
            @switch($selected->type)
                @case(1)
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">{!! $selected->content !!}</p>
                    @break
                @case(2)
                    <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                        @foreach($selected->products as $product)
                            <div class="p-2 sm:w-1/5 w-full">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <i class="{{ $product->icon }} fa-2x text-indigo-500 w-6 h-6 flex-shrink-0 mr-4"></i>
                                    <span class="title-font font-medium">{{ $product->name }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @break
                @case(3)
                    <div class="h-100 bg-gray-300 rounded-lg overflow-hidden p-10 py-56 pb-2 pl-28 flex items-end justify-start relative">
                      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={!! $selected->content !!}&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                      <div class="bg-white relative flex flex-wrap py-8 rounded shadow-md">
                        <div class="px-20">
                          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">LOCACION</h2>
                          <p class="mt-1">{!! $selected->content !!}</p>
                        </div>
                      </div>
                    </div>
                    @break
            @endswitch
        </div>
    </div>
</section>

