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
<div class="page-heading products-heading header-text" style="background-image: url({{ asset('storage') .'/'. $image[0] }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Ce que nous vous offrons comme services</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">Tous les services</li>
                        @foreach($services as $category)
                        <li data-filter=".{{ $category->idcategorie }}">{{ $category->categorie }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        @foreach($services as $service)
                        <div class="col-lg-4 col-md-4 all {{ $service->idservice }}">
                            <div class="product-item">
                                <a href="#"><img src="{{ asset('storage/'.$service->path) }}" alt=""></a>
                                <div class="down-content">
                                    <a href="#"><h4>{{ $service->service }}</h4></a>
                                    <p>{!! $service->description !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
{{--            <div class="col-md-12">--}}
{{--                <ul class="pages">--}}
{{--                    <li><a href="#">1</a></li>--}}
{{--                    <li class="active"><a href="#">2</a></li>--}}
{{--                    <li><a href="#">3</a></li>--}}
{{--                    <li><a href="#">4</a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
</div>




@endsection
