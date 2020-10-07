<div class="overlap-category mb-5">
    <div class="row align-items-stretch no-gutters">

@foreach($categories as $category)

        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{url('ads/'.$category->slug)}}" class="popular-category h-100">
                <span class="icon"><span class="{{$category->icon}}"></span></span>
                <span class="caption mb-2 d-block">{{$category->name}}</span>
                <span class="number">{{$category->ad_count}}</span>
            </a>
        </div>

@endforeach

    </div>
</div>
