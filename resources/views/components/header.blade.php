<header class="header" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('frontend.feria')}}">
                    <img src="{{asset('./images/expodetalles_white.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll mx-auto" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link  {{ Route::is('frontend.feria') ? 'active' : '' }}" aria-current="page" href="{{route('frontend.feria')}}">feria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('frontend.visitantes') ? 'active' : '' }}" href="{{route('frontend.visitantes')}}">visitantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('frontend.noticias') ? 'active' : '' }}" href="{{route('frontend.noticias')}}" tabindex="-1" aria-disabled="true">noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('frontend.galeria') ? 'active' : '' }}" href="{{route('frontend.galeria')}}">galeria</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Route::is('frontend.detalle') ? 'active' : '' }}" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                editorial
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{route('frontend.detalle')}}">Detalle Empresarial</a></li>
                                <li><a class="dropdown-item" href="{{route('frontend.elproceso')}}">El Proceso</a></li>
                            
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('frontend.contacto') ? 'active' : '' }}" href="{{route('frontend.contacto')}}">contacto</a>
                        </li>
                    </ul>
                    <ul class="header__social">
                        <li><a href="#"><img src="{{asset('./images/ico-messenger.png')}}" title="Contactanos via Facebook"></a></li>
                        <li><a href="#"><img src="{{asset('./images/ico-whatsapp.png')}}" title="Contactanos via WhatsApp"></a></li>
                        <li><a href="#"><img src="{{asset('./images/ico-youtube.png')}}" title="Siguenos en Youtube"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>