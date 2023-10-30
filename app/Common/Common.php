<?php

namespace App\Common;

class Common
{
    /*===== ALERT VARIABLES & METHOD =====*/
    const  ALERT_TYPE_ERROR = "error";
    const  ALERT_TYPE_WARNING = "warning";
    const  ALERT_TYPE_SUCCESS = "success";
    const  ALERT_TYPE_INFO = "info";

    const ALERT_MESSAGE_TEXT = "message";
    const ALERT_TYPE_TEXT = "type";

    const ALERT_TYPE_LIST = [
        "error" => self::ALERT_TYPE_ERROR,
        "warning" => self::ALERT_TYPE_WARNING,
        "success" => self::ALERT_TYPE_SUCCESS,
        "info" => self::ALERT_TYPE_INFO,
    ];

    /**
     * @param string $type
     * @return bool
     */
    public static function isTypeError(string $type): bool
    {
        return $type == self::ALERT_TYPE_ERROR;
    }

    /**
     * @param string $type
     * @return bool
     */
    public static function isTypeWarning(string $type): bool
    {
        return $type == self::ALERT_TYPE_WARNING;
    }

    /**
     * @param string $type
     * @return bool
     */
    public static function isTypeSuccess(string $type): bool
    {
        return $type == self::ALERT_TYPE_SUCCESS;
    }

    /**
     * @param string $type
     * @return bool
     */
    public static function isTypeInfo(string $type): bool
    {
        return $type == self::ALERT_TYPE_INFO;
    }

}
