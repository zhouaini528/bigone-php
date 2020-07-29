<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\Spot;

use Lin\Bigone\Request;

class Privates extends Request
{
    protected $authorization=true;

    /**
     *GET /viewer/accounts
     * */
    public function getAccounts(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/accounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/accounts/{asset_symbol}
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/accounts/'.$data['asset_symbol'];
        unset($data['asset_symbol']);

        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/orders
     * */
    public function getOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/orders/{id}
     * */
    public function getOrder(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/orders/'.$data['id'];
        unset($data['id']);

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders
     * */
    public function postOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/viewer/orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders/multi
     * */
    public function postOrdersMulti(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/viewer/orders/multi';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders/{id}/cancel
     * */
    public function postOrdersCancel(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/viewer/orders/'.$data['id'].'/cancel';
        unset($data['id']);

        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders/cancel
     * */
    public function postOrdersCancels(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/viewer/orders/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/trades
     * */
    public function postTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/withdrawals
     * */
    public function getWithdrawals(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/withdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/withdrawals
     * */
    public function postWithdrawals(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/viewer/withdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/deposits
     * */
    public function getDeposits(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/deposits';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET  /viewer/assets/:asset_symbol/address
     * */
    public function getAssetsAddress(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/viewer/assets/'.$data['asset_symbol'].'/address';
        unset($data['asset_symbol']);

        $this->data=$data;
        return $this->exec();
    }
}
