<div class="flex items-center h-auto lg:h-full flex-wrap mx-auto my-32 lg:my-32">

	<!--Main Col-->
	<div id="profile" class="w-full lg:w-2/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-paleta-primario  mx-2 lg:mx-0">

		<div class="p-4 md:p-12 text-center lg:text-left">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('{{ asset('storage/images/yo.jfif') }}')"></div>

			<h1 class="text-3xl text-paleta-secundario font-bold pt-8 lg:pt-0">Kevin Molina</h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-paleta-quinario "></div>
            <p class="pt-4 text-base text-paleta-secundario font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-paleta-secundario pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>
                <span
                     class="txt-rotate"
                     data-period="3000"
                >
                </span>
            </p>
			<p class="pt-2 text-paleta-secundario text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-paleta-secundario pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/></svg> {{ __('Detras del monitor, probablemente en VIM') }}</p>
            <p class="mt-4 text-sm text-paleta-secundario max-h-40 text-justify pr-5 overflow-y-auto scrollbar-thin scrollbar-thumb-paleta-quinario scrollbar-track-paleta-primario overflow-y-scroll scrollbar-thumb-rounded">{{ __('Si estás acá probablemente estés pensando en contratarme y por ende me veo en la necesidad de advertirte un par de cuestiones. Me interesa dar todo. Si estás buscando una mano de obra robotizada y sin criterio no soy la persona indicada. Yo soy una persona comprometida, la cual se ha embarcado en diferentes travesías y que se esfuerza por encontrar las mejores soluciones a los problemas que se le presenten, tanto en la profesión como en el resto de la vida. Soy apasionado y leal, me gusta dar todo lo que tengo. Me gusta aprender y no le tengo miedo a ninguna tecnología. A lo largo de mi carrera me he topado con problemas tan heterogéneos que conozco muchos caminos y posibles soluciones, también por ello me gusta compartir mi experiencia y que haya un objetivo o fin claro al momento de resolver cuestiones. Dado mi experiencia profesional y mis diferentes proyectos, me considero apto para participar en discusiones y aportar mi experiencia en la toma de decisiones, pues me motiva mucho el hecho de ser escuchado. Por cualquier duda o cuestión no dudes en contactarme con las herramientas de acá abajo y podemos charlarlo en persona, soy un tipo afable :).') }}</p>
			<div class="pt-4 pb-8">
				<button wire:click="showModal" class="bg-paleta-secundario hover:bg-paleta-quinario text-paleta-quinario hover:text-paleta-secundario font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-0">
                    {{ __('Enviame un mail') }}
				</button>
			</div>

			<div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
				<a class="link" href="https://www.facebook.com/KevinTuki"><svg class="h-6 fill-current text-paleta-secundario hover:text-paleta-terciario" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg></a>
				<a class="link" href="https://github.com/MolinaKevin"><svg class="h-6 fill-current text-paleta-secundario hover:text-paleta-terciario" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg></a>
                <a class="link" href="https://api.whatsapp.com/qr/HU5H4JF7E2S2N1">
                    <svg class="h-6 fill-current text-paleta-secundario hover:text-paleta-terciario" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Whatsapp</title>
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"></path>
                    </svg>
                </a>
                <a class="link" href="https://t.me/MolinaKev">
                    <svg class="h-6 fill-current text-paleta-secundario hover:text-paleta-terciario" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Telegram</title>
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"></path>
                    </svg>
                </a>
			    <a class="link" href="https://www.youtube.com/channel/UC327vQZQpAr3hKOIjsIXy1w"><svg class="h-6 fill-current text-paleta-secundario hover:text-paleta-terciario" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>YouTube</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg></a>
			</div>

			<!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

		</div>

	</div>

	<!--Img Col-->
	<div class="w-full lg:w-3/5">
		<!-- Big profile image for side bar (desktop) -->
		<img src="{{ asset('storage/images/yo.jfif') }}" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
		<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

	</div>

    <x-dialog-modal wire:model="modal" maxWidth="7xl">
        <x-slot name="title">
            {{ __('Enviame un mail') }}
        </x-slot>

        <x-slot name="content">

            <div class="container px-5 py-2 mx-auto flex sm:flex-nowrap flex-wrap">
                <textarea id="message" name="message" placeholder="{{ __('Escribeme a mi directamente') }}" class="lg:w-2/3 rounded md:w-1/2 sm:mr-10 p-10 bg-white focus:border-paleta-cuaternario focus:ring-2 focus:ring-paleta-cuaternario text-base text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out border-2 border-paleta-cuaternario"></textarea>

                <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:mt-0">
                    <button class="text-paleta-cuaternario bg-paleta-primario border-2 border-paleta-cuaternario py-2 px-6 focus:outline-none hover:bg-paleta-cuaternario hover:text-paleta-primario rounded text-lg mb-2">{{ __('Contacto directo') }}</button>
                    <button class="text-paleta-cuaternario bg-paleta-primario border-2 border-paleta-cuaternario py-2 px-6 focus:outline-none hover:bg-paleta-cuaternario hover:text-paleta-primario rounded text-lg mb-2">{{ __('Oferta') }}</button>
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-paleta-secundario">{{ __('Nombre') }}</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border-2 border-paleta-cuaternario focus:border-paleta-cuaternario focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-paleta-secundario">{{ __('Email') }}</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border-2 border-paleta-cuaternario focus:border-paleta-cuaternario focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-paleta-secundario">{{ __('Asunto') }}</label>
                        <input type="text" id="subject" name="subject" class="w-full bg-white rounded border-2 border-paleta-cuaternario focus:border-paleta-cuaternario focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>

                    <button class="text-paleta-cuaternario bg-paleta-primario border-2 border-paleta-cuaternario py-2 px-6 focus:outline-none hover:bg-paleta-cuaternario hover:text-paleta-primario rounded text-lg mb-2">{{ __('Enviar') }}</button>
                </div>
          </div>
        </x-slot>

        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>


    <script>
        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10);
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var j = (i == 0) ? 0 : i - 1;
            var lastDev = this.toRotate[j].developer;
            var lang = "{{ \Session::get('locale') ? \Session::get('locale') : \App::getLocale() }}";
            var addTxt = this.toRotate[i].agregar[lang];
            var fullTxt = this.toRotate[i].name;
            var antes = this.toRotate[i].antes;
            var inicio = 0;
            var temp = false;
            if (lastDev != dev) {
                inicio = 14;
            }
            if (lang == 'es') {
                fullTxt = addTxt + " " + fullTxt;
            } else if (lang == 'de' && antes == 1) {
                fullTxt =  fullTxt + "-" + addTxt;
            } else {
                fullTxt = addTxt + " " + fullTxt;
            }
            var dev = this.toRotate[i].developer;

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }
            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';



          var that = this;
          var delta = 100 - Math.random() * 5;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 1000;
          }

          setTimeout(function() {
            that.tick();
          }, delta);
        };

        window.onload = function() {
          var elements = document.getElementsByClassName('txt-rotate');
          for (var i=0; i<elements.length; i++) {
            //var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            var toRotate = {!! $techs !!};
            console.log(toRotate);
            if (toRotate) {
                    new TxtRotate(elements[i], toRotate, period);
            }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
          document.body.appendChild(css);
        };

    </script>

</div>

