<?php
use App\Model\Setting;


if (!function_exists('setting')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function setting($name,$default=null)
    {
        return Setting::getByName($name,$default);
    }
}
