<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\Spot;

use Lin\Bigone\Request;

class Publics extends Request
{
    /**
     *GET /ping
     * */
    public function ping(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/ping';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /asset_pairs/{asset_pair_name}/ticker
     * */
    public function ticker(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/asset_pairs/'.$data['asset_pair_name'].'/ticker';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /asset_pairs/{asset_pair_name}/depth
     * */
    public function depth(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/asset_pairs/'.$data['asset_pair_name'].'/depth';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /asset_pairs/{asset_pair_name}/trades
     * */
    public function trades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/asset_pairs/'.$data['asset_pair_name'].'/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /asset_pairs/{asset_pair_name}/candles
     * */
    public function candles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/asset_pairs/'.$data['asset_pair_name'].'/candles';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /asset_pairs
     * */
    public function assetPairs(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/asset_pairs';
        $this->data=$data;
        return $this->exec();
    }
}
