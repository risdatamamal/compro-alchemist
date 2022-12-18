<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Law</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
            aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('home') }}">Alchemist Law Office</a>
                            <a class="dropdown-item" href="#">Alchemist Muda Indonesia</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#section-why-us">Why</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-practicing-areas">Practicing Areas</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-attorneys">Attorneys</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
