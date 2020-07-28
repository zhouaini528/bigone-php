<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\Contract;

use Lin\Bigone\Request;

class Privates extends Request
{
    /*
     * GET https://big.one/api/contract/v2/accounts
     * */
    public function getAccounts(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/accounts';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * GET https://big.one/api/contract/v2/orders/{id}
     * */
    public function getOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/orders';
        if(isset($data['id'])) $this->path.='/'.$data['id'];

        $this->data=$data;
        return $this->exec();
    }

    /*
     * POST https://big.one/api/contract/v2/orders
     * */
    public function postOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api/contract/v2/orders';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * DELETE https://big.one/api/contract/v2/orders/{id}
     * */
    public function deleteOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/orders/'.$data['id'];
        $this->data=$data;
        return $this->exec();
    }

    /*
     * POST https://big.one/api/contract/v2/orders/batch
     * */
    public function postOrdersBatch(array $data=[]){
        $this->type='POST';
        $this->path='/api/contract/v2/orders/batch';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * DELETE https://big.one/api/contract/v2/orders/batch
     * */
    public function deleteOrdersBatch(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/contract/v2/orders/batch';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * GET https://big.one/api/contract/v2/orders/opening
     * */
    public function getOrdersOpening(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/orders/opening';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * GET https://big.one/api/contract/v2/orders/count
     * */
    public function getOrdersCount(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/orders/count';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * GET https://big.one/api/contract/v2/orders/opening/count
     * */
    public function getOrdersOpeningCount(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/orders/opening/count';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * PUT https://big.one/api/contract/v2/positions/{symbol}/margin
     * */
    public function putPositionsMargin(array $data=[]){
        $this->type='PUT';
        $this->path='/api/contract/v2/positions/'.$data['symbol'].'/margin';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * PUT https://big.one/api/contract/v2/positions/{symbol}/risk-limit
     * */
    public function putPositionsRiskLimit(array $data=[]){
        $this->type='PUT';
        $this->path='/api/contract/v2/positions/'.$data['symbol'].'/risk-limit';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * GET https://big.one/api/contract/v2/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/trades';
        $this->data=$data;
        return $this->exec();
    }

    /*
     * GET https://big.one/api/contract/v2/trades/count
     * */
    public function getTradesCount(array $data=[]){
        $this->type='GET';
        $this->path='/api/contract/v2/trades/count';
        $this->data=$data;
        return $this->exec();
    }
}
