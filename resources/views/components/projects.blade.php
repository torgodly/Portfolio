<div id="portfolio" class="portfolio-section section hide-in-preloading" tabindex="-1">
    <div class="container">
        <div class="section-content">

            <!-- portfolio items -->
            <ul class="portfolio__items has-works">

                <!-- portfolio text -->
                <li class="portfolio__text">
                    <div class="text-box-inline">
                        <span class="subtitle">my works</span>
                        <h2>
                            See My Works Which
                            <br>
                            Will Amaze You!
                        </h2>
                        <p>We develop the best quality website that serves for the long-term. Well-documented, clean, easy and elegant interface helps any non-technical clients.</p>

                        <!-- projects filter -->
                        <ul class="portfolio__filters">
                            <li class="portfolio__filters__item">
                                <button class="portfolio__filters__btn active"
                                        onclick="window._filterPortfolioItems(this)">All
                                </button>
                            </li>
                            <li class="portfolio__filters__item">
                                <button class="portfolio__filters__btn"
                                        onclick="window._filterPortfolioItems(this)">HTML
                                </button>
                            </li>
                            <li class="portfolio__filters__item">
                                <button class="portfolio__filters__btn"
                                        onclick="window._filterPortfolioItems(this)">Angular
                                </button>
                            </li>
                            <li class="portfolio__filters__item">
                                <button class="portfolio__filters__btn"
                                        onclick="window._filterPortfolioItems(this)">Vue
                                </button>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- start items list -->
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <x-project-list-item/>
                <!-- end items list -->

                <!-- load more button -->
                <li class="portfolio__loadMore">
                    <button class="portfolio__loadMore__btn" data-no-works-msg="No works to load"
                            onclick="window._loadMorePortfolioItems(this)">
                        Load more works
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>
