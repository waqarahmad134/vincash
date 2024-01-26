<?php
namespace App\Helpers;
class Helper
{

    public static function testnotification($body,$title,$device_token){
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $token = $device_token;
        $notification = [
            'title' => $title,
            'body' => $body,
            'sound' => true,
        ];
        $fcmNotification = [
            // 'registration_ids' => $token_list
            'to' => $token, //single token
            'notification' => $notification,
        ];
        $headers = [
            'Authorization: key= '.'AAAAB7eIWTg:APA91bGUFGawkOK0n8hX3InIGrPZRPLRN8rr1DW1H5DasT0fTmU2aX5aG0HHE0UjLXueHtH8gt0jvzlLKApo7mI3-dnPy4qu1BYQwjXlIZmZGMbfDtPLioWbJfMvfa-gm8xCXLffjx4U',
            'Content-Type: application/json'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}