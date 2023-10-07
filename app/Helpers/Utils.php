<?php 

namespace App\Helpers;
use Carbon\Carbon;

class Utils{

    public static function getAge($birthday){
        $birthday = Carbon::parse($birthday);
        $now = Carbon::now();
        return $birthday->diffInYears($now);
    }

    public static function getDateDiffForHumans($date){
        $date = Carbon::parse($date);
        Carbon::setLocale('fr');
        return $date->diffForHumans();
    }







}
