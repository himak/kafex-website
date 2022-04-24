<div class="hero bg-light">
    <div class="container">
        <div class="circle-1" data-aos="zoom-in" data-aos-duration="1000"></div>
        <div class="circle-3" data-aos="zoom-in" data-aos-duration="1000"></div>
        <div class="circle-4" data-aos="zoom-in" data-aos-duration="1000"></div>
        <div class="circle-5" data-aos="zoom-in" data-aos-duration="1000"></div>

        <header>
            <h2 class="hero-title">
       {{--          <span>{{ __('Tvorba') }}</span>
                <span>{{ __('web') }}</span>
                <span>{{ __('stránok') }}</span> --}}
                {{ __('Tvorba web stránok') }}
            </h2>
        </header>

        <div class="hero-content">
            <p class="hero-text">{{ __('Wordpress stránky, jednoduché e-shopy a výkonné Laravel webové aplikácie.') }}</p>
            <a href="{{ url('#kontakt') }}" class="btn" data-aos="fade-up" data-aos-delay="300">{{ __('Chcem web stránku') }}</a>
        </div>

        <footer class="hero-footer">
            <picture class="hero-image" loading="lazy">
                <source srcset="{{ asset('/images/hero.jpg') }}" media="(max-width: 1200px)" loading="lazy">
                <source srcset="{{ asset('/images/hero@2x.jpg') }}" media="(min-width: 1200px)" loading="lazy">
                <img src="{{ asset('/images/hero.jpg') }}"
                     srcset="{{ asset('/images/hero.jpg') }} 1200w,
                        {{ asset('/images/hero@2x.jpg') }} 2000w"
                     sizes="100vw"
                     alt="{{ __('písanie na počítači a loga programátorskych frameworkoch') }}"
                     width="1160" height="493" 
                     loading="lazy">
            </picture>
        </footer>
    </div>
</div>
