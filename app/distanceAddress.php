<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distanceAddress extends Model
{
    function getDistance($addressFrom, $addressTo, $unit = ''){
        // Google API key
        $apiKey = 'AIzaSyDrE2W81RzSSNb-tw22IOlOS_scVXYVEnY';
        
        // Change address format
        $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
        $formattedAddrTo     = str_replace(' ', '+', $addressTo);
        // Yêu cầu API mã hóa địa lý với địa chỉ bắt đầu
        $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($formattedAddrFrom) . '&sensor=false&key=' . $apiKey);
        $outputFrom = json_decode($geocodeFrom);
        if(!empty($outputFrom->error_message)){
            return $outputFrom->error_message;
        }
        
        // Yêu cầu API mã hóa địa lý với địa chỉ kết thúc
        $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($formattedAddrTo) . '&sensor=false&key=' . $apiKey);
        $outputTo = json_decode($geocodeTo);
        if(!empty($outputTo->error_message)){
            return $outputTo->error_message;
        }
        
        // Nhận vĩ độ và kinh độ từ dữ liệu địa lý
        $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
        $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
        $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
        $longitudeTo    = $outputTo->results[0]->geometry->location->lng;
        
        // Tính khoảng cách giữa vĩ độ và kinh độ
        $theta    = $longitudeFrom - $longitudeTo;
        $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
        $dist    = acos($dist);
        $dist    = rad2deg($dist);
        $miles    = $dist * 60 * 1.1515;
        
        // Chuyển đổi đơn vị và khoảng cách trả về
        $unit = strtoupper($unit);
        if($unit == "K"){
            return round($miles * 1.609344, 2).' km';
        }elseif($unit == "M"){
            return round($miles * 1609.344, 2).' meters';
        }else{
            return round($miles, 2).' miles';
        }
    }
}
