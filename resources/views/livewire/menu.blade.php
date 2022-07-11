<div>
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+244 9494252584</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>centroempregoangola@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="text-white pl-2" href="{{ route('login') }}">
                        <span class="text-orange-500 hover:text-white">entrar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary flex items-center gap-2"><img src="/logo.png"
                        class="w-8" alt="" srcset=""> EMPREGO.ao</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{-- {{ Request()->routeIs('home') ? 'active' : '' }} --}}">Início</a>
                    {{-- <a href="about.html" class="nav-item nav-link">Sobre</a>
                    <a href="service.html" class="nav-item nav-link">Serviços</a> --}}

                </div>
                @if (Request()->routeIs('cadastrar'))
                @else
                    <a href="{{ route('cadastrar') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Cadastrar</a>
                @endif
            </div>
        </nav>
    </div>
</div>
