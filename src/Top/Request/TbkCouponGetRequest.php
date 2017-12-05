<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.coupon.get request
 * 
 * @author auto create
 * @since 1.0, 2017.08.25
 */
class TbkCouponGetRequest extends RequestBase {

    /**
     * 带券ID与商品ID的加密串
     * */
    protected $me;
    protected $notAllowNull = ['me'];

}
