<section class="projects">

    <div class="container">
        <div class="bg-light rounded">
            <header>
                <h2 class="projects-title sr-only">{{ __('Projekty') }}</h2>
                <p class="projects-subtitle">{{ __('Vyberám z projektov') }}</p>
                <p class="projects-text">{{ __('Kreslenie web dizajnu, návrh databázy, programovanie aplikácie, testovanie a inštalácia na server a zákaznícka podpora.') }}</p>
            </header>

            <div class="projects-body">
                <div class="box">
                    <div class="item">
                        <div class="projects-item mobilroka">
                            <picture class="projects-image">
                                <source srcset="{{ asset('/images/projects/mobilroka.sk.jpg') }}" media="(max-width: 1200px)">
                                <source srcset="{{ asset('/images/projects/mobilroka.sk@2x.jpg') }}" media="(min-width: 1200px)">
                                <img src="{{ asset('/images/projects/mobilroka.sk.jpg') }}"
                                     srcset="{{ asset('/images/projects/mobilroka.sk.jpg') }} 1200w,{{ asset('/images/projects/mobilroka.sk@2x.jpg') }} 2000w"
                                     sizes="100vw"
                                     alt="{{ __('písanie na počítači a loga programátorskych frameworkoch') }}">
                            </picture>
                            <div class="projects-item-body">
                                <h3 class="projects-item-title">{{ __('Mobil roka powered by O2') }}</h3>
                                <p class="projects-item-text">{{ __('Anketa hľadajúcej najlepšie mobilné zariadenia minulého roka.') }}</p>

                                <p><a href="#" class="projects-item-link">{{ __('viac') }}</a></p>

                                <a href="https://www.mobilroka.sk" class="btn">www.mobilroka.sk</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="projects-item apartmanynevadza">
                            <picture class="projects-image">
                                <source srcset="{{ asset('/images/projects/apartmanynevadza.sk.jpg') }}" media="(max-width: 1200px)">
                                <source srcset="{{ asset('/images/projects/apartmanynevadza.sk@2x.jpg') }}" media="(min-width: 1200px)">
                                <img src="{{ asset('/images/projects/apartmanynevadza.sk.jpg') }}"
                                     srcset="{{ asset('/images/projects/apartmanynevadza.sk.jpg') }} 1200w,{{ asset('/images/projects/apartmanynevadza.sk@2x.jpg') }} 2000w"
                                     sizes="100vw"
                                     alt="{{ __('písanie na počítači a loga programátorskych frameworkoch') }}">
                            </picture>
                            <div class="projects-item-body">
                                <h3 class="projects-item-title">{{ __('Apartmány Nevädza') }}</h3>
                                <p class="projects-item-text">{{ __('Miesto na Liptove, odkial je všade blízko.') }}</p>

                                <p><a href="#" class="projects-item-link">{{ __('viac') }}</a></p>

                                <a href="https://www.apartmanynevadza.sk" class="btn">www.apartmanynevadza.sk</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="projects-item onlinefaktury">
                            <picture class="projects-image">
                                <source srcset="{{ asset('/images/projects/onlinefaktury.sk.jpg') }}" media="(max-width: 1200px)">
                                <source srcset="{{ asset('/images/projects/onlinefaktury.sk@2x.jpg') }}" media="(min-width: 1200px)">
                                <img src="{{ asset('/images/projects/onlinefaktury.sk.jpg') }}"
                                     srcset="{{ asset('/images/projects/onlinefaktury.sk.jpg') }} 1200w,{{ asset('/images/projects/onlinefaktury.sk@2x.jpg') }} 2000w"
                                     sizes="100vw"
                                     alt="{{ __('písanie na počítači a loga programátorskych frameworkoch') }}">
                            </picture>
                            <div class="projects-item-body">
                                <h3 class="projects-item-title">{{ __('OnlineFaktury.sk') }}</h3>
                                <p class="projects-item-text">{{ __('Jednoduchý a prehľadný online nástroj na tvorbu faktúr.') }}</p>

                                <p><a href="#" class="projects-item-link">{{ __('viac') }}</a></p>

                                <a href="https://www.onlinefaktury.sk" class="btn">www.onlinefaktury.sk</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="projects-item webstore">
                            <picture class="projects-image">
                                <source srcset="{{ asset('/images/projects/webstore.sk.jpg') }}" media="(max-width: 1200px)">
                                <source srcset="{{ asset('/images/projects/webstore.sk@2x.jpg') }}" media="(min-width: 1200px)">
                                <img src="{{ asset('/images/projects/webstore.sk.jpg') }}"
                                     srcset="{{ asset('/images/projects/webstore.sk.jpg') }} 1200w,{{ asset('/images/projects/webstore.sk@2x.jpg') }} 2000w"
                                     sizes="100vw"
                                     alt="{{ __('písanie na počítači a loga programátorskych frameworkoch') }}">
                            </picture>
                            <div class="projects-item-body">
                                <h3 class="projects-item-title">{{ __('WEBSTORE') }}</h3>
                                <p class="projects-item-text">{{ __('Web aplikácia na overenia a zaregistrovanie domény a objednávka web hostingových balíčkov.') }}</p>

                                <p><a href="#" class="projects-item-link">{{ __('viac') }}</a></p>

                                <a href="https://www.webstore.sk" class="btn">www.webstore.sk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <a href="#" class="projects-footer-link">{{ __('Zobraziť ďalšie projekty') }}</a>
            </footer>
        </div>
    </div>




</section>
