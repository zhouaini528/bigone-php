<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\Contract;

use Lin\Bigone\Request;

class Publics extends Request
{
    /**
     *GET https://big.one/api/contract/v2/instruments/prices
     * */
    public function getInstrumentsPrices(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/instruments/prices';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://big.one/api/contract/v2/instruments/difference
     * */
    public function getInstrumentsDifference(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/instruments/difference';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://big.one/api/contract/v2/depth@{symbol}/snapshot
     * */
    public function getDepthSnapshot(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/depth@'.$data['symbol'].'/snapshot';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://big.one/api/contract/v2/instruments
     * */
    public function getInstruments(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/instruments';
        $this->data=$data;
        return $this->exec();
    }
}
