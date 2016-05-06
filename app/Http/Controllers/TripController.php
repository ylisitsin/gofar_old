<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Facades\Storage;
use Validator;
use Auth;

class TripController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function add_trip_tpl(){
        $category = DB::table('category')->select('*')->get();
        $country = DB::table('country')->select('*')->get();
        return view('panel.client.add_trip',['countrys'=>$country,'categorys'=>$category]);

    }

    public function update_trip_tpl($id){
        $user_compani_id = Auth::user()->company_id;
        $compani_id = DB::table('trip')->select('compani_id')->where('id','=',$id)->first();

        if($compani_id->compani_id == $user_compani_id){
            $trip = DB::table('trip')->select('*')->where('id','=',$id)->first();
            $category = DB::table('category')->select('*')->get();
            $country = DB::table('country')->select('*')->get();
            return view('panel.client.update_trip',['trip'=>$trip,'countrys'=>$country,'categorys'=>$category]);
        }else{
            abort(404);
        }
    }

    public function update_trip(Request $request,$id){
        $hot = $request->hot;
        $name = $request->name;
        $category = $request->category;
        $country_to = $request->country_to;
        $city_to = $request->city_to;
        $transport = $request->transport;
        $city_from = $request->city_from;
        $food = $request->food;
        $night = $request->night;
        $hotel = $request->hotel;
        $hotel_start = $request->hotel_start;
        $short_about_trip = $request->short_about_trip;
        $full_about_trip = $request->full_about_trip;

        //dd($request->all());

        $v = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'country_to' => 'required',
            'city_to' => 'required',
            'transport' => 'required',
            'city_from' => 'required',
            'night' => 'required',
            'hotel'=> 'required|max:255',
            'hotel_start' => 'required',
            'short_about_trip' => 'required|max:500',
            'full_about_trip' => 'required|max:30000',
        ]);

        if(!$v->fails()){
            if($hot == '' or $hot == '0'){
                $hot='0';
            }else{
                $hot = '1';
            }

            $country_to_name = DB::table('country')->select('name')->where('id','=',$country_to)->first();
            $city_to_name = DB::table('city')->select('name')->where('id','=',$city_to)->first();
            $city_from_name = DB::table('city')->select('name')->where('id','=',$city_from)->first();
            $category_name = DB::table('category')->select('name')->where('id','=',$category)->first();
            $transport_name = DB::table('transport')->select('name')->where('id','=',$transport)->first();
            $food_name = DB::table('food')->select('name')->where('id','=',$food)->first();

            $country_to_name = $country_to_name->name;
            $city_to_name = $city_to_name->name;
            $city_from_name = $city_from_name->name;
            $category_name = $category_name->name;
            $transport_name = $transport_name->name;
            $food_name = $food_name->name;

            $user_compani_id = Auth::user()->company_id;

            DB::table('trip')->where('id','=',$id)->update(['food_name'=>$food_name,'category_name'=>$category_name,'transport_name'=>$transport_name,'compani_id'=> $user_compani_id,'country_to_name'=>$country_to_name,'city_to_name'=>$city_to_name,'city_from_name'=>$city_from_name,'hot'=>$hot,'name_trip'=>$name,'category'=>$category,'country_to'=>$country_to,'city_to'=>$city_to,'transport'=>$transport,'city_from'=>$city_from,'food'=>$food,'count_night'=>$night,'hotel'=>$hotel,'hotel_star'=>$hotel_start,'short_about_trip'=>$short_about_trip,'full_about_trip'=>$full_about_trip]);


            return redirect('/dashboard/trip/all');

        }else{
            return redirect('/dashboard/trip/update/'.$id);
        }
    }


    public function add_trip(Request $request){
        //$hot = $request->hot;
        $name = $request->name;
        $category = $request->category;
        $country_to = $request->country_to;
        $city_to = $request->city_to;
        $transport = $request->transport;
        $city_from = $request->city_from;
        $food = $request->food;
        $night = $request->night;
        $hotel = $request->hotel;
        $hotel_start = $request->hotel_start;
        $short_about_trip = $request->short_about_trip;
        $full_about_trip = $request->full_about_trip;

        /*
        $date = $request->date;
        $for_the_price = $request->for_the_price;
        $currency = $request->currency;
        $price = $request->price;
        */

        $v = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'country_to' => 'required',
            'city_to' => 'required',
            'transport' => 'required',
            'city_from' => 'required',
            'night' => 'required',
            'hotel'=> 'required|max:255',
            'hotel_start' => 'required',
            'short_about_trip' => 'required|max:500',
            'full_about_trip' => 'required|max:30000'
        ]);

        if(!$v->fails()){
            /*if($hot == '' or $hot == '0'){
                $hot='0';
            }else{
                $hot = '1';
            }*/

            $country_to_name = DB::table('country')->select('name')->where('id','=',$country_to)->first();
            $city_to_name = DB::table('city')->select('name')->where('id','=',$city_to)->first();
            $city_from_name = DB::table('city')->select('name')->where('id','=',$city_from)->first();
            $category_name = DB::table('category')->select('name')->where('id','=',$category)->first();
            $transport_name = DB::table('transport')->select('name')->where('id','=',$transport)->first();
            $food_name = DB::table('food')->select('name')->where('id','=',$food)->first();

            $country_to_name = $country_to_name->name;
            $city_to_name = $city_to_name->name;
            $city_from_name = $city_from_name->name;
            $category_name = $category_name->name;
            $transport_name = $transport_name->name;
            $food_name = $food_name->name;

            $user_compani_id = Auth::user()->company_id;

            $id = DB::table('trip')->insertGetId(['food_name'=>$food_name,'category_name'=>$category_name,'transport_name'=>$transport_name,'compani_id'=> $user_compani_id,'country_to_name'=>$country_to_name,'city_to_name'=>$city_to_name,'city_from_name'=>$city_from_name,'hot'=>'0','name_trip'=>$name,'category'=>$category,'country_to'=>$country_to,'city_to'=>$city_to,'transport'=>$transport,'city_from'=>$city_from,'food'=>$food,'count_night'=>$night,'hotel'=>$hotel,'hotel_star'=>$hotel_start,'short_about_trip'=>$short_about_trip,'full_about_trip'=>$full_about_trip]);

            //DB::table('price_trip')->insert(['trip_id'=>$id,'compani_id'=>$user_compani_id,'for_the_price'=>$for_the_price,'trip_date'=>$date,'currency'=>$currency,'count_night'=>$night,'price'=>$price]);

            return redirect('/dashboard/trip/all');

        }else{
            return redirect('/dashboard/trip/add');
        }

    }


    public function show_all_trip(){
        $user_compani_id = Auth::user()->company_id;
        $res = DB::table('trip')->select('id','name_trip','short_about_trip','visits')->where('compani_id','=',$user_compani_id)->orderBy('id','desc')->get();
        return view('panel.client.all_view',['trips'=>$res]);
    }
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('page.trip.index');
    }

    public function show_trip($id){
        $trip = DB::table('trip')->leftjoin('compani','trip.compani_id','=','compani.id')->select('*')->where('trip.id','=',$id)->get();
        $price_trip = DB::table('price_trip')->select('*')->where('trip_id','=',$id)->get();

        return view('page.trip.trip_detail',['trip'=>$trip,'price_trips'=>$price_trip]);
    }

    public function search_trip(Request $request){
        $categorys = DB::table('category')->select('*')->get();
        $countrys = DB::table('country')->select('*')->get();

        return view('page.trip.trip_search',['countrys'=>$countrys,'categorys'=>$categorys]);
    }

}
