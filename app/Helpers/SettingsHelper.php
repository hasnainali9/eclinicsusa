<?php
use App\Models\Setting;
if (!function_exists('GetSettingData')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function GetSettingData($index)
    {
        if(Setting::where('Index',$index)->first()){
            return Setting::where('Index',$index)->first()->value;
        }else{
            return '';
        }
    }
}
