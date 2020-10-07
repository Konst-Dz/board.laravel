<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAd;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
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
            $path =  $request->file('image')->storeAs('ads_photo',$request->image->getClientOriginalName());
        }
        else{
            $path = null;
        }

        Ad::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => DIRECTORY_SEPARATOR.$path ,
            'subcategory_id'=> $request->category ,
            'user_id' => $request->user()->id,
        ]);

        return back()->with('status','Обьявление успешно отправлено,ожидайте проверки модераторами');



        //dump($request->image->getClientOriginalName());
        //$path =  $request->file('image')->store('ads_photo');
        //$path =  $request->file('image')->storeAs('ads_photo',$request->image->getClientOriginalName());
       //dd($request);
        //$path  = Storage::putFile('ads_photo',$request->file('image'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show($category,$subcategory,Ad $ad)
    {
       return view('ad',['ad'=>$ad]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        //
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
}
