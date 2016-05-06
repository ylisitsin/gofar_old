<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Facades\Storage;
use Validator;
use Auth;

class ApiController extends Controller
{
    public function get_city($id){
        $city = DB::table('city')->where('country_id','=',$id)->get();
        $json = json_encode($city);
        return $json;
    }

    public function search_trip(Request $request){

        $country_to = $request->country_to;
        $transport = $request->transport;
        $city_to = $request->city_to;
        $category = $request->category;
        $date = $request->date;
        $price = $request->price;
        $city_from = $request->city_from;
        $orderBy = $request->orderBy;
        $orderType = $request->orderType;
        $offSet = $request->offset;
        $date = date('Y-m-d');
        $v = Validator::make($request->all(),[
            'country_to'=>'max:5|integer',
            'transport'=>'max:5|integer',
            'city_to'=>'max:5|integer',
            'category'=>'max:5|integer',
            'price'=>'max:20|integer',
            'city_from'=>'max:5|integer',
            'orderBy'=>'alpha_dash',
            'date'=>'after:'.$date,
            'orderType'=>'alpha_dash',
            'offset'=>'max:20|integer'
        ]);
        if(!$v->fails()) {
            if ($price === '') {
                $price = 1000000000;
            }
            if ($orderBy === '') {
                $orderBy = 'buy_to';
            }
            if ($orderType === '') {
                $orderType = 'asc';
            }
            if ($offSet === '') {
                $offSet = 0;
            }

            if ($date === '') {
                $date = date('Y-m-d');
            }

            $result = DB::table('price_trip')->leftjoin('compani', 'price_trip.compani_id', '=', 'compani.id')
                ->select('*')
                ->where('price_trip.country_to', 'like', '%' . $country_to . '%')
                ->where('price_trip.transport', 'like', '%' . $transport . '%')
                ->where('price_trip.category', 'like', '%' . $category . '%')
                ->where('price_trip.city_to', 'like', '%' . $city_to . '%')
                ->where('price_trip.price', '<=', $price)
                ->where('price_trip.city_from', 'like', '%' . $city_from . '%')
                ->where('price_trip.trip_date', '>=', $date)
                ->orderBy('price_trip.premium', 'desc')
                ->orderBy('price_trip.' . $orderBy, $orderType)
                ->orderBy('price_trip.update_at', 'desc')
                ->skip($offSet)
                ->take(10)
                ->get();
            $json = json_encode($result);

            return $json;
        }else{
            return '[]';
        }
    }
}
