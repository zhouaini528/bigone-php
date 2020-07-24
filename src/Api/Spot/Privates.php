<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\Spot;

use Lin\Bigone\Request;

class Privates extends Request
{
    /**
     *GET /viewer/accounts
     * */
    public function getAccounts(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/accounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/accounts/{asset_symbol}
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/accounts/'.$data['asset_symbol'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/orders
     * */
    public function getOrders(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/orders/{id}
     * */
    public function getOrder(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/orders/'.$data['id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders
     * */
    public function postOrders(array $data=[]){
        $this->type='POST';
        $this->path='/viewer/orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders/multi
     * */
    public function postOrdersMulti(array $data=[]){
        $this->type='POST';
        $this->path='/viewer/orders/multi';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders/{id}/cancel
     * */
    public function postOrdersCancel(array $data=[]){
        $this->type='POST';
        $this->path='/viewer/orders/'.$data['id'].'/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/orders/cancel
     * */
    public function postOrdersCancels(array $data=[]){
        $this->type='POST';
        $this->path='/viewer/orders/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/trades
     * */
    public function postTrades(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/withdrawals
     * */
    public function getWithdrawals(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/withdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /viewer/withdrawals
     * */
    public function postWithdrawals(array $data=[]){
        $this->type='POST';
        $this->path='/viewer/withdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /viewer/deposits
     * */
    public function getDeposits(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/deposits';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET  /viewer/assets/:asset_symbol/address
     * */
    public function getAssetsAddress(array $data=[]){
        $this->type='GET';
        $this->path='/viewer/assets/'.$data['asset_symbol'].'/address';
        $this->data=$data;
        return $this->exec();
    }
}
