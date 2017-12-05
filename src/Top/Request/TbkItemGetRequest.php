<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.item.get request
 * 
 * @author auto create
 * @since 1.0, 2016.07.25
 */
class TbkItemGetRequest extends RequestBase {

    /**
     * 后台类目ID，用,分割，最大10个，该ID可以通过taobao.itemcats.get接口获取到
     * */
    protected $cat;

    /**
     * 折扣价范围上限，单位：元
     * */
    protected $end_price;

    /**
     * 淘客佣金比率下限，如：1234表示12.34%
     * */
    protected $end_tk_rate;

    /**
     * 需返回的字段列表
     * */
    protected $fields;

    /**
     * 是否海外商品，设置为true表示该商品是属于海外商品，设置为false或不设置表示不判断这个属性
     * */
    protected $is_overseas;

    /**
     * 是否商城商品，设置为true表示该商品是属于淘宝商城商品，设置为false或不设置表示不判断这个属性
     * */
    protected $is_tmall;

    /**
     * 所在地
     * */
    protected $itemloc;

    /**
     * 第几页，默认：１
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
     * 排序_des（降序），排序_asc（升序），销量（total_sales），淘客佣金比率（tk_rate）， 累计推广量（tk_total_sales），总支出佣金（tk_total_commi）
     * */
    protected $sort;

    /**
     * 折扣价范围下限，单位：元
     * */
    protected $start_price;

    /**
     * 淘客佣金比率上限，如：1234表示12.34%
     * */
    protected $startTkRate;
    protected $notAllowNull = ['fields'];

}
