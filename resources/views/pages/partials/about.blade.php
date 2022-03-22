<section class="about">
    <div class="container">
        <div class="circle-3"></div>

        <div class="about-body bg-light">
            <header>
                <h2 class="about-title">{{ __('Kto je KAFEX') }}</h2>
            </header>
            <div class="about-text">
{{--                <p>{{ __('Webové stránky vyvíjam už od roku 2014. Pracujem s modernými technológiami a frameworkami. Aktuálne pôsobím v Bratislave. Voľný čas trávim v prírode s rodinou a psom.') }}</p>--}}
                <p>{{ __('Za spoločnosťou je Marek Zofota. Pracujem ako freelancer. Webové stránky vyvíjam od roku 2014. Pracujem s modernými technológiami a frameworkami. Aktuálne pôsobím v Bratislave. Voľný čas trávim v prírode s rodinou a psom.') }}</p>
                <a href="{{ url('#kontakt') }}" class="btn btn-primary">{{ __('Pozvať na kávu') }}</a>
            </div>
        </div>
        <footer class="about-footer">
            <picture class="about-photo">
                <source srcset="{{ asset('/images/me.jpg') }}" media="(max-width: 1200px)">
                <source srcset="{{ asset('/images/me@2x.jpg') }}" media="(min-width: 1200px)">
                <img src="{{ asset('/images/me.jpg') }}"
                     srcset="{{ asset('/images/me.jpg') }} 1200w,
                    {{ asset('/images/me@2x.jpg') }} 2000w"
                     sizes="100vw"
                     alt="{{ __('káva a zápisník s perom na stole') }}">
            </picture>
            <picture class="about-image">
                <source srcset="{{ asset('/images/coffe.jpg') }}" media="(max-width: 1200px)">
                <source srcset="{{ asset('/images/coffe@2x.jpg') }}" media="(min-width: 1200px)">
                <img src="{{ asset('/images/coffe.jpg') }}"
                     srcset="{{ asset('/images/coffe.jpg') }} 1200w,
                        {{ asset('/images/coffe@2x.jpg') }} 2000w"
                     sizes="100vw"
                     alt="{{ __('káva a zápisník s perom na stole') }}">
            </picture>
        </footer>
    </div>
</section>
