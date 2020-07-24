<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Gate\GateContract;

require __DIR__ .'../../../vendor/autoload.php';


$gate=new GateContract();

//You can set special needs
$gate->setOptions([
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
    $result=$gate->market()->getTickers(['settle'=>'btc']);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$gate->market()->getOrderBook([
        'settle'=>'btc',
        'contract'=>'BTC_USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$gate->market()->getTrades([
        'settle'=>'btc',
        'contract'=>'BTC_USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$gate->market()->getCandlesticks([
        'settle'=>'btc',
        'contract'=>'BTC_USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

?>
