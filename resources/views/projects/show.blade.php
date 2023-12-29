<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Abdo develops the best quality website that serves for the long-term. Well-documented, clean, easy and elegant interface helps any non-technical clients.">
    <meta name="keywords"
          content="portfolio, agency, business, clean, company, corporate, creative, gallery, rtl, modern, photography, responsive, sass">

    <!-- title of the browser tab -->
    <title>Abdo - HTML Portfolio Template</title>

    <!-- favicon -->
    <link rel="icon" href="{{asset('assets/favicon.ico')}}" media="(prefers-color-scheme: light)">
    <link rel="icon" href="{{asset('assets/favicon-dark-mode.ico')}}" media="(prefers-color-scheme: dark)">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&family=Saira+Stencil+One&text=Abdo&display=swap">

    <!-- css libraries file -->
    <link rel="stylesheet" href="{{asset('css/libraries.min.css')}}">

    <!-- main style file -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
<div id="app-inner">

    <!-- start circle cursor -->
    <x-circle-cursor/>

    <!-- end circle cursor -->

    <!-- start preloader -->
    <x-preloader/>
    <!-- end preloader -->

    <!-- start of header -->
    <x-header/>
    <!-- end of header -->

    <!-- start of portfolio single page -->
    <div class="portfolio-page portfolio-section section page hide-in-preloading">
        <div class="container">
            <div class="section-content">

                <!-- portfolio items -->
                <ul class="portfolio__items has-works">

                    <!-- project details -->
                    <li class="portfolio__text">
                        <div class="text-box-block">

                            <!-- project category link -->
                            <span class="subtitle">
                  <a href="">{{$project->tool->name}}</a>
                </span>

                            <!-- project title -->
                            <h2>{{$project->title}}</h2>

                            <!-- project description -->
                            <p>{{$project->description}}</p>
                            <!-- project tools -->
                            <ul class="portfolio__tools">
                                @foreach($project->skills as $skill)
                                    <x-project-tool-item :tool="$skill->name"/>
                                @endforeach
                            </ul>

                            <!-- project live preview link -->
                            <a href="{{$project->link}}" target="_blank"
                               class="portfolio__livePreview w-btn w-btn--s2 w-btn--dark">Live Preview</a>
                            @if(isset($project->github))
                                <a href="{{$project->github}}" target="_blank"
                                   class="portfolio__livePreview w-btn w-btn--s2 w-btn--dark">Github</a>
                            @endif

                        </div>
                    </li>

                    <!-- project screenshots -->
                    @foreach($project->media as $image)
                        <li class="portfolio__item">
                            <!-- href points to the fully sized image -->
                            <a class="portfolio__link glightbox"
                               href="{{$image->getUrl()}}" data-gallery="gallery1"
                            >

                                <!-- item image thumbnails -->
                                <div class="portfolio__imgWrapper">
                                    <img class="portfolio__imgWrapper__img"
                                         src="{{$image->getUrl()}}" alt="caption 1"
                                         loading="lazy">
                                </div>

                                <!-- item details -->
                                <div class="portfolio__details">
                                    <h3 class="portfolio__details__title">{{$project->title}}</h3>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- end of portfolio single page -->

    <!-- start of footer -->
    <x-footer/>
    <!-- end of footer -->

    <!-- scroll to top button -->
    <button class="scroll-to-top" title="Back To Top" data-show-at="50" onclick="window._scrollToTop(this)">
        <svg width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </button>

    <!-- toast notifications -->
    <ul class="notifications hide-in-preloading"></ul>

    <!-- ajax loader -->
    <div class="ajaxLoader hide-in-preloading">
        <span class="ajaxLoader__blades"></span>
    </div>

    <!-- svg icons -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <!-- statistics items icons -->
        <symbol id="emblem" viewBox="0 0 40 40">
            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                  d="m30.073 25.224-.062.01a5.29 5.29 0 0 0-3.758 2.73l-.064.119a2.65 2.65 0 0 1-3.612 1.08 5.158 5.158 0 0 0-4.845-.057l-.153.08a2.849 2.849 0 0 1-3.824-1.195 5.374 5.374 0 0 0-3.815-2.764c-1.553-.272-2.617-1.73-2.398-3.275a5.41 5.41 0 0 0-1.47-4.522 2.907 2.907 0 0 1 0-4.044 5.411 5.411 0 0 0 1.47-4.521c-.22-1.554.833-3 2.378-3.272a5.416 5.416 0 0 0 3.85-2.795 2.91 2.91 0 0 1 3.848-1.25 5.42 5.42 0 0 0 4.757 0 2.91 2.91 0 0 1 3.849 1.25 5.417 5.417 0 0 0 3.849 2.795 2.908 2.908 0 0 1 2.378 3.272 5.411 5.411 0 0 0 1.47 4.521 2.907 2.907 0 0 1 0 4.044 5.411 5.411 0 0 0-1.47 4.522c.22 1.553-.832 3-2.378 3.271ZM12.663 2.21A4.165 4.165 0 0 1 18.167.423a4.166 4.166 0 0 0 3.657 0 4.165 4.165 0 0 1 5.506 1.788 4.163 4.163 0 0 0 2.958 2.148 4.16 4.16 0 0 1 3.403 4.681 4.159 4.159 0 0 0 1.13 3.476 4.159 4.159 0 0 1 0 5.785 4.158 4.158 0 0 0-1.13 3.476 4.161 4.161 0 0 1-2.62 4.464l.554.908.619 1.004a.626.626 0 1 1-1.068.656l-.56-.91h-.001l-.058-.095-.667-1.084a3.804 3.804 0 0 0-1.264.684l-.12.1a4.324 4.324 0 0 0-.726.757l-.35.471c-.041.054-.078.112-.11.172a3.816 3.816 0 0 1-4.276 1.924l4.723 7.769c.116.19.387.202.52.024l1.602-2.158a2.82 2.82 0 0 1 1.954-1.121l2.622-.29a.313.313 0 0 0 .233-.475l-1.387-2.27h.002l-.728-1.19a.626.626 0 1 1 1.07-.653l1.723 2.818c.01.016.02.033.028.05l.362.592a1.566 1.566 0 0 1-1.165 2.373l-2.622.29a1.567 1.567 0 0 0-1.085.623l-1.603 2.157c-.663.893-2.02.83-2.597-.12l-5.058-8.319-.63-1.038a3.906 3.906 0 0 0-1.94.031l-.612 1.007-5.057 8.32a1.567 1.567 0 0 1-2.597.12L9.2 37.21a1.567 1.567 0 0 0-1.086-.623l-2.621-.29a1.566 1.566 0 0 1-1.165-2.373l4.68-7.655c-1.815-.663-2.986-2.52-2.707-4.492a4.159 4.159 0 0 0-1.13-3.476 4.159 4.159 0 0 1 0-5.785 4.159 4.159 0 0 0 1.13-3.476 4.16 4.16 0 0 1 3.403-4.68 4.163 4.163 0 0 0 2.958-2.149Zm7.649 7.676 1.08 2.046a2.82 2.82 0 0 0 2.013 1.462l2.281.395a.313.313 0 0 1 .171.526l-1.613 1.66c-.61.626-.893 1.5-.769 2.365l.33 2.29a.313.313 0 0 1-.449.325l-2.077-1.02a2.822 2.822 0 0 0-2.489 0l-2.077 1.02a.313.313 0 0 1-.449-.326l.33-2.29a2.817 2.817 0 0 0-.77-2.365l-1.612-1.659a.313.313 0 0 1 .17-.527l2.282-.394a2.82 2.82 0 0 0 2.013-1.462l1.08-2.046a.313.313 0 0 1 .555 0Zm-1.663-.584c.588-1.114 2.183-1.114 2.771 0l1.08 2.046c.227.43.64.73 1.119.812l2.28.394c1.242.215 1.735 1.732.857 2.634l-1.613 1.66a1.565 1.565 0 0 0-.427 1.313l.33 2.29c.178 1.246-1.113 2.183-2.243 1.628l-2.077-1.02a1.568 1.568 0 0 0-1.383 0l-2.077 1.02c-1.13.555-2.421-.382-2.242-1.628l.33-2.29c.068-.48-.09-.966-.428-1.314l-1.613-1.659c-.878-.902-.385-2.42.856-2.634l2.281-.394a1.566 1.566 0 0 0 1.119-.812l1.08-2.046Zm5.2-3.371A10.19 10.19 0 0 0 10.85 10.97a10.171 10.171 0 0 0-.523 7.475.626.626 0 1 1-1.194.379c-.88-2.771-.67-5.773.587-8.395a11.444 11.444 0 0 1 20.697.144 11.423 11.423 0 0 1-4.943 14.85 11.444 11.444 0 0 1-15.139-3.998.626.626 0 1 1 1.063-.664 10.183 10.183 0 0 0 13.48 3.56A10.171 10.171 0 0 0 23.85 5.931ZM12.775 28.904a3.816 3.816 0 0 0 4.276 1.924l-4.722 7.769a.313.313 0 0 1-.52.024l-1.602-2.158a2.82 2.82 0 0 0-1.955-1.121l-2.621-.29a.313.313 0 0 1-.233-.475l4.804-7.858c.46.145.89.377 1.268.685l.12.1c.272.222.515.476.725.757l.351.471c.041.054.077.112.109.172Z"></path>
        </symbol>
        <symbol id="check-mark" viewBox="0 0 40 40">
            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                  d="M31.931 5.944a18.438 18.438 0 1 0-1.224 29.066.781.781 0 1 1 .907 1.272 20 20 0 1 1 4.648-4.64.781.781 0 0 1-1.27-.91 18.438 18.438 0 0 0-3.06-24.788Zm2.444 27.65a.781.781 0 1 1-1.563 0 .781.781 0 0 1 1.563 0ZM10 20.57l3.319-3.33 3.453 3.487a.86.86 0 0 0 1.22.002l8.687-8.723 3.344 3.37-12.609 12.609L10 20.57Zm3.93-4.932a.86.86 0 0 0-1.219-.002l-4.314 4.328a.86.86 0 0 0 .001 1.215l8.408 8.408a.86.86 0 0 0 1.216 0l13.6-13.601a.86.86 0 0 0 .003-1.213l-4.335-4.37a.86.86 0 0 0-1.22-.001l-8.686 8.723-3.453-3.487Z"></path>
        </symbol>
        <symbol id="rating" viewBox="0 0 40 40">
            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                  d="M20.72 27.897a.547.547 0 0 0-.972 0L18.22 30.87l-3.299.534a.547.547 0 0 0-.3.925l2.355 2.371-.512 3.302c-.068.44.39.773.787.572l2.982-1.507 2.983 1.507c.397.2.855-.132.787-.572l-.512-3.302 2.355-2.37a.547.547 0 0 0-.3-.926l-3.3-.534-1.526-2.972Zm-4.572 4.416 2.793-.452 1.293-2.517 1.293 2.517 2.794.452-1.994 2.008.433 2.796-2.526-1.276-2.525 1.276.433-2.796-1.994-2.008Zm-9.564-8.869a.547.547 0 0 1 .973 0l1.527 2.972 3.298.534c.44.071.615.61.301.925l-2.355 2.371.512 3.302a.547.547 0 0 1-.787.572L7.07 32.613 4.088 34.12a.547.547 0 0 1-.787-.572l.512-3.302-2.355-2.37a.547.547 0 0 1 .3-.926l3.299-.534 1.527-2.972Zm-.807 3.964-2.793.452 1.994 2.007-.433 2.797 2.525-1.277 2.526 1.277-.433-2.797 1.994-2.007-2.794-.452L7.07 24.89l-1.293 2.517Zm28.069-3.964a.547.547 0 0 0-.973 0l-1.527 2.972-3.299.534a.547.547 0 0 0-.3.925l2.355 2.371-.512 3.302c-.068.44.39.773.787.572l2.982-1.507 2.983 1.507c.397.2.855-.132.787-.572l-.512-3.302 2.355-2.37a.547.547 0 0 0-.3-.926l-3.3-.534-1.526-2.972Zm-4.573 4.416 2.793-.452 1.293-2.517 1.294 2.517 2.793.452-1.994 2.007.433 2.797-2.526-1.277-2.525 1.277.433-2.797-1.994-2.007ZM6.73 3.25h1.54a2.266 2.266 0 0 1 2.266 2.273l-.009 2.693A2.266 2.266 0 0 1 9.874 9.8l-.797.807c-.26.264-.405.619-.405.988v1.811c0 .302.245.547.547.547h2.344a2.11 2.11 0 0 1 2.087 1.804 3.672 3.672 0 0 0-2.01 3.274v4.532c0 .302.245.546.547.546h15.626a.547.547 0 0 0 .546-.547v-4.53c0-1.43-.817-2.669-2.009-3.275a2.11 2.11 0 0 1 2.087-1.804h2.344a.547.547 0 0 0 .547-.547v-1.81c0-.37-.145-.725-.405-.989l-.797-.807a2.266 2.266 0 0 1-.653-1.584l-.009-2.693A2.266 2.266 0 0 1 31.73 3.25h1.54a2.266 2.266 0 0 1 2.266 2.273l-.009 2.693a2.266 2.266 0 0 1-.653 1.584l-.797.807c-.26.264-.405.619-.405.988v1.811c0 .302.245.547.547.547h2.422a2.11 2.11 0 0 1 2.109 2.11v3.28h-8.672a.547.547 0 0 0-.547.548v.156c0 .302.245.547.547.547h9.375a.547.547 0 0 0 .547-.547v-3.985a3.36 3.36 0 0 0-3.36-3.359h-1.718v-1.108c0-.04.016-.08.045-.11l.797-.806a3.516 3.516 0 0 0 1.013-2.459l.009-2.693A3.516 3.516 0 0 0 33.27 2h-1.54a3.516 3.516 0 0 0-3.516 3.527l.009 2.693c.003.92.367 1.803 1.013 2.458l.797.808c.029.029.045.068.045.11v1.107h-1.64a3.36 3.36 0 0 0-3.292 2.685 3.71 3.71 0 0 0-.459-.029h-2v-1.377c0-.04.015-.08.044-.11l1-1.015a3.516 3.516 0 0 0 1.012-2.456l.01-3.233a3.828 3.828 0 0 0-3.828-3.84h-.066a.547.547 0 0 0-.547.547v.156c0 .302.245.547.547.547h.066a2.578 2.578 0 0 1 2.578 2.586l-.01 3.233a2.266 2.266 0 0 1-.651 1.583l-1.001 1.015c-.26.264-.405.618-.405.987v2.08c0 .302.245.547.547.547h2.704a2.422 2.422 0 0 1 2.422 2.422v3.828H12.891v-3.828a2.422 2.422 0 0 1 2.421-2.422h2.705a.547.547 0 0 0 .547-.547v-2.08c0-.369-.145-.723-.405-.986l-1-1.016a2.266 2.266 0 0 1-.652-1.583l-.01-3.233a2.578 2.578 0 0 1 2.578-2.586h.066a.547.547 0 0 0 .547-.547v-.156a.547.547 0 0 0-.547-.547h-.066a3.828 3.828 0 0 0-3.828 3.84l.01 3.233c.003.92.366 1.8 1.011 2.456l1.001 1.016c.029.029.045.068.045.11v1.376h-2.002c-.155 0-.308.01-.458.029a3.36 3.36 0 0 0-3.291-2.685H9.921v-1.108c0-.04.016-.08.045-.11l.797-.806a3.516 3.516 0 0 0 1.013-2.459l.009-2.693A3.516 3.516 0 0 0 8.27 2H6.73a3.516 3.516 0 0 0-3.516 3.527l.009 2.693c.003.92.367 1.803 1.013 2.458l.797.808c.029.029.045.068.045.11v1.107H3.36A3.36 3.36 0 0 0 0 16.063v3.984c0 .302.245.547.547.547H10a.547.547 0 0 0 .547-.547v-.156a.547.547 0 0 0-.547-.547H1.25v-3.282a2.11 2.11 0 0 1 2.11-2.109H5.78a.547.547 0 0 0 .547-.547v-1.81c0-.37-.146-.725-.405-.989L5.126 9.8a2.266 2.266 0 0 1-.653-1.584l-.009-2.693A2.266 2.266 0 0 1 6.73 3.25Z"></path>
        </symbol>

        <!-- contact info icons -->
        <symbol id="location" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                  d="M19.768 5.947c-2.227-7.93-13.394-7.93-15.62 0a8.209 8.209 0 0 0 1.59 7.468l5.501 6.608a.934.934 0 0 0 1.438 0l5.501-6.607a8.209 8.209 0 0 0 1.59-7.47Zm-7.81 13.029 5.286-6.348a6.976 6.976 0 0 0 1.351-6.348C16.703-.458 7.213-.458 5.321 6.28a6.976 6.976 0 0 0 1.35 6.347l5.287 6.349Zm-7.75-1.912c-.462 0-.888.254-1.11.662l-1.72 3.161c-.462.85.148 1.886 1.11 1.886h19.024c.963 0 1.573-1.04 1.108-1.889l-1.73-3.16a1.265 1.265 0 0 0-1.109-.66h-.841a.612.612 0 0 1-.61-.613c0-.34.273-.614.61-.614h.841c.905 0 1.74.496 2.176 1.294l1.731 3.161C24.6 21.96 23.403 24 21.512 24H2.488C.6 24-.598 21.965.308 20.298l1.721-3.161a2.482 2.482 0 0 1 2.18-1.3H5c.337 0 .61.275.61.614a.612.612 0 0 1-.61.613h-.792Zm4.538-8.941c0-1.812 1.46-3.28 3.259-3.28 1.784 0 3.34 1.448 3.258 3.634a.612.612 0 0 0 .587.636.611.611 0 0 0 .632-.59c.106-2.869-1.99-4.907-4.477-4.907-2.473 0-4.477 2.018-4.477 4.507 0 2.483 1.913 4.666 4.885 4.505a.612.612 0 0 0 .575-.646.61.61 0 0 0-.641-.58c-2.239.122-3.6-1.464-3.6-3.28Z"></path>
        </symbol>
        <symbol id="phone" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                  d="M10 3.715a3.422 3.422 0 0 1-.624 3.866L8 9.001c-.54.557-.529 1.448.025 1.992l4.98 4.894a1.406 1.406 0 0 0 2.022-.05l1.098-1.194a3.494 3.494 0 0 1 4.264-.691l1.609.89c2.264 1.254 2.691 4.338.852 6.162a10.312 10.312 0 0 1-12.003 1.843l-1.312-.678a18.527 18.527 0 0 1-8.139-8.335l-.235-.48a11.47 11.47 0 0 1 .825-11.48c1.855-2.727 5.957-2.422 7.39.55l.623 1.29ZM8.5 6.729 7.125 8.148a2.64 2.64 0 0 0 .045 3.72l4.981 4.893a2.625 2.625 0 0 0 3.773-.095l1.098-1.193a2.275 2.275 0 0 1 2.776-.45l1.61.891a2.664 2.664 0 0 1 .584 4.22 9.094 9.094 0 0 1-10.585 1.626l-1.313-.679a17.304 17.304 0 0 1-7.601-7.785l-.235-.48a10.244 10.244 0 0 1 .736-10.253C4.32.614 7.252.833 8.277 2.956L8.9 4.248c.4.829.24 1.82-.4 2.48Zm4.13-5.082c5.195 0 9.719 4.167 9.719 9.744h1.22C23.57 5.107 18.468.424 12.63.424v1.224Zm6.432 9.274c0-3.421-2.774-5.978-5.963-5.978V3.719c3.832 0 7.184 3.074 7.184 7.202h-1.221Zm-5.259-2.919c1.183 0 2.207.948 2.207 2.212h1.22a3.427 3.427 0 0 0-3.427-3.436v1.224Z"></path>
        </symbol>
        <symbol id="envelope" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                  d="M2.103 4a2.102 2.102 0 0 0-1.177.358l-.025.017A2.087 2.087 0 0 0 0 6.092v11.816C0 19.063.942 20 2.103 20h19.794A2.098 2.098 0 0 0 24 17.908V6.092A2.099 2.099 0 0 0 21.897 4H2.103Zm9.305 9.804L2.791 5.23h18.46l-8.618 8.573a.869.869 0 0 1-1.225 0ZM1.238 6.092c0-.188.06-.362.163-.504l.035.035 6.175 6.143-6.34 6.382a.859.859 0 0 1-.034-.24V6.092Zm21.367-.469.011-.01a.854.854 0 0 1 .147.48v11.815a.861.861 0 0 1-.035.244l-6.358-6.325 6.235-6.204ZM2.393 18.77l6.092-6.133 2.049 2.038a2.11 2.11 0 0 0 2.974 0l1.987-1.977 6.103 6.072H2.393Z"></path>
        </symbol>

        <!-- error page icon -->
        <symbol id="error" viewBox="0 0 224 200">
            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                  d="M130.671 10.795c-8.298-14.393-29.044-14.393-37.342 0L2.92 167.614C-5.378 182.008 4.995 200 21.59 200h180.817c16.597 0 26.97-17.992 18.671-32.386L130.671 10.795Zm-30.018 59.66c0-5.649 4.572-10.228 10.212-10.228h2.27c5.64 0 10.212 4.58 10.212 10.227l-3.404 55.682c0 6.25-3.946 11.364-7.943 11.364-3.997 0-7.943-5.114-7.943-11.364l-3.404-55.681Zm22.694 89.772c0 6.276-5.08 11.364-11.347 11.364-6.267 0-11.347-5.088-11.347-11.364 0-6.276 5.08-11.363 11.347-11.363 6.267 0 11.347 5.087 11.347 11.363Z"></path>
        </symbol>
    </svg>
</div>


<!-- js plugins file -->
<script src="{{asset('js/plugins.min.js')}}"></script>

<!-- main script file -->
<script src="{{asset('js/bundle.min.js')}}"></script>
</body>

</html>
