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
        return array(
            'Content-Type'=>'application/json',
            'sign'=>$sign,
            'sn'=>self::$sn,
            'random'=>$rand
            );
    }
    
    //创建玩家
    public static function creates($param){
        $data = Params::param($param);
        $url = '/api/server/create';
        return self::dolorst($url,$data);
    }
    
    //登陆游戏
    public static function signgame($param){
        $data = Params::param($param);
        $url = '/api/server/gameUrl';
        return self::dolorst($url,$data);
    }
    
    //试玩游戏
    public static function gamedemo($param){
        $data = Params::param($param);
        $url = '/api/server/demoUrl';
        return self::dolorst($url,$data);
    }
    
    //查询余额
    public static function usebalan($param){
        $data = Params::param($param);
        $url = '/api/server/balance';
        return self::dolorst($url,$data);
    }
    
    //一键查询
    public static function balanall($param){
        $data = Params::param($param);
        $url = '/api/server/balanceAll';
        return self::dolorst($url,$data);
    }
    
    //一键回收
    public static function transall($param){
        $data = Params::param($param);
        $url = '/api/server/transferAll';
        return self::dolorst($url,$data);
    }
    
    //投注订单查询 每分钟不能超过一次
    public static function recorder($param){
        $data = Params::param($param);
        $url = '/api/server/recordOrder';
        return self::dolorst($url,$data);
    }
    
    //实时游戏性记录
    public static function recall($param){
        $data = Params::param($param);
        $url = '/api/server/recordAll';
        return self::dolorst($url,$data);
    }
    
    //历史记录
    public static function rechistor($param){
        $data = Params::param($param);
        $url = '/api/server/recordHistory';
        return self::dolorst($url,$data);
    }
    
    //额度转换
    public static function transfers($param){
        $data = Params::param($param);
        $url = '/api/server/transfer';
        return self::dolorst($url,$data);
    }
    
    //额度转换状态查询
    public static function transtatus($param){
        $data = Params::param($param);
        $url = '/api/server/transferStatus';
        return self::dolorst($url,$data);
    }
    
    //获取游戏代码
    public static function gamecode($param){
        $data = Params::param($param);
        $url = '/api/server/gameCode';
        return self::dolorst($url,$data);
    }
    
    //查询商户余额
    public static function quotas(){
        $url = '/api/server/quota';
        return self::dolorst($url,null);
    }
    
    public static function dolorst($url,$data){
        $urls = self::$uri.$url;
        return Respone::post($urls,$data,self::tophead());
    }
}