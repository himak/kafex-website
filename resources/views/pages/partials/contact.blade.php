<section class="contact bg-light" id="kontakt">
	<div class="container">
		<div class="circle-1" data-aos="zoom-in" data-aos-duration="1000"></div>
		<div class="circle-2" data-aos="zoom-in" data-aos-duration="1000"></div>
		<div class="circle-5" data-aos="zoom-in" data-aos-duration="1000"></div>
		<header class="contact-header">
	        <h2 class="contact-title sr-only">{{ __('Kontakt') }}</h2>
	        <p class="contact-subtitle" data-aos="fade-up" data-aos-delay="100">{{ __('Kontaktujte ma') }}</p>
	        <p class="contact-text" data-aos="fade-up" data-aos-delay="300">{{ __('Potrebujete vypracovať nazáväznú cenovú ponuku, rýchlu konzultáciu, napíšte mi.') }}</p>
	    </header>

	    <div class="contact-content">
	    	<a href="tel:00421950400468" data-aos="fade-up" data-aos-delay="100">
	    		<img src="images/icons/mobile.svg" alt="phone" style="max-height: 40px;" height="40" loading="lazy">
		    	+421 (0) 950 400 468
		    </a>

		    <a href="mailto:kafex&commat;kafex.sk?subject=Chcem web stranku&body=Dobry den, chcem web stranku." data-aos="fade-up" data-aos-delay="300">
	    		<img src="images/icons/paper-plane.svg" alt="email" style="max-height: 40px;" height="40" loading="lazy">
		    	kafex&commat;kafex.sk
		    </a>

		    <a href="https://g.page/kafex" data-aos="fade-up" data-aos-delay="100">
	    		<img src="images/icons/map-pin.svg" alt="address" style="max-height: 40px;" height="40" loading="lazy">
		    	<address>
		    		Pri Hrubej lúke 5, Bratislava<br>Slovakia
		    	</address>
		    </a>

		    <a href="mailto:kafex&commat;kafex.sk?subject=Chcem web stranku&body=Dobry den, chcem web stranku." class="btn" data-aos="fade-up" data-aos-delay="100">{{ __('Napíšte mi') }} :)</a>

	    	<picture 
	    		class="contact-image"
	    		loading="lazy"
	    		data-aos="fade-up"
	    		data-aos-delay="400">
				<source srcset="{{ asset('/images/bratislava-castle.jpg') }}" media="(max-width: 1200px)" loading="lazy">
				<source srcset="{{ asset('/images/bratislava-castle@2x.jpg') }}" media="(min-width: 1200px)" loading="lazy">
				<img src="{{ asset('/images/bratislava-castle.jpg') }}"
					srcset="{{ asset('/images/bratislava-castle.jpg') }} 1200w,
					{{ asset('/images/bratislava-castle@2x.jpg') }} 2000w"
					sizes="100vw"
					alt="{{ __('pohlad na bratislavsky hrad') }}"
					width="1160" height="493" 
					loading="lazy">
            </picture>
	    </div>
	</div>
</section>