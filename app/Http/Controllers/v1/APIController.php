<?php
namespace App\Http\Controllers\v1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Review;
use JWTAuth;
class APIController extends Controller
{

    public function products(Request $request)
    {
        $prod = Product::get();

        foreach ($prod as $p){
            $p->reviews = Review::where('idprod',$p->id)->get();
        }
        return response()->json(['result'=>$prod]);
    }


}