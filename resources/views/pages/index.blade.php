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

    @include('pages.includes.navbar')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            @foreach($header as $img)
                <div class="banner-item-01" style="padding: 300px 0px;background-image: url({{ asset('storage') . '/'. $img }});
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;">
                    <div class="text-content">
                        <h2></h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Nos services</h2>
                        <a href="{{ route('services') }}">voir tous nos services <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @php
                    $i = 0;
                @endphp
                @foreach($homeImages as $category=>$service)
                    <div class="col-md-4">
                        <div class="team-member">
                            <div class="thumb-container">
                                <img src="{{ asset('storage/' . $categories[$i]->path) }}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>{{ $category }}</h4>
                                <span>{{ count($service) }} services</span>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p> --}}
                            </div>
                        </div>
                    </div>
                        @php
                            $i += 1;
                        @endphp
                @endforeach
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>À propos de Supply Business Service</h2>
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
                        <a href="{{ route('about') }}" class="filled-button">Lire Plus</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ asset('assets/images/feature-image.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Supply <em> Business </em> Service</h4>
                                <p>Assurer la réussite et la satisfaction de nos fournisseurs, de nos Clients et de nous-mêmes.</p>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('contact') }}" class="filled-button">Contatez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
