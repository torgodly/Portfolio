<div id="about" class="about-section section hide-in-preloading" tabindex="-1">
    <div class="container">
        <div class="section-content">

            <!-- about image -->
            <div class="about__imgWrapper">
                <div class="about__imgLayer">
                    <img class="about__imgLayer__img" src="{{$about->about_image}}" alt="User Name"
                         loading="lazy">
                </div>
                <div class="about__imgLayer">
                    <img class="about__imgLayer__img" src="{{$about->about_image}}" alt="User Name"
                         loading="lazy">
                </div>
            </div>

            <!-- about text -->
            <div class="about__text">
                <div class="text-box-inline">
                    <span class="subtitle">about me</span>
                    <h2>

                        {{$about->title}}

                    </h2>
                    <p>
                        {{$about->description}}
                    </p>
                    <div class="btns-container">
                        <a href="#contact" class="w-btn w-btn--s1 w-btn--primary">Hire Me</a>
                        <a download href="#" class="w-btn w-btn--s1 w-btn--outline-dark">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
