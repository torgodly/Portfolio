<li class="has-ultimate-tooltip" tabindex="0">
    <div class="testimonials__item">
        <div class="testimonials__item__avatar">
            <img class="testimonials__item__img" src="{{$testimonial->avatar}}"
                 alt="Terrell Grimes" loading="lazy">
        </div>
        <div class="ultimate-tooltip">
            <p>
                {{$testimonial->description}}
            </p>
            <h4 class="ultimate-tooltip-title">{{$testimonial->name}}</h4>
            <h5 class="ultimate-tooltip-subtitle">{{$testimonial->job_title}}</h5>
        </div>
        <div class="ultimate-tooltip-arrow"></div>
    </div>
</li>
