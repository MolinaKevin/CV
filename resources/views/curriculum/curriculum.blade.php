<div class="h-full items-center justify-center w-full mt-6 md:mt-0 md:w-1/2 mb-10 py-24 flex flex-col flex-col-reverse">
    <div class="relative w-full h-4/6 py-3 sm:max-w-xl sm:mx-auto flex-1 flex-initial">
        <div class="absolute inset-0 bg-gradient-to-r from-red-400 to-light-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative h-full w-full bg-white shadow-lg sm:rounded-3xl sm:p-5">
            <!-- component -->
            <div class="bg-white h-full">
                <table class="w-full text-center border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                    <thead>
                        <tr>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">City</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($techs as $tech)
                            <tr class="hover:bg-grey-lighter">
                              <td class="py-4 px-6 border-b border-grey-light">{{ $tech->name }}</td>
                              <td class="border-b border-grey-light">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($tech->level >= $i)
                                        <svg class="h-1/6 inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                    @else
                                        <svg class="h-1/5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                                    @endif
                                @endfor
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="py-2">
                    {{ $techs->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="text-center w-full flex-1">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Kevin Molina, {{ $name }} {{ $developer ? 'Developer' : '' }}</h1>
        <p class="mb-8 leading-relaxed">Meggings kinfolk echo park stumptown DIY, f fingerstache pitchfork.</p>
        <div class="flex justify-center">
            <button
                wire:click="increment"
                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Ver mas Tecnologias</button>
        </div>
    </div>
</div>
