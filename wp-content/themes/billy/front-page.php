<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>
<?php $pageId = get_the_ID() ?>

            <section class="hero">
                <video class="hero__img" src="<?php echo get_template_directory_uri()?>/img/hero.mp4" autoplay muted></video>
                <div class="container">
                    <form class="hero__form">
                        <input type="email" placeholder="Enter your email address">
                        <button class="btn" type="submit">Jump on my list</button>
                    </form>
                    <p class="hero__text">I don't spam or sell your information. I do send you cool shit from time to
                        time.</p>
                </div>
            </section>
            <section class="make-money" id="money">
                <h2 class="section-title center">Make Money With Me</h2>
                <div class="container">
                    <div class="make-money__btns">
                        <a href="#school" class="btn">New the M V M T</a>
                        <a href="#training" class="btn">speaking and training</a>
                        <a href="#podcasts" class="btn">podcasts</a>
                        <a href="#reviews" class="btn">product and reviews</a>
                    </div>
                </div>
            </section>
            <section class="about" id="about">
                <div class="container">
                    <a class="about__img">
                        <img src="<?php echo get_template_directory_uri()?>/img/about.jpg">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_b_161_2807)">
                                <rect width="60" height="60" rx="30" fill="white" fill-opacity="0.21" />
                                <rect x="0.5" y="0.5" width="59" height="59" rx="29.5"
                                    stroke="url(#paint0_linear_161_2807)" />
                            </g>
                            <path
                                d="M37.7436 28.2497C39.4188 29.2305 39.4188 31.7695 37.7436 32.7503L27.6289 38.6723C26.0008 39.6256 24 38.3849 24 36.422L24 24.578C24 22.6151 26.0008 21.3744 27.6289 22.3277L37.7436 28.2497Z"
                                stroke="white" stroke-width="1.5" />
                            <defs>
                                <filter id="filter0_b_161_2807" x="-10" y="-10" width="80" height="80"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                    <feComposite in2="SourceAlpha" operator="in"
                                        result="effect1_backgroundBlur_161_2807" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2807"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_161_2807" x1="3" y1="23.5" x2="59.9647" y2="22.4956"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.68" />
                                    <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <div class="about__right">
                        <p class="about__uptitle">about Billy Cox</p>
                        <h2 class="section-title">Story <span>about me</span></h2>
                        <div class="text">
                            <p>
                                Billy Cox, best selling author, Dallas based Keynote speaker, and sales trainer has a
                                proven track record of providing real world answers. Billy will inform, challenge and
                                inspire your audience just as he does for many of the most successful companies in the
                                world. Billy Cox has a message that is pure, refreshing and energizing.
                            </p>
                            <p>
                                His down to earth speaking style is very unique and helps him gain instant rapport with
                                any audience. Billy’s real life experiences in Sales, Teamwork, Leadership and Life
                                skills are priceless. “The Best Keynote Speaker and Trainer We’ve Ever Had” This is the
                                type of feedback Billy consistently receives.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="logos">
                <div class="container">
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo_1.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo_2.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo_3.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo_4.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo_5.svg">
                    </a>
                </div>
            </section>
            <section class="banner banner_1">
                <video src="<?php echo get_template_directory_uri()?>/img/banner_1.mp4" class="banner__video" autoplay muted></video>
                <div class="container">
                    <a href="#" class="btn">Request a Meeting With</a>
                </div>
            </section>
            <section class="study" id="school">
                <div class="container">
                    <div class="study__left">
                        <p class="study__uptitle">Study with me</p>
                        <h2 class="section-title white">M V M T School</h2>
                        <div class="text">
                            <p>
                                Billy Cox, best selling author, Dallas based Keynote speaker, and sales trainer has a
                                proven track record of providing real world answers. Billy will inform, challenge and
                                inspire your audience just as he does for many of the most successful companies in the
                                world. Billy Cox has a message that is pure, refreshing and energizing.
                            </p>
                            <p>
                                His down to earth speaking style is very unique and helps him gain instant rapport with
                                any audience. Billy’s real life experiences in Sales, Teamwork, Leadership and Life
                                skills are priceless.“The Best Keynote Speaker and Trainer We’ve Ever Had” This is the
                                type of feedback Billy consistently receives.
                            </p>
                        </div>
                        <ul class="study__list">
                            <li class="study__item">Mindset</li>
                            <li class="study__item">Social Media</li>
                            <li class="study__item">Confidence</li>
                            <li class="study__item">Networking</li>
                            <li class="study__item">Sales</li>
                            <li class="study__item">Marketing</li>
                            <li class="study__item">Closing</li>
                            <li class="study__item">Personal Branding</li>
                            <li class="study__item">Persuasion</li>
                            <li class="study__item">Building Relationships</li>
                            <li class="study__item">Influence</li>
                        </ul>
                        <a href="#" class="btn dark">Jump Now</a>
                    </div>
                    <a href="#" class="study__img">
                        <img src="<?php echo get_template_directory_uri()?>/img/study.jpg">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_b_161_2807)">
                                <rect width="60" height="60" rx="30" fill="white" fill-opacity="0.21" />
                                <rect x="0.5" y="0.5" width="59" height="59" rx="29.5"
                                    stroke="url(#paint0_linear_161_2807)" />
                            </g>
                            <path
                                d="M37.7436 28.2497C39.4188 29.2305 39.4188 31.7695 37.7436 32.7503L27.6289 38.6723C26.0008 39.6256 24 38.3849 24 36.422L24 24.578C24 22.6151 26.0008 21.3744 27.6289 22.3277L37.7436 28.2497Z"
                                stroke="white" stroke-width="1.5" />
                            <defs>
                                <filter id="filter0_b_161_2807" x="-10" y="-10" width="80" height="80"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                    <feComposite in2="SourceAlpha" operator="in"
                                        result="effect1_backgroundBlur_161_2807" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2807"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_161_2807" x1="3" y1="23.5" x2="59.9647" y2="22.4956"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.68" />
                                    <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                </div>
            </section>
            <section class="banner banner_2">
                <video src="<?php echo get_template_directory_uri()?>/img/banner_1.mp4" class="banner__video" autoplay muted></video>
                <div class="container">
                    <img src="<?php echo get_template_directory_uri()?>/img/banner_2.png">
                </div>
            </section>
            <section class="cards" id="training">
                <div class="container">
                    <p class="cards__uptitle">THE ART OF SALES</p>
                    <h2 class="section-title">speaking and training</h2>
                    <div class="cards__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/cards_1.jpg" class="cards__img">
                        <div class="cards__item-right">
                            <h3 class="cards__item-title">Book Billy</h3>
                            <p class="cards__item-text">
                                Quickly create and scale a world-class interactive training system based on your brand
                                and expertise.
                            </p>
                            <a href="#" class="btn">Book</a>
                        </div>
                    </div>
                    <div class="cards__item reverse">
                        <img src="<?php echo get_template_directory_uri()?>/img/cards_2.jpg" class="cards__img">
                        <div class="cards__item-right">
                            <h3 class="cards__item-title">consult with me</h3>
                            <p class="cards__item-text">
                                Become a Distributor or Rep of LightSpeed VT. Make residual commissions and network with
                                the best in the business.
                            </p>
                            <a href="#" class="btn">Sign Up Now</a>
                        </div>
                    </div>
                    <div class="cards__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/cards_3.jpg" class="cards__img">
                        <div class="cards__item-right">
                            <h3 class="cards__item-title">breakout</h3>
                            <p class="cards__item-text">
                                Get hired at one of my companies. Must have the desire to make at least $250K per year.
                                Must be willing to train, learn and develop into a bad-ass.
                            </p>
                            <a href="#" class="btn">Let’s get to Work</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner">
                <video src="<?php echo get_template_directory_uri()?>/img/banner_1.mp4" class="banner__video" autoplay muted></video>
            </section>
            <section class="about about_2">
                <div class="container">
                    <a class="about__img">
                        <img src="<?php echo get_template_directory_uri()?>/img/about.jpg">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_b_161_2807)">
                                <rect width="60" height="60" rx="30" fill="white" fill-opacity="0.21" />
                                <rect x="0.5" y="0.5" width="59" height="59" rx="29.5"
                                    stroke="url(#paint0_linear_161_2807)" />
                            </g>
                            <path
                                d="M37.7436 28.2497C39.4188 29.2305 39.4188 31.7695 37.7436 32.7503L27.6289 38.6723C26.0008 39.6256 24 38.3849 24 36.422L24 24.578C24 22.6151 26.0008 21.3744 27.6289 22.3277L37.7436 28.2497Z"
                                stroke="white" stroke-width="1.5" />
                            <defs>
                                <filter id="filter0_b_161_2807" x="-10" y="-10" width="80" height="80"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                    <feComposite in2="SourceAlpha" operator="in"
                                        result="effect1_backgroundBlur_161_2807" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2807"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_161_2807" x1="3" y1="23.5" x2="59.9647" y2="22.4956"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.68" />
                                    <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <div class="about__right">
                        <p class="about__uptitle">training system</p>
                        <h2 class="section-title">join the most <span>powerful network</span>
                            in existence</h2>
                        <div class="text">
                            <p>
                                Billy Cox, best selling author, Dallas based Keynote speaker, and sales trainer has a
                                proven track record of providing real world answers. Billy will inform, challenge and
                                inspire your audience just as he does for many of the most successful companies in the
                                world. Billy Cox has a message that is pure, refreshing and energizing.
                            </p>
                            <p>
                                His down to earth speaking style is very unique and helps him gain instant rapport.
                            </p>
                        </div>
                        <a href="#" class="btn">join</a>
                    </div>
                </div>
            </section>
            <section class="logos logos_2">
                <h2>A few of my friends, clients and partners:</h2>
                <div class="container">
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-2_1.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-2_2.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-2_3.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-2_4.svg">
                    </a>
                    <a href="#" class="logos__item">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-2_5.svg">
                    </a>
                </div>
            </section>
            <section class="article" id="reviews">
                <img src="<?php echo get_template_directory_uri()?>/img/article.jpg" class="article__img">
                <div class="container">
                    <h2>“One of the best business decisions I’ve ever made was doing business with Brad Lea. My only
                        regret is that I should have done it sooner.”</h2>
                    <p class="article__author">Grant Cardone | Cardone Capital</p>
                </div>
            </section>
            <section class="banner">
                <video src="<?php echo get_template_directory_uri()?>/img/banner_1.mp4" class="banner__video" autoplay muted></video>
            </section>
            <section class="about about-dif">
                <div class="container">
                    <p class="about__uptitle">training system</p>
                    <h2 class="section-title">Follow my <span>Facebook</span></h2>
                    <a class="about__img">
                        <img src="<?php echo get_template_directory_uri()?>/img/about.jpg">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_b_161_2807)">
                                <rect width="60" height="60" rx="30" fill="white" fill-opacity="0.21" />
                                <rect x="0.5" y="0.5" width="59" height="59" rx="29.5"
                                    stroke="url(#paint0_linear_161_2807)" />
                            </g>
                            <path
                                d="M37.7436 28.2497C39.4188 29.2305 39.4188 31.7695 37.7436 32.7503L27.6289 38.6723C26.0008 39.6256 24 38.3849 24 36.422L24 24.578C24 22.6151 26.0008 21.3744 27.6289 22.3277L37.7436 28.2497Z"
                                stroke="white" stroke-width="1.5" />
                            <defs>
                                <filter id="filter0_b_161_2807" x="-10" y="-10" width="80" height="80"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                    <feComposite in2="SourceAlpha" operator="in"
                                        result="effect1_backgroundBlur_161_2807" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2807"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_161_2807" x1="3" y1="23.5" x2="59.9647" y2="22.4956"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.68" />
                                    <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <div class="about__right">
                        <img src="<?php echo get_template_directory_uri()?>/img/banner_2.png">
                        <div class="text">
                            <p>
                                Billy Cox, best selling author, Dallas based Keynote speaker, and sales trainer has a
                                proven track record of providing real world answers. Billy will inform, challenge and
                                inspire your audience just as he does for
                            </p>
                            <p>
                                many of the most successful companies in the
                                world. Billy Cox has a message that is pure, refreshing and energizing.
                            </p>
                        </div>
                        <a href="#" class="btn">Join our 1.5k community</a>
                    </div>
                </div>
            </section>
            <section class="about about-dif">
                <div class="container">
                    <p class="about__uptitle">My podcasts</p>
                    <h2 class="section-title">Dropping Bombs <span>Podcast</span></h2>
                    <a class="about__img">
                        <img src="<?php echo get_template_directory_uri()?>/img/about.jpg">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_b_161_2807)">
                                <rect width="60" height="60" rx="30" fill="white" fill-opacity="0.21" />
                                <rect x="0.5" y="0.5" width="59" height="59" rx="29.5"
                                    stroke="url(#paint0_linear_161_2807)" />
                            </g>
                            <path
                                d="M37.7436 28.2497C39.4188 29.2305 39.4188 31.7695 37.7436 32.7503L27.6289 38.6723C26.0008 39.6256 24 38.3849 24 36.422L24 24.578C24 22.6151 26.0008 21.3744 27.6289 22.3277L37.7436 28.2497Z"
                                stroke="white" stroke-width="1.5" />
                            <defs>
                                <filter id="filter0_b_161_2807" x="-10" y="-10" width="80" height="80"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                    <feComposite in2="SourceAlpha" operator="in"
                                        result="effect1_backgroundBlur_161_2807" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2807"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_161_2807" x1="3" y1="23.5" x2="59.9647" y2="22.4956"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.68" />
                                    <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <div class="about__right">
                        <img src="<?php echo get_template_directory_uri()?>/img/banner_2.png">
                        <div class="text">
                            <p>
                                Billy Cox, best selling author, Dallas based Keynote speaker, and sales trainer has a
                                proven track record of providing real world answers. Billy will inform, challenge and
                                inspire your audience just as he does for
                            </p>
                            <p>
                                many of the most successful companies in the
                                world. Billy Cox has a message that is pure, refreshing and energizing.
                            </p>
                        </div>
                        <a href="#" class="btn">subscribe</a>
                    </div>
                </div>
            </section>
            <section class="banner">
                <video src="<?php echo get_template_directory_uri()?>/img/banner_1.mp4" class="banner__video" autoplay muted></video>
            </section>
            <section class="socials">
                <div class="container">
                    <ul class="socials__list">
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/img/soc_1.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/img/soc_2.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/img/soc_3.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/img/soc_4.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/img/soc_5.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri()?>/img/soc_6.svg" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="socials__right">
                        <p class="socials__uptitle">My social media</p>
                        <h2 class="section-title">Subscribe and follow me on <span>social media</span></h2>
                    </div>
                </div>
            </section>
            <section class="youtube">
                <div class="container">
                    <p class="youtube__uptitle">My YouTube</p>
                    <h2 class="section-title"><span>YouTube channel</span> Billy Cox</h2>
                    <div class="youtube__list">
                        <a class="youtube__item">
                            <img src="<?php echo get_template_directory_uri()?>/img/youtube_1.jpg" class="youtube__item-img">
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_b_161_2669)">
                                    <rect width="37" height="37" rx="18.5" fill="white" fill-opacity="0.21" />
                                    <rect x="0.5" y="0.5" width="36" height="36" rx="18"
                                        stroke="url(#paint0_linear_161_2669)" />
                                </g>
                                <path
                                    d="M23.2751 17.4205C24.3082 18.0253 24.3082 19.5909 23.2752 20.1957L17.0378 23.8475C16.0338 24.4353 14.7999 23.6702 14.7999 22.4599L14.7999 15.1563C14.7999 13.946 16.0338 13.1809 17.0378 13.7687L23.2751 17.4205Z"
                                    stroke="white" stroke-width="1.5" />
                                <defs>
                                    <filter id="filter0_b_161_2669" x="-10" y="-10" width="57" height="57"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                        <feComposite in2="SourceAlpha" operator="in"
                                            result="effect1_backgroundBlur_161_2669" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2669"
                                            result="shape" />
                                    </filter>
                                    <linearGradient id="paint0_linear_161_2669" x1="1.85" y1="14.4917" x2="36.9782"
                                        y2="13.8723" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" stop-opacity="0.68" />
                                        <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <a class="youtube__item">
                            <img src="<?php echo get_template_directory_uri()?>/img/youtube_2.jpg" class="youtube__item-img">
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_b_161_2669)">
                                    <rect width="37" height="37" rx="18.5" fill="white" fill-opacity="0.21" />
                                    <rect x="0.5" y="0.5" width="36" height="36" rx="18"
                                        stroke="url(#paint0_linear_161_2669)" />
                                </g>
                                <path
                                    d="M23.2751 17.4205C24.3082 18.0253 24.3082 19.5909 23.2752 20.1957L17.0378 23.8475C16.0338 24.4353 14.7999 23.6702 14.7999 22.4599L14.7999 15.1563C14.7999 13.946 16.0338 13.1809 17.0378 13.7687L23.2751 17.4205Z"
                                    stroke="white" stroke-width="1.5" />
                                <defs>
                                    <filter id="filter0_b_161_2669" x="-10" y="-10" width="57" height="57"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                        <feComposite in2="SourceAlpha" operator="in"
                                            result="effect1_backgroundBlur_161_2669" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2669"
                                            result="shape" />
                                    </filter>
                                    <linearGradient id="paint0_linear_161_2669" x1="1.85" y1="14.4917" x2="36.9782"
                                        y2="13.8723" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" stop-opacity="0.68" />
                                        <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <a class="youtube__item">
                            <img src="<?php echo get_template_directory_uri()?>/img/youtube_3.jpg" class="youtube__item-img">
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_b_161_2669)">
                                    <rect width="37" height="37" rx="18.5" fill="white" fill-opacity="0.21" />
                                    <rect x="0.5" y="0.5" width="36" height="36" rx="18"
                                        stroke="url(#paint0_linear_161_2669)" />
                                </g>
                                <path
                                    d="M23.2751 17.4205C24.3082 18.0253 24.3082 19.5909 23.2752 20.1957L17.0378 23.8475C16.0338 24.4353 14.7999 23.6702 14.7999 22.4599L14.7999 15.1563C14.7999 13.946 16.0338 13.1809 17.0378 13.7687L23.2751 17.4205Z"
                                    stroke="white" stroke-width="1.5" />
                                <defs>
                                    <filter id="filter0_b_161_2669" x="-10" y="-10" width="57" height="57"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                        <feComposite in2="SourceAlpha" operator="in"
                                            result="effect1_backgroundBlur_161_2669" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2669"
                                            result="shape" />
                                    </filter>
                                    <linearGradient id="paint0_linear_161_2669" x1="1.85" y1="14.4917" x2="36.9782"
                                        y2="13.8723" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" stop-opacity="0.68" />
                                        <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <a class="youtube__item">
                            <img src="<?php echo get_template_directory_uri()?>/img/youtube_1.jpg" class="youtube__item-img">
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_b_161_2669)">
                                    <rect width="37" height="37" rx="18.5" fill="white" fill-opacity="0.21" />
                                    <rect x="0.5" y="0.5" width="36" height="36" rx="18"
                                        stroke="url(#paint0_linear_161_2669)" />
                                </g>
                                <path
                                    d="M23.2751 17.4205C24.3082 18.0253 24.3082 19.5909 23.2752 20.1957L17.0378 23.8475C16.0338 24.4353 14.7999 23.6702 14.7999 22.4599L14.7999 15.1563C14.7999 13.946 16.0338 13.1809 17.0378 13.7687L23.2751 17.4205Z"
                                    stroke="white" stroke-width="1.5" />
                                <defs>
                                    <filter id="filter0_b_161_2669" x="-10" y="-10" width="57" height="57"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                        <feComposite in2="SourceAlpha" operator="in"
                                            result="effect1_backgroundBlur_161_2669" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2669"
                                            result="shape" />
                                    </filter>
                                    <linearGradient id="paint0_linear_161_2669" x1="1.85" y1="14.4917" x2="36.9782"
                                        y2="13.8723" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" stop-opacity="0.68" />
                                        <stop offset="1" stop-color="white" stop-opacity="0.39" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <section class="podcast" id="podcasts">
                <div class="container">
                    <div class="podcast__left">
                        <h2 class="section-title">be on my <span>podcast</span></h2>
                        <p class="podcast__text">I’m always looking for unique personalities and inspiring stories for
                            my
                            podcast, Dropping Bombs. If you or someone you know might be interested in Dropping Bombs
                            with
                            me on air, fill out this quick form. Someone from my team will reach out soon to discuss the
                            details.</p>
                    </div>
                    <form action="#" class="podcast__form">
                        <input type="text" class="podcast__form-input" placeholder="First Name">
                        <input type="text" class="podcast__form-input" placeholder="Last Name">
                        <input type="email" class="podcast__form-input" placeholder="Email">
                        <input type="url" class="podcast__form-input" placeholder="Website URL">
                        <input type="text" class="podcast__form-input" placeholder="Instagram Username">
                        <input type="tel" class="podcast__form-input tel-input">
                        <textarea name="" id="" cols=" 30" rows="10" placeholder="Your Story">

                        </textarea>
                        <input type="submit" value="Submit" class="btn">
                    </form>
                </div>
            </section>
            <section class="banner">
                <video src="<?php echo get_template_directory_uri()?>/img/banner_1.mp4" class="banner__video" autoplay muted></video>
            </section>
            <section class="book" id="book">
                <div class="container">
                    <div class="book__left">
                        <img src="<?php echo get_template_directory_uri()?>/img/book.png" class="book__img">
                        <div class="book__swiper swiper">
                            <div class="book__pagination">
                                <button class="book__pagination-btn book__pagination-prev"><svg width="11" height="17"
                                        viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 1L1.88191 8.59008C1.42396 9.01825 1.4684 9.75736 1.97435 10.1276L10 16"
                                            stroke="white" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </button>
                                <button class="book__pagination-btn book__pagination-next"><svg width="11" height="17"
                                        viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 16L9.11809 8.40992C9.57604 7.98175 9.5316 7.24264 9.02565 6.87242L1 1"
                                            stroke="white" stroke-width="2" stroke-linecap="round" />
                                    </svg>

                                </button>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h3>"Best book on Success I have ever read!"</h3>
                                    <p>Jeffrey Hedges</p>
                                </div>
                                <div class="swiper-slide">
                                    <h3>"Best book on Success I have ever read!"</h3>
                                    <p>Jeffrey Hedges</p>
                                </div>
                                <div class="swiper-slide">
                                    <h3>"Best book on Success I have ever read!"</h3>
                                    <p>Jeffrey Hedges</p>
                                </div>
                                <div class="swiper-slide">
                                    <h3>"Best book on Success I have ever read!"</h3>
                                    <p>Jeffrey Hedges</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book__right">
                        <p class="book__uptitle">
                            My book
                        </p>
                        <h2 class="section-title">Get <span>my Dream book</span>
                            and Best Year Ever for <span>free</span></h2>
                        <div class="text">
                            <p>I wrote this book to allow people to learn valuable lessons in life, business and sales
                                to help ensure they become massively successful. The stories from my life explain why I
                                think the way I do and how to avoid years of pain, roadblocks and frustration. </p>
                            <p>The funny thing is, you will learn these lessons one way or another regardless, but
                                reading my book will teach you quicker and at a fraction of the cost.</p>
                        </div>
                        <a href="#" class="btn">Order my book</a>
                    </div>
                </div>
            </section>
<?php get_footer(); ?>