<div id="testimonials" class="testimonials-section section hide-in-preloading" tabindex="-1">

    <!-- testimonials title -->
    <div class="container">
        <div class="section-title">
            <span class="subtitle">testimonials</span>
            <h2 class="title">
                Check What's My Clients
                <br>
                Say About Me
            </h2>
        </div>
    </div>

    <!-- testimonials items -->
    <div class="section-content">
        <ul class="testimonials__items" data-stagger-delay="500">
            @foreach($testimonials as $testimonial)
                <x-testimonials-list-item :testimonial="$testimonial"/>
            @endforeach
        </ul>
    </div>
</div>
