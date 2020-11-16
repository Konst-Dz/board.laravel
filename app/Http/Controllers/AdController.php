<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAd;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Concerns\FormatsMessages;
use function GuzzleHttp\Promise\all;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::with(['subcategory','subcategory.category'])->get();

        $categories = Category::withCount('ad')->get();
        return view('listings',['ads' => $ads,'categories' => $categories,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $categories = Category::all()->load('subcategory');
        return view('add',['categories' => $categories,'cities' => $cities ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAd $request)
    {

        if ($request->file('image')){
            $path =  $request->file('image')->store('ads_photo');
        }
        else{
            $path = null;
        }

       $user = Ad::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => $path ,
            'subcategory_id'=> $request->category ,
            'user_id' => $request->user()->id,
        ]);

        $phone = Phone::firstOrCreate(['number' => $request->phone]);
        $user->phones()->attach($phone->id);

        return back()->with('status','Обьявление успешно отправлено,ожидайте проверки модераторами');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show($category,$subcategory,Ad $ad)
    {
        $city = $ad->cities->first()->name;
       return view('ad',['ad'=>$ad,'city'=>$city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        $categories = Category::all();
        $cities = City::all();
        $phone = $ad->phones->first()->number ?? '';
        $cityId = $ad->cities->first()->id;

        return view('edit',compact(['categories','cities','ad','phone','cityId']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        //
    }

    public function destroyPhoto(Ad $ad)
    {

    }
}
