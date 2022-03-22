<section class="hero bg-light">
    <div class="container">
        <div class="circle-1"></div>
        <div class="circle-3"></div>
        <div class="circle-4"></div>
        <div class="circle-5"></div>

        <header>
            <h2 class="hero-title">{{ __('Tvorba web stránok') }}</h2>
        </header>

        <div class="hero-content">
            <p class="hero-text">{{ __('Wordpress stránky, jednoduché e-shopy a výkonné Laravel webové aplikácie.') }}</p>
            <a href="{{ url('#kontakt') }}" class="btn btn-primary">{{ __('Chcem web stránku') }}</a>
        </div>

        <footer class="hero-footer">
            <picture class="hero-image">
                <source srcset="{{ asset('/images/hero.jpg') }}" media="(max-width: 1200px)">
                <source srcset="{{ asset('/images/hero@2x.jpg') }}" media="(min-width: 1200px)">
                <img src="{{ asset('/images/hero.jpg') }}"
                     srcset="{{ asset('/images/hero.jpg') }} 1200w,
                        {{ asset('/images/hero@2x.jpg') }} 2000w"
                     sizes="100vw"
                     alt="{{ __('písanie na počítači a loga programátorskych frameworkoch') }}">
            </picture>
        </footer>
    </div>
</section>
