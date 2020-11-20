<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function destroy(Ad $ad)
    {
        //Storage::delete($ad->photo);
        $ad->update(['photo' => null]);

        return back();
    }
}
