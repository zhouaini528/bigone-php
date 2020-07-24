<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone;

use Lin\Bigone\Api\Spot\Account;
use Lin\Bigone\Api\Spot\Currency;
use Lin\Bigone\Api\Spot\Market;
use Lin\Bigone\Api\Spot\My;
use Lin\Bigone\Api\Spot\Order;

class BigoneSpot
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://api.Bigoneio.ws'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,
            'vision'=>'v4',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function account(){
        return new Account($this->init());
    }

    /**
     *
     * */
    function currency(){
        return new Currency($this->init());
    }

    /**
     *
     * */
    function market(){
        return new Market($this->init());
    }

    /**
     *
     * */
    function my(){
        return new My($this->init());
    }

    /**
     *
     * */
    function order(){
        return new Order($this->init());
    }
}
