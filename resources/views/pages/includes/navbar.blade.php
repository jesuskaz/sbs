<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><h2>Supply  <em>Business </em> Service</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if( (Request::url() === route('home')))

                    {{ 'active' }}

                    @endif">
                        <a class="nav-link" href="{{ route('home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if((Request::url() === route('services')))

                        {{ 'active' }}

                        @endif" href="{{ route('services') }}">Nos Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if((Request::url() === route('about')))

                        {{ 'active' }}

                        @endif" href="{{ route('about') }}">Apropos Nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if((Request::url() === route('contact')))

                        {{ 'active' }}

                        @endif" href="{{ route('contact') }}">Contactez Nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
