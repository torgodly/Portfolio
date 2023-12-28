<li class="portfolio__item" data-filter="html">
    <a class="portfolio__link" href="{{route('projects.show', $project)}}">

        <!-- item image -->
        <div class="portfolio__imgWrapper">
            <img class="portfolio__imgWrapper__img" src="{{$project->media->first()->getUrl()}}"
                 alt="Lorem Ipsum Dolor 1" loading="lazy">
        </div>

        <!-- item details -->
        <div class="portfolio__details">
            <h3 class="portfolio__details__title">{{$project->title}}</h3>
            <div class="portfolio__details__date">{{\Carbon\Carbon::parse($project->date)->format('F Y')}}</div>
        </div>
    </a>
</li>
