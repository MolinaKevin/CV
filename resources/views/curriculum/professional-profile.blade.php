@php
    $isGerman = app()->getLocale() === 'de';
@endphp

<section class="py-16 px-4 text-paleta-secundario">
    <div class="max-w-6xl mx-auto">
        <div class="max-w-3xl mb-10">
            <p class="text-sm font-bold uppercase tracking-widest text-paleta-cuaternario">
                {{ $isGerman ? 'Berufliches Profil' : 'Perfil profesional' }}
            </p>
            <h2 class="mt-2 text-3xl font-bold">
                {{ $isGerman ? 'Software, Infrastruktur und Produktverantwortung' : 'Software, infraestructura y responsabilidad de producto' }}
            </h2>
            <p class="mt-4 leading-relaxed text-justify">
                {{ $isGerman
                    ? 'Interdisziplinär aufgestellt mit Schwerpunkt auf digitalen Systemen und gesellschaftlicher Wirkung. Langjährige Erfahrung in Entwicklung, Produktverantwortung und Koordination komplexer Projekte im Forschungsumfeld sowie in sozial-ökologischen Initiativen.'
                    : 'Perfil interdisciplinario, con foco en sistemas digitales e impacto social. Experiencia sostenida en desarrollo, responsabilidad de producto y coordinación de proyectos complejos, tanto en investigación como en iniciativas sociales y ecológicas.' }}
            </p>
        </div>

        <article class="rounded-lg bg-paleta-primario shadow-xl p-6 md:p-8 mb-8">
            <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                <div>
                    <p class="text-sm font-bold uppercase tracking-widest text-paleta-cuaternario">2020 — {{ $isGerman ? 'heute' : 'actualidad' }}</p>
                    <h3 class="mt-2 text-2xl font-bold">Universitätsmedizin Göttingen (UMG)</h3>
                    <p class="font-semibold">Site Reliability Engineer &amp; Product Owner · Göttingen, {{ $isGerman ? 'Deutschland' : 'Alemania' }}</p>
                </div>
                <i class="fas fa-server text-3xl text-paleta-cuaternario mt-4 md:mt-0"></i>
            </div>

            <ul class="mt-6 grid gap-3 md:grid-cols-2 leading-relaxed">
                @if($isGerman)
                    <li>Verantwortung für eine wachsende Linux-Server-Infrastruktur und produktive Forschungssysteme.</li>
                    <li>Standardisierung und Automatisierung von Deployments, Wartung und Service-Prozessen mit Bash, Cron und Skripting.</li>
                    <li>Migration mehrerer Systeme auf neue Debian-Releases bei Sicherstellung der Produktionsstabilität.</li>
                    <li>Einführung eines zentralen Monitorings auf Basis des ELK-Stacks.</li>
                    <li>Übernahme, Fertigstellung und produktive Inbetriebnahme des europaweit genutzten Forschungsportals Feasibility Explorer.</li>
                    <li>Schnittstelle zwischen IT, Forschung und Fachanwendern; Priorisierung der technischen Roadmap.</li>
                @else
                    <li>Responsable de una infraestructura creciente de servidores Linux y de sistemas productivos de investigación.</li>
                    <li>Estandarización y automatización de despliegues, mantenimiento y procesos operativos con Bash, Cron y scripting.</li>
                    <li>Migración de varios sistemas a nuevas versiones de Debian, preservando la estabilidad en producción.</li>
                    <li>Implementación de monitoreo centralizado basado en ELK Stack.</li>
                    <li>Finalización y puesta en producción del portal de investigación Feasibility Explorer, utilizado a nivel europeo.</li>
                    <li>Puente entre IT, investigación y usuarios especializados; priorización de la hoja de ruta técnica.</li>
                @endif
            </ul>
        </article>

        <div class="grid gap-8 lg:grid-cols-2">
            <article class="rounded-lg bg-paleta-primario shadow-xl p-6">
                <h3 class="text-2xl font-bold">{{ $isGerman ? 'Technischer Schwerpunkt' : 'Stack actual' }}</h3>
                <div class="mt-5 space-y-4 leading-relaxed">
                    <p><strong>{{ $isGerman ? 'Backend:' : 'Backend:' }}</strong> Java / Spring Boot, PHP / Laravel, Python, JavaScript / Node.js, REST APIs.</p>
                    <p><strong>{{ $isGerman ? 'Mobile:' : 'Móvil:' }}</strong> Dart, Flutter.</p>
                    <p><strong>{{ $isGerman ? 'Infrastruktur:' : 'Infraestructura:' }}</strong> Linux / Debian, Bash, Docker, Podman, GitLab CI/CD, Jenkins, Traefik, Apache, ELK Stack.</p>
                    <p><strong>{{ $isGerman ? 'Daten:' : 'Datos:' }}</strong> PostgreSQL, MySQL / MariaDB, SQLite.</p>
                    <p><strong>Frontend:</strong> Svelte, JavaScript, TypeScript, HTML, CSS; {{ $isGerman ? 'Erfahrung mit' : 'experiencia con' }} Vue, React, Angular {{ $isGerman ? 'und' : 'y' }} Livewire.</p>
                    <p><strong>{{ $isGerman ? 'Weitere Erfahrung:' : 'Experiencia adicional:' }}</strong> C#, .NET, Delphi, Google Cloud Platform, AWS, Raspberry Pi {{ $isGerman ? 'und' : 'y' }} APIs externas.</p>
                    <p><strong>Kubernetes:</strong> {{ $isGerman ? 'Grundkenntnisse.' : 'conocimientos básicos.' }}</p>
                    <p><strong>{{ $isGerman ? 'Historische Technologien:' : 'Tecnologías históricas:' }}</strong> AngularJS, Cordova / PhoneGap, Ionic, Visual Basic, jQuery {{ $isGerman ? 'und' : 'y' }} PHP 5/7.</p>
                </div>
            </article>

            <article class="rounded-lg bg-paleta-primario shadow-xl p-6">
                <h3 class="text-2xl font-bold">{{ $isGerman ? 'Ausbildung und Sprachen' : 'Formación e idiomas' }}</h3>
                <div class="mt-5 space-y-4 leading-relaxed">
                    <div>
                        <p class="font-bold">Universität Potsdam</p>
                        <p>{{ $isGerman ? 'Informatik / Computational Science · 2025 — heute' : 'Informática / Computational Science · 2025 — actualidad' }}</p>
                    </div>
                    <div>
                        <p class="font-bold">Georg-August-Universität Göttingen</p>
                        <p>{{ $isGerman ? 'Angewandte Informatik, Schwerpunkt Neuroinformatik · 2021 — 2024' : 'Informática aplicada, con foco en neuroinformática · 2021 — 2024' }}</p>
                    </div>
                    <div>
                        <p class="font-bold">Universidad Tecnológica Nacional, La Plata</p>
                        <p>{{ $isGerman ? 'Systemingenieurwesen · 2011 — 2016' : 'Ingeniería en Sistemas · 2011 — 2016' }}</p>
                    </div>
                    <p><strong>{{ $isGerman ? 'Sprachen:' : 'Idiomas:' }}</strong> {{ $isGerman ? 'Spanisch (Muttersprache), Deutsch (C1), Englisch (B2), Italienisch (A1), Isländisch (A1).' : 'Español nativo, alemán C1, inglés B2, italiano A1 e islandés A1.' }}</p>
                </div>
            </article>

            <article class="rounded-lg bg-paleta-primario shadow-xl p-6">
                <h3 class="text-2xl font-bold">{{ $isGerman ? 'Vorherige Erfahrung' : 'Experiencia previa' }}</h3>
                <div class="mt-5 space-y-4 leading-relaxed">
                    <div>
                        <p class="font-bold">Maschinenhandel Meyer GmbH · 2019 — 2020</p>
                        <p>{{ $isGerman ? 'Softwareentwickler & IT-Administrator. Entwicklung interner Lösungen, Betreuung von Server- und Netzwerkinfrastruktur sowie Modernisierung bestehender Systeme.' : 'Desarrollador de software y administrador IT. Desarrollo de soluciones internas, mantenimiento de servidores y redes, y modernización de sistemas existentes.' }}</p>
                    </div>
                    <div>
                        <p class="font-bold">{{ $isGerman ? 'Unternehmerische Projekte · 2014 — heute' : 'Proyectos emprendedores · 2014 — actualidad' }}</p>
                        <p>{{ $isGerman ? 'Mitgründer und Entwickler digitaler Plattformen mit regionalem, sozialem und ökologischem Fokus: SOMOS, GKD, Descuentodo und Publitodo.' : 'Cofundador y desarrollador de plataformas digitales con foco regional, social y ecológico: SOMOS, GKD, Descuentodo y Publitodo.' }}</p>
                    </div>
                </div>
            </article>

            <article class="rounded-lg bg-paleta-primario shadow-xl p-6">
                <h3 class="text-2xl font-bold">{{ $isGerman ? 'Auszeichnungen und Engagement' : 'Reconocimientos e iniciativas' }}</h3>
                <div class="mt-5 space-y-4 leading-relaxed">
                    <p><strong>{{ $isGerman ? 'Preis Junger Unternehmer der Stadt La Plata · 2017.' : 'Premio Joven Empresario de la ciudad de La Plata · 2017.' }}</strong><br>{{ $isGerman ? 'Für die Projekte Publitodo und Descuentodo.' : 'Por los proyectos Publitodo y Descuentodo.' }}</p>
                    <p><strong>{{ $isGerman ? '2. Platz beim Ingenieurwettbewerb der UTN · 2016.' : '2.º puesto en concurso de ingeniería UTN · 2016.' }}</strong><br>{{ $isGerman ? 'Drohnen-System zur automatisierten Geländevermessung.' : 'Sistema de drones para relevamiento automatizado de terrenos.' }}</p>
                    <p>{{ $isGerman ? 'Mitgründer und Kommissionsmitglied bei FELP Joven sowie ehrenamtliche Kinder- und Jugendarbeit bei TECHO Argentinien.' : 'Cofundador y miembro de comisión de FELP Joven, además de voluntario en trabajo con niñas, niños y jóvenes en TECHO Argentina.' }}</p>
                </div>
            </article>
        </div>
    </div>
</section>
