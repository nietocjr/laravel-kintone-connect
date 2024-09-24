<?php

namespace nietocjr\LaravelKintoneConnect;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class LaravelKintoneConnect
{
    public function __construct() {}

    // public static function setFieldValue(string $objectName, string $objectValue, string $fieldName, string $fieldValue)
    // {
    //     // Todo
    //     // $kintoneId = self::selectKintoneId($objectName, $objectValue);
    //     // if($kintoneId === null){
    //     //     return null;
    //     // }
    //     return self::updateField($objectName, $objectValue, $fieldName, $fieldValue);
    // }

    // public static function selectKintoneId(string $searchParameter, string $searchValue)
    // {
    //     $query = $searchParameter . ' = "' . $searchValue . '"';
    //     $fields = [
    //         'app' => Config::get('kintone-connect.kintone_app_id'),
    //         'query' => $query,
    //     ];

    //     $response = self::request($fields, 'get', true);

    //     if (empty($response) || ! isset($response[0])) {
    //         return null;
    //     }

    //     return $response[0]['$id']['value'];
    // }

    public static function updateByField(string $field, string $value, string $param, string|array $data)
    {
        $requestData = [
            'app' => Config::get('kintone-connect.lkc_app_id'),
            'updateKey' => [
                'field' => $field,
                'value' => $value,
            ],
            'record' => [
                $param => [
                    'value' => $data,
                ],
            ],
        ];

        return self::request($requestData, 'put');
    }

    private static function request(array $requestData, string $method, bool $multi = false): string|bool
    {
        $url = 'https://'.Config::get('kintone-connect.lkc_domain').'.cybozu.com/k/v1/';
        if ($multi) {
            $resKey = 'records';
        } else {
            $resKey = 'record';
        }
        $url .= $resKey.'.json';

        $header = [
            'X-Cybozu-API-Token' => Config::get('kintone-connect.lkc_token'),
        ];

        $response = Http::withHeaders($header)->$method($url, $requestData);

        if (! $response->ok()) {
            return $response->object()->message;
        }

        return true;

        // TODO
        // return $response->json();
        // $response = json_decode($response, true);
        // if (array_key_exists($resKey, $response)) {
        //     $return = $response[$resKey];
        // } else {
        //     $return = $response;
        // }

        // return $return;
    }
}
