<div id="stats" class="stats-section section hide-in-preloading">
    <div class="section-content">
        <div class="container">
            <ul class="stats__items">
                <li class="stats__item">
                    <a class="stats__link" href="#experience">

                        <!-- statistics icon -->
                        <div class="stats__iconWrapper">
                            <svg class="stats__iconWrapper__icon" width="40" height="40">
                                <use href="#emblem"/>
                            </svg>
                        </div>

                        <!-- statistics text -->
                        <div class="stats__text">
                            <h3 class="stats__text__num">{{$experiences->count()}}+</h3>
                            <strong class="stats__text__title">Years of Experience</strong>
                        </div>

                        <i class="stats__arrow fa-solid fa-angle-right"></i>
                    </a>
                </li>
                <li class="stats__item">
                    <a class="stats__link" href="#portfolio">

                        <!-- statistics icon -->
                        <div class="stats__iconWrapper">
                            <svg class="stats__iconWrapper__icon" width="40" height="40">
                                <use href="#check-mark"/>
                            </svg>
                        </div>

                        <!-- statistics text -->
                        <div class="stats__text">
                            <h3 class="stats__text__num">{{$projects->count()}}+</h3>
                            <strong class="stats__text__title">Completed Projects</strong>
                        </div>

                        <i class="stats__arrow fa-solid fa-angle-right"></i>
                    </a>
                </li>
                <li class="stats__item">
                    <a class="stats__link" href="#testimonials">

                        <!-- statistics icon -->
                        <div class="stats__iconWrapper">
                            <svg class="stats__iconWrapper__icon" width="40" height="40">
                                <use href="#rating"/>
                            </svg>
                        </div>

                        <!-- statistics text -->
                        <div class="stats__text">
                            <h3 class="stats__text__num">{{$testimonials->count()}}+</h3>
                            <strong class="stats__text__title">Happy Clients</strong>
                        </div>

                        <i class="stats__arrow fa-solid fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
