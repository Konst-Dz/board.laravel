@extends('layouts.layout')

@section('content')



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image:url(/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Ads Listings</h1>
                            <p class="mb-0">Choose product you dwant</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="overlap-category mb-5">
        <div class="row align-items-stretch no-gutters">

            {{--@foreach($subcategories as $subcategory)

                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="{{url('ads/'.$subcategory->category->slug.'/'.$subcategory->slug)}}" class="popular-category h-100">
                        <span class="icon"><span class="--}}{{--{{$subcategory->icon}}--}}{{--"></span></span>
                        <span class="caption mb-2 d-block">{{$subcategory->name}}</span>
                        <span class="number">{{$subcategory->ad_count}}</span>
                    </a>
                </div>

            @endforeach--}}

        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="row">

                        @foreach($ads as $ad)
                            <div class="col-lg-6">
                                <div class="d-block d-md-flex listing vertical">
                                    <a href="{{url('ads/'.$category->slug.'/'.$ad->subcategory->slug.'/'.$ad->id)}}" class="img d-block" style="background-image:url({{$ad->photo}})"></a>
                                    <div class="lh-content">
                                        <span class="category">{{$ad->subcategory->category->name}}</span>
                                        <span class="category">{{$ad->subcategory->name}}</span>
                                        <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                        <h3><a href="{{url('ads/'.$category->slug.'/'.$ad->subcategory->slug.'/'.$ad->id)}}">{{$ad->name}}</a></h3>
                                        <p class="mb-0">
                                            <span class="icon-star text-warning"></span>
                                            <span class="icon-star text-warning"></span>
                                            <span class="icon-star text-warning"></span>
                                            <span class="icon-star text-warning"></span>
                                            <span class="icon-star text-secondary"></span>
                                            <span class="review">(3 Reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="col-12 mt-5 text-center">
                        <div class="custom-pagination">
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span class="more-page">...</span>
                            <a href="#">10</a>
                        </div>
                    </div>

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
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Radius around selected destination</p>
                            </div>
                            <div class="form-group">
                                <input type="range" min="0" max="100" value="20" data-rangeslider>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Category 'Real Estate' is selected</p>
                                <p>More filters</p>
                            </div>
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    <li>
                                        <label for="option1">
                                            <input type="checkbox" id="option1">
                                            Residential
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option2">
                                            <input type="checkbox" id="option2">
                                            Commercial
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option3">
                                            <input type="checkbox" id="option3">
                                            Industrial
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option4">
                                            <input type="checkbox" id="option4">
                                            Land
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <h3 class="h6 mb-3">More Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat facilis, reprehenderit eius officiis.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 text-left border-primary">
                    <h2 class="font-weight-light text-primary">Trending Today</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">

                    <div class="d-block d-md-flex listing">
                        <a href="#" class="img d-block" style="background-image:url('/images/img_1.jpg');"></a>
                        <div class="lh-content">
                            <span class="category">Real Estate</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">House with Swimming Pool</a></h3>
                            <address>Don St, Brooklyn, New York</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(3 Reviews)</span>
                            </p>
                        </div>
                    </div>
                    <div class="d-block d-md-flex listing">
                        <a href="#" class="img d-block" style="background-image:url('/images/img_3.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Furniture</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Wooden Chair &amp; Table</a></h3>
                            <address>Don St, Brooklyn, New York</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(3 Reviews)</span>
                            </p>
                        </div>
                    </div>

                    <div class="d-block d-md-flex listing">
                        <a href="#" class="img d-block" style="background-image:url('/images/img_4.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Electronics</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">iPhone X gray</a></h3>
                            <address>Don St, Brooklyn, New York</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(3 Reviews)</span>
                            </p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-6">

                    <div class="d-block d-md-flex listing">
                        <a href="#" class="img d-block" style="background-image:url('/images/img_1.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Cars &amp; Vehicles</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Red Luxury Car</a></h3>
                            <address>Don St, Brooklyn, New York</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(3 Reviews)</span>
                            </p>
                        </div>
                    </div>

                    <div class="d-block d-md-flex listing">
                        <a href="#" class="img d-block" style="background-image:url('/images/img_2.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Real Estate</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">House with Swimming Pool</a></h3>
                            <address>Don St, Brooklyn, New York</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(3 Reviews)</span>
                            </p>
                        </div>
                    </div>
                    <div class="d-block d-md-flex listing">
                        <a href="#" class="img d-block" style="background-image:url('/images/img_3.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">Furniture</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Wooden Chair &amp; Table</a></h3>
                            <address>Don St, Brooklyn, New York</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(3 Reviews)</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-white">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Testimonials</h2>
                </div>
            </div>

            <div class="slide-one-item home-slider owl-carousel">
                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="/images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                            <p>John Smith</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>
                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="/images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                            <p>Christine Aguilar</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>

                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="/images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                            <p>Robert Spears</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>

                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="/images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                            <p>Bruce Rogers</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="newsletter bg-primary py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-6">

                    <form class="d-flex">
                        <input type="text" class="form-control" placeholder="Email">
                        <input type="submit" value="Subscribe" class="btn btn-white">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection