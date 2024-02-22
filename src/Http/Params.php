<?php

namespace Oyta\OytaNg\Http;

class Params
{
    public static function param($param)
    {
        $data = [
            //游戏平台 https://wiki.neapi.com/doku.php?id=%E6%B8%B8%E6%88%8F%E5%B9%B3%E5%8F%B0
            'platType'=> isset($param['platType']) ? $param['platType'] : null,
            //玩家账号，长度限制 5-11 位 小写字母 + 数字组合
            'playerId'=> isset($param['playerId']) ? $param['playerId'] : null,
            //货币代码，CNY:人民币，USD:美元，HKD:港币，PHP:菲律宾比索
            'currency'=> isset($param['currency']) ? $param['currency'] : null,
            //游戏类型，（1:视讯、2:老虎机、3:彩票、4:体育、5:电竞、6:捕鱼、7:棋牌）
            'gameType'=> isset($param['gameType']) ? $param['gameType'] : null,
            //游戏语言，默认简体中文
            'lang'=> isset($param['lang']) ? $param['lang'] : null,
            //游戏代码，默认游戏大厅
            'gameCode'=> isset($param['gameCode']) ? $param['gameCode'] : null,
            //游戏退出时跳转地址
            'returnUrl'=> isset($param['returnUrl']) ? $param['returnUrl'] : null,
            //终端类型，device1:电脑网页版、device2:手机网页版  https://wiki.neapi.com/doku.php?id=%E7%BB%88%E7%AB%AF%E7%B1%BB%E5%9E%8B
            'ingress'=> isset($param['ingress']) ? $param['ingress'] : null,
            //彩票盘口，A:(默认)、B、C，仅IG彩票和SGWin彩票可选
            'oddsType'=> isset($param['oddsType']) ? $param['oddsType'] : null,
            //订单号，多笔订单号以,分隔
            'orderIds'=> isset($param['orderIds']) ? $param['orderIds'] : null,
            //页码，默认第1页，按订单更新时间正序返回数据
            'pageNo'=> isset($param['pageNo']) ? $param['pageNo'] : null,
            //页容量，默认200，最大2000
            'pageSize'=> isset($param['pageSize']) ? $param['pageSize'] : null,
            //订单更新时间 UTC +8 开始，时间格式：“yyyy-MM-dd HH:mm:ss”
            'startTime'=> isset($param['startTime']) ? $param['startTime'] : null,
            //订单更新时间 UTC +8 结束，时间格式：“yyyy-MM-dd HH:mm:ss”
            'endTime'=> isset($param['endTime']) ? $param['endTime'] : null,
            //转换金额，支持两位小数，最小金额1
            'amount'=> isset($param['amount']) ? $param['amount'] : null,
            //转换类型，1:转入、2:转出
            'type'=> isset($param['type']) ? $param['type'] : null,
            //订单号，16-32 位字母 + 数字组合，商户平台传过来要保证唯一性
            'orderId'=> isset($param['orderId']) ? $param['orderId'] : null,
            ];
        return $data;
    }
}