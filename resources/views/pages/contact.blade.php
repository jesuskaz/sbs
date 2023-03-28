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
    <div class="page-heading contact-heading header-text" style="background-image: url({{ asset('storage') .'/'. $image[0] }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>N'hesitez pas a nous contactez</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="find-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Notre Localisation</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- How to change your own map point
                        1. Go to Google Maps
                        2. Click on your location point
                        3. Click "Share" and choose "Embed map" tab
                        4. Copy only URL and paste it within the src="" field below
                    -->
                    <div id="map">
                        <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>Nous coordonees</h4>
                        <br>
                        <p>1585, Avenue Kasavubu, Lubumbashi.</p>
                        <p>+243992536700</p>
                        <p>info@supplybusinesservice.com</p>
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


    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Envoyez-nous un message</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('mail') }}" method="post">

                            @csrf

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Votre nom complet" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Votre Adresse Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Votre Sujet" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Votre Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Envoyer votre Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>Supply Busines Service</a>
                            <div class="content">
                                <p>SBS Sarl est une Entreprise qui rend divers services aux particuliers et aux Entreprise, Elle fournit divers
                                    services de qualité et elle peut vous fournir des produits de marque internationale à des prix défiants
                                    toute concurrence. SBS s’investit pour fournir des solutions d’affaires les plus novatrices et de hauts
                                    standards pour satisfaire le marché à travers ses différentes relations d’affaires avec ses partenaires.</p>
                            </div>
                        </li>
                        <li>
                            <a><p>Fournir aux Entreprises et aux particuliers des services et des produits de qualité, à des prix défiants
                                    toute concurrence.</p></a>
                            <div class="content">
                            </div>
                        </li>
                        <li>
                            <a><p>Assurer la réussite et la satisfaction de nos fournisseurs, de nos Clients et de nous-mêmes.</p></a>
                            <div class="content">
                            </div>
                        </li>
                        <li>
                            <a><p>Apporter des solutions spécifiques dans les affaires, pour le bienêtre de tous.</p></a>
                            <div class="content">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
