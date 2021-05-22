<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('images/welcome_images/logo.svg') }}">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome_styles/welcome_page_style.css') }}">
	  <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="{{ route('home') }}">
								<img class="header-logo-image" src="{{ asset('images/welcome_images/logo.svg') }}" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">{{ __('Online store') }}</h1>
	                        <p class="hero-paragraph">{{ __('Online store of mobile phones') }}</p>
	                        <div class="hero-cta"><a class="button button-primary" href="#">{{ __('Go to catalog') }}</a><a class="button" href="{{ route('login') }}">{{ __('Already registered?') }}</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="{{ asset('images/welcome_images/feature-icon-01.svg') }}" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">{{ __('New items') }}</h4>
                                    <p class="text-sm mb-0">{{ __('New products from manufacturer') }}</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="{{ asset('images/welcome_images/feature-icon-02.svg') }}" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">{{ __('Best prices') }}</h4>
                                    <p class="text-sm mb-0">{{ __('Buy our products for the best price') }}</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="{{ asset('images/welcome_images/feature-icon-03.svg') }}" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">{{ __('Additional services') }}</h4>
                                    <p class="text-sm mb-0">{{ __('Bonuses to purchase') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">{{ __('It is easy with us') }}</h2>
                        </div>
						<div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price"><span class="pricing-table-price-currency h2">{{ __('Check the list below') }}</div>
                                        </div>
										<div class="pricing-table-features-title text-xs pt-24 pb-24">{{ __('Purchase at 3 steps:') }}</div>
                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>{{ __('1. Select the product') }}</span>
                                            </li>
                                            <li>
                                                <span>{{ __('2. Create order') }}</span>
                                            </li>
                                            <li>
                                                <span>{{ __('3. Pay') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">{{ __('Go to catalog') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0">{{ __('Are you not registered?') }}</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="{{ route('register') }}">{{ __('Do it now!') }}</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
						<a href="#">
							<img class="header-logo-image" src="{{ asset('images/welcome_images/logo.svg') }}" alt="Logo">
						</a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">{{ __('Contacts') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('About') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('Support') }}</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">{{ __('Google') }}</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; {{ __('2021 Online-store, all rights reserved') }}</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/welcome_js/main.min.js') }}" defer></script>
</body>
</html>
