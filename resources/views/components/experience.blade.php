<div id="experience" class="experience-section section hide-in-preloading" tabindex="-1">
    <div class="container">
        <div class="section-content">

            <!-- experience timeline -->
            <div class="experience__timeline">
                <div class="experience__timePath"></div>

                <!-- experience items -->
                <ul class="experience__timeline__items">
                    @foreach($experiences as $experience)
                        <x-experience-list-item :experience="$experience"/>
                    @endforeach
                    <li class="experience__timeline__item has-ultimate-tooltip" tabindex="0"></li>
                    <li class="experience__timeline__item has-ultimate-tooltip" tabindex="0"></li>
                </ul>
            </div>

            <!-- experience text -->
            <div class="experience__text">
                <div class="text-box-inline">
                    <span class="subtitle">experience</span>
                    <h2>
                        My Coding Odyssey
                    </h2>
                    <p>Embark on a journey through my professional evolution, exploring the roles I've undertaken and the impactful projects I've championed. From mastering Laravel to pushing the boundaries of development, each chapter represents a step forward in my evolution as a developer, with experiences that shape the coder I am today</p>
                </div>
            </div>
        </div>
    </div>
</div>
