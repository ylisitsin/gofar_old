<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AviaSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.flight_search');
    }


    public function uuid(Request $request,$dist, $date_from, $date_to, $people, $class){
        $explode_dis = explode('-',$dist);
        $dist_from = $explode_dis[0];
        $dist_to = $explode_dis[1];

        $explode_people = explode('-',$people);
        $adults = $explode_people[0];
        $children = $explode_people[1];
        $infants = $explode_people[2];


        $user_id =  $request->getClientIp();


        $segnature = md5("9b575ffceb06357624b5be0f22884ad2:gofar.by:ru:87572:".$adults.":".$children.":".$infants.":".$date_from.":".$dist_to.":".$dist_from.":".$date_to.":".$dist_from.":".$dist_to.":".$class.":".$user_id);
        //echo $segnature;
        $url = "http://api.travelpayouts.com/v1/flight_search";
        $data = '{"signature":"'.$segnature.'",
            "marker":"87572",
            "host":"gofar.by",
            "user_ip":"'.$user_id.'",
            "locale":"ru",
            "trip_class":"'.$class.'",
            "passengers":{
                "adults":"'.$adults.'",
                "children":"'.$children.'",
                "infants":"'.$infants.'"
            },
            "segments":[
                {
                    "origin":"'.$dist_from.'",
                    "destination":"'.$dist_to.'",
                    "date":"'.$date_from.'"
                },
                {
                    "origin":"'.$dist_to.'",
                    "destination":"'.$dist_from.'",
                    "date":"'.$date_to.'"
                }
            ]
        }';


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


        $result = curl_exec($ch);
        $json = json_decode($result, true);
        //$search_id = $json['search_id'];

        return $json;
    }


    public function uuid_to(Request $request,$dist, $date_from,  $people, $class){
        $explode_dis = explode('-',$dist);
        $dist_from = $explode_dis[0];
        $dist_to = $explode_dis[1];

        $explode_people = explode('-',$people);
        $adults = $explode_people[0];
        $children = $explode_people[1];
        $infants = $explode_people[2];


        $user_id =  $request->getClientIp();


        $segnature = md5("9b575ffceb06357624b5be0f22884ad2:gofar.by:ru:87572:".$adults.":".$children.":".$infants.":".$date_from.":".$dist_to.":".$dist_from.":".$class.":".$user_id);

        $url = "http://api.travelpayouts.com/v1/flight_search";
        $data = '{"signature":"'.$segnature.'",
            "marker":"87572",
            "host":"gofar.by",
            "user_ip":"'.$user_id.'",
            "locale":"ru",
            "trip_class":"'.$class.'",
            "passengers":{
                "adults":"'.$adults.'",
                "children":"'.$children.'",
                "infants":"'.$infants.'"
            },
            "segments":[
                {
                    "origin":"'.$dist_from.'",
                    "destination":"'.$dist_to.'",
                    "date":"'.$date_from.'"
                }
            ]
        }';


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


        $result = curl_exec($ch);
        $json = json_decode($result, true);
        //$search_id = $json['search_id'];

        return $json;
    }

    public function search(Request $request,$search_id){

            $ch = curl_init('http://api.travelpayouts.com/v1/flight_search_results?uuid='.$search_id);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $json= curl_exec($ch);
                   // if(isset($json['search_id']) && !empty($json['proposals']) && isset($json['gates_info']) && isset($json['filters_boundary']['price'])){
                        //$big_data[] = $json;
                   // }
            /*if(isset($json[0]['search_id'] )&& !isset($json[0]['proposals']) && !isset($json[0]['gates_info'])){
                break;
            }*/



        return $json;

    }

    public function buy($search_id,$url){
        $ch = curl_init('http://api.travelpayouts.com/v1/flight_searches/'.$search_id.'/clicks/'.$url.'.json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $json= curl_exec($ch);
        $explode = explode('"url": "',$json);
        $exp2 = explode('"',$explode[1]);
        $url = $exp2[0];
        return redirect($url);
    }


}
