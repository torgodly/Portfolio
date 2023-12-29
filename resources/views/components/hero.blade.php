@props(['about'])
<div id="hero" class="hero-section hide-in-preloading" data-pan-effect>


    <!-- hero image -->
    <div class="hero__imgWrapper">
        <div class="hero__imgLayer">
            <img class="hero__imgLayer__img" src="{{$about->hero_image}}" alt="User Name" loading="lazy">
        </div>
        <div class="hero__imgLayer">
            <img class="hero__imgLayer__img" src="{{$about->hero_image}}" alt="User Name" loading="lazy">
        </div>
    </div>

    <!-- hero text -->
    <div class="hero__text">


        <h2 class="hero__text__title">
            {{__($about->slogan)}}
        </h2>



        <a href="#contact" class="hero__text__btn w-btn w-btn--s2 w-btn--outline-light">{{__('Get In Touch')}}</a>
    </div>

    <!-- social icons -->
    <div class="hero__social">
        <ul class="hero__social__list">
            <li class="hero__social__item">
                <a href="https://www.facebook.com/torgodly" target="_blank" rel="noreferrer" data-tooltip='{ "text": "Facebook", "dir": "right" }'>
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
            <li class="hero__social__item">
                <a href="https://www.x.com/torgodly" target="_blank" rel="noreferrer" data-tooltip='{ "text": "Twitter", "dir": "right" }'>
                    <i class="fa-brands fa-x"></i>
                </a>
            </li>
            <li class="hero__social__item">
                <a href="#" target="_blank" rel="noreferrer" data-tooltip='{ "text": "LinkedIn", "dir": "right" }'>
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- scroll down button -->
    <div class="hero__scrollDown">
        <a href="#about" title="Scroll Down">Scroll</a>
    </div>
</div>
