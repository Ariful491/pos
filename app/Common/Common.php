<?php

namespace App\Common;

class Common
{
    /*===== FOR ALERT VARIABLES =====*/
    const  ALERT_TYPE_ERROR = 'error';
    const  ALERT_TYPE_WARNING = 'warning';
    const  ALERT_TYPE_SUCCESS = 'success';
    const  ALERT_TYPE_INFO = 'info';

    const ALERT_MESSAGE_TEXT = "message";


    const ALERT_TYPE_LIST = [
        self::ALERT_TYPE_ERROR,
        self::ALERT_TYPE_WARNING,
        self::ALERT_TYPE_SUCCESS,
        self::ALERT_TYPE_INFO,
    ];

}
