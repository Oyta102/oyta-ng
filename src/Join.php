<?php

namespace Oyta\OytaNg;
use Oyta\OytaNg\Utils\Game;
class Join
{
    
    //商户配置
    public static function config($sn,$key){
        return Game::common($sn,$key);
    }
    
    //创建玩家
    public static function create($param){
        return Game::creates($param);
    }
    
    //登陆游戏
    public static function gameUrl($param){
        return Game::signgame($param);
    }
    
    //试玩游戏
    public static function demoUrl($param){
        return Game::gamedemo($param);
    }
    
    //查询余额
    public static function balance($param){
        return Game::usebalan($param);
    }
    
    //一键查询
    public static function balanceAll($param){
        return Game::balanall($param);
    }
    
    //一键回收
    public static function transferAll($param){
        return Game::transall($param);
    }
    
    //投注订单查询
    public static function recordOrder($param){
        return Game::recorder($param);
    }
    
    //实时游戏性记录
    public static function recordAll($param){
        return Game::recall($param);
    }
    
    //历史记录
    public static function recordHistory($param){
        return Game::rechistor($param);
    }
    
    //额度转换
    public static function transfer($param){
        return Game::transfers($param);
    }
    
    //额度转换状态查询
    public static function transferStatus($param){
        return Game::transtatus($param);
    }
    
    //获取游戏代码
    public static function gameCode($param){
        return Game::gamecode($param);
    }
    
    //查询商户余额
    public static function quota(){
        return Game::quotas();
    }
    
    
}