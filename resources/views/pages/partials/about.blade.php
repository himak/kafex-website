<section class="about" id="o-nas">
    <div class="container">
        <div class="circle-3" data-aos="zoom-in" data-aos-duration="1000"></div>

        <div class="about-body bg-light" data-aos="fade-right" data-aos-delay="200">
            <header>
                <h2 class="about-name sr-only">{{ __('O nás') }}</h2>
                <h3 class="about-title" data-aos="fade-up" data-aos-delay="100">{{ __('Kto je KAFEX') }}</h3>
            </header>
            <div class="about-text">
                <p data-aos="fade-up" data-aos-delay="300">{{ __('Som freelancer a pracujem ako webdeveloper už 8 rokov.  Ponúkam tvorbu web stránok, e-shopov a webových aplikácií na mieru. Webové projekty programujem v PHP s frameworkami WordPress a Laravel. Žijem v Bratislave. Voľný čas trávim v prírode s rodinou a psom.') }}</p>
                <a href="{{ url('#kontakt') }}" class="btn" data-aos="fade-up" data-aos-delay="500">{{ __('Pozvať na kávu') }}</a>
            </div>
        </div>
        <footer class="about-footer">
            <picture class="about-photo" data-aos="fade-up-right">
                <source srcset="{{ asset('/images/me.jpg') }}" media="(max-width: 1200px)">
                <source srcset="{{ asset('/images/me@2x.jpg') }}" media="(min-width: 1200px)">
                <img src="{{ asset('/images/me.jpg') }}"
                     srcset="{{ asset('/images/me.jpg') }} 1200w,
                    {{ asset('/images/me@2x.jpg') }} 2000w"
                     sizes="100vw"
                     alt="{{ __('fotka tváre Marek Zofota') }}"
                     width="146" height="146"
                     loading="lazy">
            </picture>
            <picture class="about-image" data-aos="fade-up-left">
                <source srcset="{{ asset('/images/coffe.jpg') }}" media="(max-width: 1200px)">
                <source srcset="{{ asset('/images/coffe@2x.jpg') }}" media="(min-width: 1200px)">
                <img src="{{ asset('/images/coffe.jpg') }}"
                     srcset="{{ asset('/images/coffe.jpg') }} 1200w,
                        {{ asset('/images/coffe@2x.jpg') }} 2000w"
                     sizes="100vw"
                     alt="{{ __('káva a zápisník s perom na stole') }}"
                     width="496" height="318"
                     loading="lazy">
            </picture>
        </footer>
    </div>
</section>
