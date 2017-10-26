<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurwaSender extends Model
{

    public static $app_id;
    public static $auth_key;


    static function sendPush($message = 'Kurwa!', $title = 'Kurwa!', $segments = ['All']){

        $app_id = (static::$app_id) ? (static::$app_id) : config('onesignal.app_id');
        $auth_key = (static::$auth_key) ? (static::$auth_key) : config('onesignal.auth_key');

        $content = [
            'en' => $message
        ];

        $headings = [
            'en' => $title
        ];

        $fields = array(
            'app_id' => $app_id,
            'included_segments' => $segments,
            'contents' => $content,
            'headings' => $headings
        );

        $fields = json_encode($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            "Authorization: Basic $auth_key"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    static function setConfig($app_id, $auth_key){
        static::$app_id = $app_id;
        static::$auth_key = $auth_key;
    }

}
