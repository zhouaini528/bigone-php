<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bigone\BigoneSpot;

require __DIR__ .'../../../vendor/autoload.php';

$bigone=new BigoneSpot();

//You can set special needs
$bigone->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);

try {
    $result=$bigone->publics()->ping();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->publics()->ticker([
        'asset_pair_name'=>'BTC-USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->publics()->depth([
        'asset_pair_name'=>'BTC-USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->publics()->trades([
        'asset_pair_name'=>'BTC-USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->publics()->candles([
        'asset_pair_name'=>'BTC-USDT',
        'period'=>'day1'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
?>
