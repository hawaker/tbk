<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.shop.get request
 * 
 * @author auto create
 * @since 1.0, 2017.06.17
 */
class TbkShopGetRequest extends RequestBase {

    /**
     * 累计推广商品上限
     * */
    protected $end_auction_count;

    /**
     * 累计推广商品下限
     * */
    protected $start_auction_count;

    /**
     * 淘客佣金比率上限，1~10000
     * */
    protected $end_commission_rate;

    /**
     * 淘客佣金比率下限，1~10000
     * */
    protected $start_commission_rate;

    /**
     * 信用等级上限，1~20
     * */
    protected $end_credit;

    /**
     * 信用等级下限，1~20
     * */
    protected $start_credit;

    /**
     * 店铺商品总数上限
     * */
    protected $end_total_action;

    /**
     * 店铺商品总数下限
     * */
    protected $start_total_action;

    /**
     * 需返回的字段列表
     * */
    protected $fields;

    /**
     * 是否商城的店铺，设置为true表示该是属于淘宝商城的店铺，设置为false或不设置表示不判断这个属性
     * */
    protected $is_tmall;

    /**
     * 第几页，默认1，1~100
     * */
    protected $page_no;

    /**
     * 页大小，默认20，1~100
     * */
    protected $page_size;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     * */
    protected $platform;

    /**
     * 查询词
     * */
    protected $q;

    /**
     * 排序_des（降序），排序_asc（升序），佣金比率（commission_rate）， 商品数量（auction_count），销售总数量（total_auction）
     * */
    protected $sort;
    protected $notAllowNull = ['fields', 'q'];

}
