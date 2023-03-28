@extends('pages.layouts.base')

@section('content')

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('pages.includes.navbar')

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{ asset('storage') .'/'. $image[0] }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Qui sommes-nous et que faisons-nous ?</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features mb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Notre histoire</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ asset('assets/images/feature-image.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Qui sommes-nous et que faisons-nous ?</h4>
                        <p>Supply Business Service est une société à responsabilité limitée de droit Congolais. Elle est une
                            Entreprise de vente des biens et services dans le domaine informatique. Cette Entreprise est à même
                            de vous fournir des équipements informatiques haute gamme, maintenance, programmation,
                            installation du réseau, fibre optique et autres câblages, service de dépannage Informatique…..
                            La spécificité de la société réside dans la modernité des services
                            offerts.</p>
                        <br>
                        <p>SBS s.a.r.l travaille dans l’optique de maintenir un standard
                            international en matière, de prestations des services rendus,
                            modernité des matériels utilisés, relation clients, suivi et
                            management.</p>
                        <br>
                        <p>Bien que l'entreprise soit récente sur le marché Congolais, elle est
                            fortifiée par l'expérience de son personnel dirigeant.
                            La plupart ayant au minimum 10 ans d'expérience dans les divers
                            domaines.</p>
                        <p>Aussi la diversité des services offerts ainsi que la volonté de
                            créativité de l'entreprise en font un de ses points forts.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <i class="fa fa-gear"></i>
                            </div>
                            <div class="down-content">
                                <img src="{{ asset($category->image) }}" alt="" width="250">
                                <br/><br/>
                                <h4>{{ $category->name }}</h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p> --}}
                                {{-- <a href="#" class="filled-button">Lire Plus</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
