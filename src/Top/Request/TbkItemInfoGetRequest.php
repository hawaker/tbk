<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.item.info.get request
 * 
 * @author auto create
 * @since 1.0, 2017.09.05
 */
class TbkItemInfoGetRequest extends RequestBase {

    /**
     * 需返回的字段列表
     * */
    protected $fields;

    /**
     * 商品ID串，用,分割，从taobao.tbk.item.get接口获取num_iid字段，最大40个
     * */
    protected $num_iids;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     * */
    protected $platform;
    protected $notAllowNull = ['fields', 'num_iids'];

}
