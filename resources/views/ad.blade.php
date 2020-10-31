@extends('layouts.layout')

@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>{{$ad->name}}</h1>
                            <p class="mb-0">{{$city ?? '' }}</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">



                <div class="col-lg-8">

                    <div class="mb-4">
                        <div class="slide-one-item home-slider owl-carousel">
                            <div><img src="{{ asset($ad->photo) }}" alt="Image" class="img-fluid"></div>
                            <div><img src="{{ asset($ad->photo) }}" alt="Image" class="img-fluid"></div>
                        </div>
                    </div>

                    <h4 class="h5 mb-4 text-black">Описание:</h4>
                    <p>
                        {{$ad->description}}
                    </p>
                </div>


                <div class="col-lg-3 ml-auto">

                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Filters</h3>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="What are you looking for?" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap">
                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                    <select class="form-control" name="" id="">
                                        <option value="">All Categories</option>
                                        <option value="" selected="">Real Estate</option>
                                        <option value="">Books &amp;  Magazines</option>
                                        <option value="">Furniture</option>
                                        <option value="">Electronics</option>
                                        <option value="">Cars &amp; Vehicles</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- select-wrap, .wrap-icon -->
                                <div class="wrap-icon">
                                    <span class="icon icon-room"></span>
                                    <input type="text" placeholder="Location" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <h3 class="h6 mb-3">{{__('messages.moreInfo')}}:</h3>
                        <p>Автор: <a href="">{{$ad->user->name}}</a></p>
                        <p>Телефон: <a href="">
                                @foreach ($ad->phones as $phone)
                                    {{ $phone->number }}
                                @endforeach
                            </a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection
