<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.dg.item.coupon.get request
 * 
 * @author auto create
 * @since 1.0, 2017.06.21
 */
class TbkDgItemCouponGetRequest extends RequestBase {

    /**
     * mm_xxx_xxx_xxx的第三位
     * */
    protected $adzone_id;

    /**
     * 后台类目ID，用,分割，最大10个，该ID可以通过taobao.itemcats.get接口获取到
     * */
    protected $cat;

    /**
     * 第几页，默认：1（当后台类目和查询词均不指定的时候，最多出10000个结果，即page_no*page_size不能超过200；当指定类目或关键词的时候，则最多出100个结果）
     * */
    protected $page_no;

    /**
     * 页大小，默认20，1~100
     * */
    protected $page_size;

    /**
     * 1：PC，2：无线，默认：1
     * */
    protected $platform;

    /**
     * 查询词
     * */
    protected $q;
    protected $notAllowNull = ['adzone_id'];

    public function check() {
        parent::check();
        RequestCheckUtil::checkMaxLength($this->cat, 10, "cat");
    }

}
