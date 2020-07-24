<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\SpotV2;

use Lin\Bigone\Request;

class Privates extends Request
{
    /**
     *GET /ping
     * */
    public function ping(array $data=[]){
        $this->type='GET';
        $this->path='/ping';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /one
     * */
    public function one(array $data=[]){
        $this->type='GET';
        $this->path='/one';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /tickers
     * */
    public function tickers(array $data=[]){
        $this->type='GET';
        $this->path='/tickers';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /markets/{market_id}/depth
     * */
    public function depth(array $data=[]){
        $this->type='GET';
        $this->path='/markets/'.$data['market_id'].'/depth';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /markets/{market_id}/trades
     * */
    public function trades(array $data=[]){
        $this->type='GET';
        $this->path='/markets/'.$data['market_id'].'/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /markets
     * */
    public function markets(array $data=[]){
        $this->type='GET';
        $this->path='/markets';
        $this->data=$data;
        return $this->exec();
    }

}
