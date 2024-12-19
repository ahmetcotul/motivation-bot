<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MotivationController extends Controller
{
    //
    public function index(){
        $jsonPath = Storage::disk('local')->path('motivation.json');

        $motivations = json_decode(file_get_contents($jsonPath), true);
        $randomMotivation = $motivations[array_rand($motivations)];
        $giphyApiKey = env('GIPHY_API_KEY');
        $response = Http::get("https://api.giphy.com/v1/gifs/search",[
            'api_key'=>$giphyApiKey,
            'q' => urlencode($randomMotivation),
            'limit'=>1,
        ]);
        $gifUrl = $response->json()['data'][0]['images']['downsized_medium']['url']?? null ;
        return view('motivation',compact('randomMotivation','gifUrl'));
    }
}
