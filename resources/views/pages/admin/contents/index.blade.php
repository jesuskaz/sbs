<x-app-layout>


    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Contenus | des pages</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                           aria-controls="home" aria-selected="true">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="services-tab3" data-toggle="tab" href="#services3"
                                           role="tab" aria-controls="profile" aria-selected="false">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="about-tab3" data-toggle="tab" href="#about3" role="tab"
                                           aria-controls="contact" aria-selected="false">Apropos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                           aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="home3" role="tabpanel"
                                         aria-labelledby="home-tab3">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Navigation &amp; Indicator</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="carouselExampleIndicators3" class="carousel slide"
                                                             data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleIndicators3"
                                                                    data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleIndicators3"
                                                                    data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleIndicators3"
                                                                    data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                @for($index = 0; $index < sizeof($images); $index++) <div
                                                                    class="carousel-item @if ($index === 0)
                                                                    {{ 'active' }}
                                                                    @endif">

{{--                                                                    @dd($images[$index])--}}
                                                                    <img class="d-block w-100"
                                                                         src="{{ asset('storage/'.$images[$index] )}}"
                                                                         alt="First slide">
                                                                </div>
                                                                @endfor
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3"
                                                               role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                              aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators3"
                                                               role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                              aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Changer les images</h4>
                                                    </div>
                                                    <div class="card-body">

                                                        <form method='post' action="{{ route('admin.contents.images') }}"
                                                              enctype="multipart/form-data">

                                                            @method('put')

                                                            @csrf

                                                            <div class="section-title">Choisir les images</div>
                                                            <div class="custom-file">
                                                                <input type="file" name="images[]" multiple
                                                                       class="custom-file-input" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choisir les
                                                                    images</label>
                                                            </div>
                                                            <div class="mt-lg-5">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect">Changer les
                                                                    images</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="services3" role="tabpanel" aria-labelledby="services-tab3">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Light Gallery</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="aniimated-thumbnials" class="clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <a href="{{ asset('storage') .'/'. $servicesImg[0] }}"
                                                                   data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                         src="{{ asset('storage') .'/'. $servicesImg[0] }}"
                                                                         alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Changer les images</h4>
                                                    </div>
                                                    <div class="card-body">

                                                        <form method='post' action="{{ route('admin.contents.images.services') }}"
                                                              enctype="multipart/form-data">

                                                            @method('put')

                                                            @csrf

                                                            <div class="section-title">Choisir les images</div>
                                                            <div class="custom-file">
                                                                <input type="file" name="image" class="custom-file-input"
                                                                       id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choisir les
                                                                    images</label>
                                                            </div>
                                                            <div class="mt-lg-5">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect">Changer les
                                                                    images</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="about3" role="tabpanel" aria-labelledby="about-tab3">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Light Gallery</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="aniimated-thumbnials" class="clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <a href="{{ asset('storage') .'/'. $aboutImg[0] }}"
                                                                   data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                         src="{{ asset('storage') .'/'. $aboutImg[0] }}" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Changer les images</h4>
                                                    </div>
                                                    <div class="card-body">

                                                        <form method='post' action="{{ route('admin.contents.images.about') }}"
                                                              enctype="multipart/form-data">

                                                            @method('put')

                                                            @csrf

                                                            <div class="section-title">Choisir les images</div>
                                                            <div class="custom-file">
                                                                <input type="file" name="image" class="custom-file-input"
                                                                       id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choisir les
                                                                    images</label>
                                                            </div>
                                                            <div class="mt-lg-5">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect">Changer les
                                                                    images</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Light Gallery</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="aniimated-thumbnials" class="clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <a href="{{ asset('storage') .'/'. $contactImg[0] }}"
                                                                   data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                         src="{{ asset('storage') .'/'. $contactImg[0] }}"
                                                                         alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-6 mt-lg-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Changer les images</h4>
                                                    </div>
                                                    <div class="card-body">

                                                        <form method='post' action="{{ route('admin.contents.images.contact') }}"
                                                              enctype="multipart/form-data">

                                                            @method('put')

                                                            @csrf

                                                            <div class="section-title">Choisir les images</div>
                                                            <div class="custom-file">
                                                                <input type="file" name="image" class="custom-file-input"
                                                                       id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choisir les
                                                                    images</label>
                                                            </div>
                                                            <div class="mt-lg-5">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect">Changer les
                                                                    images</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
