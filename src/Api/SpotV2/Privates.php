<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\SpotV2;

use Lin\Bigone\Request;

class Privates extends Request
{
    /**
     * POST: https://api.Bigoneio.la/api2/1/private/balances
     * */
    public function balances(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/balances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/marginbalances
     * */
    public function marginBalances(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/marginbalances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/fundingbalances
     * */
    public function fundingBalances(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/fundingbalances';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/depositAddress
     * */
    public function depositAddress(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/depositAddress';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/depositsWithdrawals
     * */
    public function depositsWithdrawals(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/depositsWithdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/buy
     * */
    public function buy(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/buy';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/sell
     * */
    public function sell(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/sell';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/batch_orders
     * */
    public function batchOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/batch_orders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/cancelOrder
     * */
    public function cancelOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/cancelOrder';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/cancelOrders
     * */
    public function cancelOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/cancelOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/cancelAllOrders
     * */
    public function cancelAllOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/cancelAllOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/getOrder
     * */
    public function getOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/getOrder';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/openOrders
     * */
    public function openOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/openOrders';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/tradeHistory
     * */
    public function tradeHistory(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/tradeHistory';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/withdraw
     * */
    public function withdraw(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/withdraw';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/get_sub_account_available
     * */
    public function getSubAccountAvailable(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/get_sub_account_available';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/sub_account_transfer
     * */
    public function subAccountTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/sub_account_transfer';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST: https://api.Bigoneio.la/api2/1/private/feelist
     * */
    public function feeList(array $data=[]){
        $this->type='POST';
        $this->path='/api2/1/private/feelist';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://api.Bigoneio.la/api2/1/annlist?page=1
     * */
    public function annList(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/annlist';
        $this->data=$data;
        return $this->exec();
    }
}
