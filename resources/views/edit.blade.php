@extends('layouts.layout')

@section('content')


    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>{{__('messages.editAnAd')}}</h1>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5"  data-aos="fade">

                    @if(session('status') )
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($errors->any())
                        @foreach($errors->all() as $message)
                            {{$message}}
                        @endforeach
                    @endif
                    <form  action="{{   url('ads/update/'.$ad->id)  }}" method="POST" enctype="multipart/form-data" class="p-5 bg-white">
                        @csrf
                        @method('PUT')

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="name">{{__('messages.adName')}}</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $ad->name }}" >
                            </div>

                        </div>

                        {{--@include('layouts.category_select')--}}

                        Выберите категорию
                        <div class="form-group">
                            <div class="select-wrap">
                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                <select class="form-control" name="category" id="category" required>
                                    <option value=""></option>
                                    @foreach($categories as $category)
                                        <optgroup label="{{ $category->name }}" >
                                            @foreach($category->subcategory as $subcategory)

                                                <option  value="{{ $subcategory->id }}"
                                                @if( $subcategory->id == $ad->subcategory_id )
                                                    selected
                                                @endif
                                                >{{ $subcategory->name }}</option>

                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="description">{{__('messages.description')}}</label>
                                <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder=""> {{ $ad->description }}</textarea>
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="price">{{__('messages.price')}}</label>
                                <input name="price" type="number" id="price" class="form-control" value="{{ $ad->price }}">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="phone">{{__('messages.phone')}}</label>
                                <input type="tel" id="phone" name="phone" class="form-control" autocomplete="on" value="{{ $phone }}" >
                            </div>
                        </div>

                        Выберите город
                        <div class="form-group">
                            <div class="select-wrap">
                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                <select class="form-control" name="city" id="city" required>
                                    <option value=""></option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}"
                                                @if( $city->id == $cityId )
                                                selected
                                                 @endif
                                        >{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        @if(!$ad->photo)
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="">Фото</label>
                                    <input type="file" id="" name="image" class="">
                                </div>
                            </div>
                        @endif


                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="{{__('messages.send')}}" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>

                        <form method="POST" action="{{ url('delete/photo/'.$ad->id) }}" >
                            @csrf
                            @method('DELETE')
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($ad->photo) }}" alt="" height="200" width="250">
                            <button type="submit">Удалить фото</button>

                        </form>



                </div>

            </div>
        </div>
    </div>

@endsection



