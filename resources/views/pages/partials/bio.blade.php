<section id="bio" class="bio" data-aos="fade-right" data-aos-duration="400">
	<div class="container">
		<div class="bio-body">
			<header class="bio-header">
				<h2 class="bio-title sr-only">{{ __('Životopis') }}</h2>
				<h3 class="bio-subtitle" data-aos="fade-right" data-aos-duration="600">{{ __('S kým budete komunikovať') }}</h3>
			</header>

			<div class="bio-text" data-aos="fade-right" data-aos-duration="700">
				<p>Pracujem ako UX/UI web dizajnér a aplikácie programujem ako fullstack developer už vyše 8 rokov. Zaujímam sa o web technológie a moje záľuby sú moja dcéra, pes a moja práca. Voľný čas trávim v prírode pri fotografovaní a v zime na snowboarde.</p>
			</div>

			<footer class="bio-footer">
				<h4 class="bio-name" data-aos="fade-right">Marek Zofota</h4>
				<p class="bio-position" data-aos="fade-right" data-aos-delay="100">konateľ, webdeveloper</p>

				<ul class="bio-socials">
					<li data-aos="fade-up">
						<a href="https://www.linkedin.com/in/marek-zofota/" target="blank" title="LinkedIn" class="icon-linkedin">
							<span class="sr-only">LinkedIn</span>
						</a>
					</li>
					<li data-aos="fade-up" data-aos-delay="100">
						<a href="https://dribbble.com/MarekZofota" target="blank" title="Dribbble" class="icon-dribbble">
							<span class="sr-only">Dribbble</span>
						</a>
					</li>
					<li data-aos="fade-up" data-aos-delay="200">
						<a href="https://www.github.com/himak" target="blank" title="GitHub" class="icon-github">
							<span class="sr-only">GitHub</span>
						</a>
					</li>
					<li data-aos="fade-up" data-aos-delay="300">
						<a href="https://himak.github.io" target="blank" title="Website" class="icon-superuser">
							<span class="sr-only">Osobná web stránka</span>
						</a>
					</li>
				</ul>
			</footer>

			<picture class="bio-photo" data-aos="fade-left" data-aos-delay="300">
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
		</div>
	</div>
</section>
