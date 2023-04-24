<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function index()
    {
        $all_ads = new Ad();
  
        if(isset(request()->cat)){
            $all_ads = Ad::whereHas('category', function($query){$query->whereName(request()->cat);} );
        }

        if(isset(request()->type)){
            $type = (request()->type == "lower")? 'asc' : 'desc';
            $all_ads = $all_ads->orderBy('price', $type);
        }

        $all_ads = $all_ads->get();
        $all_cats = Category::all();
        return view('welcome', compact('all_cats', 'all_ads'));
    }

    public function singleAd($id)
    {
        $singleAd = Ad::find($id);
        
        if(auth()->user()==null){
            $singleAd->increment('views');
        }
        else{
                if(auth()->user()->id != $singleAd->user_id){
                    $singleAd->increment('views'); }
           }   
        return view('singleAd', compact('singleAd'));
    }

    public function sendMessage(Request $request, $id)
    {
        $ad = Ad::find($id);
        $ad_owner = $ad->user;

        $new_msg = new Message();
        $new_msg->text = $request->msg;
        $new_msg->sender_id = Auth::user()->id;
        $new_msg->reciever_id = $ad_owner->id;
        $new_msg->ad_id = $ad->id;

        $new_msg->save();

        return redirect()->back()->with('message', 'Poruka poslata!');
    }
}