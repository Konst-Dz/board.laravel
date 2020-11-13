@extends('layouts.layout')

@section('content')



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image:url(/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>{{$subcategory->name}}</h1>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="overlap-category mb-5">
        <div class="row align-items-stretch no-gutters">

        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">

                        @foreach($ads as $ad)
                            <div class="col-lg-6">
                                <div class="d-block d-md-flex listing vertical">
                                    <a href="{{url('ads/'.$category->slug.'/'.$ad->subcategory->slug.'/'.$ad->id)}}" class="img d-block" style="background-image:url({{\Illuminate\Support\Facades\Storage::url($ad->photo)}})"></a>
                                    <div class="lh-content">
                                        <span class="category">{{$ad->subcategory->category->name}}</span>
                                        <span class="category">{{$ad->subcategory->name}}</span>
                                        <h3><a href="{{url('ads/'.$category->slug.'/'.$ad->subcategory->slug.'/'.$ad->id)}}">{{$ad->name}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                </div>
        </div>
    </div>
@endsection
