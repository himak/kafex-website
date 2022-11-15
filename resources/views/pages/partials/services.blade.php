<section class="services" id="sluzby">
    <div class="container">

        <div class="circle-2" data-aos="zoom-in" data-aos-duration="1000"></div>
        <div class="circle-4" data-aos="zoom-in" data-aos-duration="1000"></div>
        <div class="circle-5" data-aos="zoom-in" data-aos-duration="1000"></div>

        <header>
            <h2 class="services-title sr-only">{{ __('Služby') }}</h2>
        </header>

        <p class="services-subtitle" data-aos="fade-up" data-aos-delay="100">{{ __('Čo môžem pre Vás urobiť') }}</p>

        <div class="box">
            <div class="item">
                <a href="{{ url('/#kontakt') }}" class="service-content bg-light rounded" data-aos="fade-left" data-aos-delay="100">
                    <img class="services-icon" src="{{ asset('/images/icons/cursor-click.svg') }}" alt="{{ __('Klik kurzorom') }}"
                        width="100" height="100"
                        loading="lazy">
                    <h3 class="services-name">{{ __('Registrácia domény') }}</h3>
                    <div class="services-text">
                        <p>{!! __('Doména je názov web stránky (<i>www.firma.sk</i>) so správnou koncovkou (.sk, .com, .travel) a tvorí aj základ vlastnej e-mailovej adresy (meno@kafex.sk).') !!}</p>
                        <p><small>{{ __('Viac info') }}</small></p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="{{ url('/#kontakt') }}" class="service-content bg-light rounded" data-aos="fade-left" data-aos-delay="300">
                        <img class="services-icon" src="{{ asset('/images/icons/database.svg') }}" alt="{{ __('Klik kurzorom') }}" width="100" height="100"
                        loading="lazy">
                    <h3 class="services-name">{{ __('Web hosting') }}</h3>
                    <div class="services-text">
                        <p>{{ __('Dátové súbory webovej stránky alebo e-mailovej schránky je potrebné uložiť na server. Vyberiem a nastavím správny web hosting k doméne.') }}</p>
                        <p><small>{{ __('Viac info') }}</small></p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="{{ url('/#kontakt') }}" class="service-content bg-blue rounded" data-aos="fade-left" data-aos-delay="500">
                    <img class="services-icon" src="{{ asset('/images/icons/code.svg') }}" alt="{{ __('Klik kurzorom') }}"
                    width="100" height="100"
                    loading="lazy">
                    <h3 class="services-name">{{ __('Vývoj softvéru') }}</h3>
                    <div class="services-text">
                        <p>{{ __('Naprogramujem responzívnu web stránku, výkonný e-shop alebo aplikáciu aj s redakčným systémov. Všetko na najpopulárnejších technológiach.') }}</p>
                        <p><small>{{ __('Viac info') }}</small></p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="{{ url('/#kontakt') }}" class="service-content bg-light rounded" data-aos="fade-left" data-aos-delay="700">
                    <img class="services-icon" src="{{ asset('/images/icons/growing-chart.svg') }}" alt="{{ __('Klik kurzorom') }}" width="100" height="100" loading="lazy">
                    <h3 class="services-name">{{ __('SEO optimalizácia') }}</h3>
                    <div class="services-text">
                        <p>{{ __('Poradím so správnym nastavením (rýchlosť, veľkosť) web stránky a optimalizujem, zaregistrujem pre vyhľadávače.') }}</p>
                        <p><small>{{ __('Viac info') }}</small></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
