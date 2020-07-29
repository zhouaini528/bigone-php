### It is recommended that you use the test server first

The official address [API3](https://open.bigonezh.com/docs/authentication.html)

All interface methods are initialized the same as those provided by Bigone. See details [src/api](https://github.com/zhouaini528/bigone-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/bigone-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php)

[Okex](https://github.com/zhouaini528/okex-php)

[Huobi](https://github.com/zhouaini528/huobi-php)

[Binance](https://github.com/zhouaini528/binance-php)

[Kucoin/Kumex](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/bitfinex-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   Support V2/V4

[Bigone](https://github.com/zhouaini528/bigone-php)   

#### Installation
```
composer require linwj/gate
```

Support for more request Settings
```php
$gate=new BigoneSpot();

//You can set special needs
$gate->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);
```

### Spot Public API

```php
$bigone=new BigoneSpot();
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
```

### Spot Privates API

```php
$bigone=new BigoneSpot($key,$secret);
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
```

[More Test](https://github.com/zhouaini528/gitone-php/tree/master/tests/spot)

[More Api](https://github.com/zhouaini528/gitone-php/tree/master/src/Api/Spot)


### Contract Public API

```php
$bigone=new BigoneContract();

try {
    $result=$bigone->publics()->getInstrumentsPrices();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->publics()->getInstruments();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->publics()->getDepthSnapshot([
        'symbol'=>'BTCUSD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->publics()->getInstrumentsPrices();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

### Contract Privates API

```php
//Account
try {
    $result=$bigone->privates()->getAccounts();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Order
try {
    $result=$bigone->privates()->postOrders([
        'symbol'=>'BTCUSD',
        'type'=>'LIMIT',
        'side'=>'BUY',
        'size'=>'0.1',
        'price'=>'5000',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->privates()->getOrders([
        'id'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bigone->privates()->deleteOrders([
        'id'=>'xxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//get order list
try {
    $result=$bigone->privates()->getOrders();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

[More Test](https://github.com/zhouaini528/gitone-php/tree/master/tests/contract)

[More Api](https://github.com/zhouaini528/gitone-php/tree/master/src/Api/Contract)
