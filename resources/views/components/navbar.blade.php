<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/assets/images/admin.png" alt="Logo" style="max-width: 50px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
            aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @lang('navbar.home')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('home') }}">Alchemist Law Office</a>
                            <a class="dropdown-item" href="#">Alchemist Muda Indonesia</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#section-about">@lang('navbar.about')</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-why-us">@lang('navbar.why')</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-experiences">@lang('navbar.experience')</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-clients">@lang('navbar.client')</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-practicing-areas">@lang('navbar.practicing_areas')</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-attorneys">@lang('navbar.attorneys')</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-contact">@lang('navbar.contact')</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
