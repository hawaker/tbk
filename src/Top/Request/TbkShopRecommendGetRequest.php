<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.shop.recommend.get request
 * 
 * @author auto create
 * @since 1.0, 2017.06.17
 */
class TbkShopRecommendGetRequest extends RequestBase {

    /**
     * 返回数量，默认20，最大值40
     * */
    protected $count;

    /**
     * 需返回的字段列表
     * */
    protected $fields;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     * */
    protected $platform;

    /**
     * 卖家Id
     * */
    protected $user_id;
    protected $notAllowNull = ['fields', 'user_id'];

}
