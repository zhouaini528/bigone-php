<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone\Api\SpotV2;

use Lin\Bigone\Request;

class Publics extends Request
{
    /**
     * GET: https://data.Bigoneio.la/api2/1/pairs
     * */
    public function pairs(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/pairs';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/marketinfo
     * */
    public function marketinfo(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/marketinfo';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/coininfo
     * */
    public function coininfo(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/coininfo';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/marketlist
     * */
    public function marketlist(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/marketlist';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/tickers
     * */
    public function tickers(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/tickers';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/ticker/[CURR_A]_[CURR_B]
     * */
    public function ticker(array $data=[]){
        $this->type='GET';
        $this->path='https://data.Bigoneio.la/api2/1/ticker/'.$data['curr_a'].'_'.$data['curr_b'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/orderBook/[CURR_A]_[CURR_B]
     * */
    public function orderBook(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/orderBook/'.$data['curr_a'].'_'.$data['curr_b'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/tradeHistory/[CURR_A]_[CURR_B]
     * */
    public function tradeHistory(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/tradeHistory/'.$data['curr_a'].'_'.$data['curr_b'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/candlestick2/[CURR_A]_[CURR_B]?group_sec=[GROUP_SEC]&range_hour=[RANGE_HOUR]
     * */
    public function candlestick2(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/candlestick2/'.$data['curr_a'].'_'.$data['curr_b'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/orderBooks_c2c
     * */
    public function orderBooksC2c(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/orderBooks_c2c';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET: https://data.Bigoneio.la/api2/1/orderBook_c2c/[CURR_A]_[CURR_B]
     * */
    public function orderBookC2c(array $data=[]){
        $this->type='GET';
        $this->path='/api2/1/orderBook_c2c/'.$data['curr_a'].'_'.$data['curr_b'];
        $this->data=$data;
        return $this->exec();
    }
}
