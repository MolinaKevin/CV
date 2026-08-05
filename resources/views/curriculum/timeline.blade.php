@php
    $locale = \Session::get('locale') ? \Session::get('locale') : \App::getLocale();
    $stepValue = function ($step, $field) use ($locale) {
        return $step->getTranslation($field, $locale, false)
            ?: $step->getTranslation($field, 'es', false)
            ?: $step->getRawOriginal($field);
    };
@endphp

<div>
<style>
    .cv-timeline {
        --timeline-line: #025373;
        --timeline-card: #F5FAFA;
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 3rem 1.25rem;
    }

    .cv-timeline::before {
        content: '';
        position: absolute;
        top: 3.5rem;
        bottom: 3.5rem;
        left: 15.5rem;
        width: 2px;
        background: var(--timeline-line);
        opacity: .45;
    }

    .cv-timeline-item {
        position: relative;
        display: grid;
        grid-template-columns: 14rem minmax(0, 1fr);
        column-gap: 3rem;
        padding: 0 0 2.5rem;
    }

    .cv-timeline-meta {
        padding-top: 1.25rem;
        text-align: right;
    }

    .cv-timeline-marker {
        position: absolute;
        top: 1.8rem;
        left: 15.5rem;
        width: 1rem;
        height: 1rem;
        transform: translateX(-50%);
        border: 3px solid var(--timeline-line);
        border-radius: 9999px;
        background: #8AB0BF;
        box-shadow: 0 0 0 5px #8AB0BF;
    }

    .cv-timeline-card {
        position: relative;
        padding: 1.5rem;
        border: 1px solid rgba(0, 25, 70, .18);
        border-radius: 1rem;
        background: var(--timeline-card);
        box-shadow: 0 12px 28px rgba(0, 25, 70, .12);
    }

    .cv-timeline-card--collapsible {
        cursor: pointer;
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .cv-timeline-card--collapsible:hover {
        transform: translateY(-2px);
        box-shadow: 0 16px 32px rgba(0, 25, 70, .18);
    }

    .cv-timeline-card::before {
        content: '';
        position: absolute;
        top: 1.6rem;
        left: -0.6rem;
        width: 1rem;
        height: 1rem;
        transform: rotate(45deg);
        border-bottom: 1px solid rgba(0, 25, 70, .18);
        border-left: 1px solid rgba(0, 25, 70, .18);
        background: var(--timeline-card);
    }

    @media (max-width: 767px) {
        .cv-timeline::before {
            left: 1.6rem;
        }

        .cv-timeline-item {
            display: block;
            padding: 0 0 2rem 3.5rem;
        }

        .cv-timeline-meta {
            padding: 0 0 .75rem;
            text-align: left;
        }

        .cv-timeline-marker {
            top: .35rem;
            left: 1.6rem;
        }

        .cv-timeline-card::before {
            top: -0.55rem;
            left: 1.25rem;
            border-top: 1px solid rgba(0, 25, 70, .18);
            border-right: 1px solid rgba(0, 25, 70, .18);
            border-bottom: 0;
            border-left: 0;
        }
    }
</style>

    <div class="cv-timeline">
        @foreach($steps as $step)
            <article wire:key="timeline-step-{{ $step->id }}" class="cv-timeline-item js-show-on-scroll">
                <div class="cv-timeline-meta">
                    <span class="block font-semibold title-font text-paleta-secundario">{{ $step->begin }} - {{ $step->finish }}</span>
                </div>
                <span class="cv-timeline-marker" aria-hidden="true"></span>
                <div
                    class="cv-timeline-card {{ $active != $step->id ? 'cv-timeline-card--collapsible' : '' }}"
                    wire:click="showMore({{ $step->id }})"
                >
                    <h2 class="text-2xl font-medium text-paleta-secundario title-font mb-2">{!! $stepValue($step, 'title') !!}</h2>
                    <p class="font-semibold text-paleta-cuaternario {{ $active == $step->id ? 'mb-4' : '' }}">{!! $stepValue($step, 'place') !!}</p>
                    @if($active == $step->id)
                        <div wire:key="timeline-experience-{{ $step->id }}">
                            <livewire:experience :step="$active" :key="'experience-' . $active" />
                        </div>
                    @endif
                </div>
            </article>
        @endforeach
    </div>
    @if($modal && $screen)
        <x-image-modal wire:model="modal" maxWidth="5xl">
            <x-slot name="title">
            </x-slot>

            <x-slot name="content">
		        <img src="{{ $screen->url }}" class="mx-auto rounded-none shadow-2xl block max-h-screen">
            </x-slot>

            <x-slot name="footer">
                <p class="text-2xl text-left">
                    {{ $screen->getTranslation('title', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) }}
                </p>
                <p class="text-justify">
                    {!! $screen->getTranslation('content', \Session::get('locale') ? \Session::get('locale') : \App::getLocale() ) !!}
                </p>
            </x-slot>
        </x-image-modal>
    @endif
</div>
