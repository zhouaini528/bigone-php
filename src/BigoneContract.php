<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone;



use Lin\Bigone\Api\Future\Account;
use Lin\Bigone\Api\Future\Contract;
use Lin\Bigone\Api\Future\Market;
use Lin\Bigone\Api\Future\My;
use Lin\Bigone\Api\Future\Order;
use Lin\Bigone\Api\Future\Position;

class BigoneContract
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
    function contract(){
        return new Contract($this->init());
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

    /**
     *
     * */
    function position(){
        return new Position($this->init());
    }
}
