<header class="header hide-in-preloading">
    <div class="container">

        <!-- brand logo -->
        <div class="brandLogo">
            <h2 class="brandLogo__title" title="Nafie">
                <a class="brandLogo__link" href="index.html">Nafie</a>
            </h2>
        </div>

        <!-- navbar -->
        <nav class="navbar">

            <!-- navbar links -->
            <ul class="navbar__links">
                <li class="navbar__links__item">
                    <a class="navbar__links__link" href="index.html#hero"
                       onclick="window._offCanvasMenuClose(this)">Home</a>
                </li>
                <li class="navbar__links__item">
                    <a class="navbar__links__link" href="index.html#about"
                       onclick="window._offCanvasMenuClose(this)">About</a>
                </li>
                <li class="navbar__links__item">
                    <a class="navbar__links__link" href="index.html#skills"
                       onclick="window._offCanvasMenuClose(this)">Skills</a>
                </li>
                <li class="navbar__links__item">
                    <a class="navbar__links__link" href="index.html#portfolio"
                       onclick="window._offCanvasMenuClose(this)">Portfolio</a>
                </li>
                <li class="navbar__links__item">
                    <a class="navbar__links__link" href="index.html#contact"
                       onclick="window._offCanvasMenuClose(this)">Contact</a>
                </li>
            </ul>

            <!-- menu content in big devices (hidden in mobile/tablet) -->
            <div class="offCanvasMenu" tabindex="-1">
                <div class="container">

                    <!-- about me -->
                    <div class="offCanvasMenu__about">
                        <p class="block-subTitle">I love making things simple, intuitive and expertly crafted!</p>
                        <h4 class="block-title">Product is the vital essence of what i do, truly great product is
                            born of meticulous planning and process. This is where i specialized!</h4>
                    </div>

                    <!-- contact info -->
                    <ul class="offCanvasMenu__contact">
                        <li class="offCanvasMenu__contact__block">
                            <h4 class="block-title">Email</h4>
                            <ul>
                                <li><a href="mailto:info@nafie.com">info@nafie.com</a></li>
                                <li><a href="mailto:support@nafie.com">support@nafie.com</a></li>
                            </ul>
                        </li>
                        <li class="offCanvasMenu__contact__block">
                            <h4 class="block-title">Address</h4>
                            <ul>
                                <li>
                                    941 saqrqorish Road, alandalos,
                                    <br>
                                    grnata, wa 47122-4194
                                </li>
                            </ul>
                        </li>
                        <li class="offCanvasMenu__contact__block">
                            <h4 class="block-title">Phone</h4>
                            <ul>
                                <li><a href="tel:02966202290">(02) 966 202 290</a></li>
                                <li><a href="tel:02966202291">(02) 966 202 291</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- actions icons -->
        <ul class="header__actionsIcons">

            <!-- language switcher dropdown -->
            <li class="header__actionsIcons__item langSwitcher">
                <div class="langsDropdown">
                    <a class="langsDropdown__toggle" href="#">EN</a>

                    <ul class="langsDropdown__menu">
                        <li class="langsDropdown__menu__item">
                            <a class="langsDropdown__menu__link" href="index.html">EN</a>
                        </li>
                        <li class="langsDropdown__menu__item">
                            <a class="langsDropdown__menu__link" href="ar-index.html">ع</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- mode switcher button -->
            <li class="header__actionsIcons__item modeSwitcher">
                <button class="modeSwitcherBtn" title="Change Mode" onclick="window._toggleAppMode(this)"></button>
            </li>

            <!-- off-canvas menu toggler -->
            <li class="header__actionsIcons__item offCanvasMenuToggler">
                <button class="hamburgerBtn" title="Toggle Side Menu" onclick="window._offCanvasMenuToggle(this)">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </li>
        </ul>
    </div>
</header>
