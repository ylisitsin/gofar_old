<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotelSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.hotel_list');
    }


    public function hotel_searchId(Request $request, $hotel_city, $hotel_date_form, $hotel_date_to, $count_people, $currency){
        $count_children = 0;
        $user_ip =  $request->getClientIp();
        $signature = md5('9b575ffceb06357624b5be0f22884ad2:87572:'.$count_people.':'.$hotel_date_form.':'.$hotel_date_to.':'.$count_children.':'.$currency.':'.$user_ip.':'.$hotel_city.':ru:0');
        $return = json_decode(file_get_contents(
            "http://engine.hotellook.com/api/v2/search/start.json?iata=".$hotel_city.'&checkIn='.$hotel_date_form.'&checkOut='.$hotel_date_to.'&adultsCount='.$count_people.'&customerIP='.$user_ip.'&childrenCount='.$count_children.'&lang=ru&currency='.$currency.'&waitForResult=0&marker=87572&signature='.$signature,
            false,
            stream_context_create(array('http' => array('ignore_errors' => true)))
        ), true);
        return $return;
    }

    public function hotel_result(Request $request, $search_id,$limit,$offset,$sortBy,$sortAsc){
        if($sortBy == 'stars'){
            $sortAsc = 0;
        }
        $params = array('searchId' => $search_id, 'limit' => $limit, 'offset' => $offset, 'sortBy' => $sortBy, 'sortAsc' =>$sortAsc);
        ksort($params);
        $signature = md5('9b575ffceb06357624b5be0f22884ad2:87572'. (empty($params) ? '' : ':' . implode(':', $params)));
        $return = json_decode(file_get_contents(
            "http://engine.hotellook.com/api/v2/search/getResult.json?searchId=".$search_id.'&limit='.$limit.'&sortBy='.$sortBy.'&sortAsc='.$sortAsc.'&offset='.$offset.'&marker=87572&signature='.$signature,
            false,
            stream_context_create(array('http' => array('ignore_errors' => true)))
        ), true);

        return $return;
    }

}
