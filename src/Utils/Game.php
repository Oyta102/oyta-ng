<?php

namespace Oyta\OytaNg\Utils;

use Oyta\OytaNg\Http\Respone;
use Oyta\OytaNg\Http\Rand;
use Oyta\OytaNg\Http\Params;

class Game
{
    private static $sn;
    private static $key;
    private static $uri='https://ap.api-bet.net';
    
    public static function common($sn,$key){
        self::$sn = $sn;
        self::$key = $key;
    }
    
    public static function tophead(){
        $rand = Rand::randing();
        $sign = md5($rand.self::$sn.self::$key);
        $hade = array(
            'Content-Type'=>'application/json',
            'sign'=>$sign,
            'sn'=>self::$sn,
            'random'=>$rand
            );
        return $hade;
    }
    
    //创建玩家
    public static function creates($param){
        $data = Params::param($param);
        $url = '/api/server/create';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //登陆游戏
    public static function signgame($param){
        $data = Params::param($param);
        $url = '/api/server/gameUrl';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //试玩游戏
    public static function gamedemo($param){
        $data = Params::param($param);
        $url = '/api/server/demoUrl';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //查询余额
    public static function usebalan($param){
        $data = Params::param($param);
        $url = '/api/server/balance';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //一键查询
    public static function balanall($param){
        $data = Params::param($param);
        $url = '/api/server/balanceAll';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //一键回收
    public static function transall($param){
        $data = Params::param($param);
        $url = '/api/server/transferAll';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //投注订单查询 每分钟不能超过一次
    public static function recorder($param){
        $data = Params::param($param);
        $url = '/api/server/recordOrder';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //实时游戏性记录
    public static function recall($param){
        $data = Params::param($param);
        $url = '/api/server/recordAll';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //历史记录
    public static function rechistor($param){
        $data = Params::param($param);
        $url = '/api/server/recordHistory';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //额度转换
    public static function transfers($param){
        $data = Params::param($param);
        $url = '/api/server/transfer';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //额度转换状态查询
    public static function transtatus($param){
        $data = Params::param($param);
        $url = '/api/server/transferStatus';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //获取游戏代码
    public static function gamecode($param){
        $data = Params::param($param);
        $url = '/api/server/gameCode';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    //查询商户余额
    public static function quotas($param){
        $data = Params::param($param);
        $url = '/api/server/quota';
        $res = self::dolorst($url,$data);
        return $res;
    }
    
    public static function dolorst($url,$data){
        $urls = self::$uri.$url;
        return Respone::post($urls,$data,self::tophead());
    }
}