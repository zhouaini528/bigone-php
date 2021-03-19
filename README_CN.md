### 建议优先阅读官方文档

官方文档地址 [API3](https://open.bigonezh.com/docs/authentication.html)

所有的接口方式初始化与bigone提供的接口方式一样，详细请看[src/api](https://github.com/zhouaini528/bigone-php/tree/master/src/Api)

大部分的接口已经完成，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[English Document](https://github.com/zhouaini528/bigone-php/blob/master/README.md)

QQ交流群：668421169

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php) 支持[Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README_CN.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) 支持[Websocket](https://github.com/zhouaini528/okex-php/blob/master/README_CN.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) 支持[Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README_CN.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) 支持[Websocket](https://github.com/zhouaini528/binance-php/blob/master/README_CN.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**如果没有找到你想要的交易所SDK你可以告诉我，我来加入它们。**

#### 安装方式
```
composer require linwj/bigone
```

支持更多的请求设置
```php
$bigone=new BigoneSpot();

//You can set special needs
$bigone->setOptions([
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

### 现货公共访问 API

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

### 现货私有访问 API

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

[More Test](https://github.com/zhouaini528/bitone-php/tree/master/tests/spot)

[More Api](https://github.com/zhouaini528/bitone-php/tree/master/src/Api/Spot)


### 合约共有访问 API

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

### 合约私有访问 API

```php
$bigone=new BigoneContract($key,$secret);

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

[More Test](https://github.com/zhouaini528/bitone-php/tree/master/tests/contract)

[More Api](https://github.com/zhouaini528/bitone-php/tree/master/src/Api/Contract)


