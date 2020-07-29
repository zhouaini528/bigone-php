<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bigone\BigoneSpot;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$bigone=new BigoneSpot($key,$secret);

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

//Account
try {
    $result=$bigone->privates()->getAccounts();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->privates()->getAccount([
        'asset_symbol'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Order
try {
    $result=$bigone->privates()->postOrders([
        'asset_pair_name'=>'BTC-USDT',
        'side'=>'BID',
        'price'=>'5000',
        'amount'=>'1',
        'type'=>'LIMIT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->privates()->getOrders([
        'asset_pair_name'=>'BTC-USDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->privates()->getOrder([
        'id'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->privates()->postOrdersCancel([
        'id'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}



?>
