<?php

namespace App\Classes;

class MyCurl
{
    public static function send($method, $url, $data)
    {
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_FORCE_OBJECT));
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                break;
            default:
                if ($data) {
                    $url = sprintf("%s?%s", $url, $data);
                }
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);

        $response = curl_exec($curl);

        // prepare response
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        return array(
            'header' => $header,
            'body' => json_decode($body, true),
            'responseCode' => $httpCode
        );
    }
}
