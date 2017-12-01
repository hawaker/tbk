<?php

namespace Top\Request;

use Top\RequestCheckUtil;

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
    private $me;

    public function setMe($me) {
        $this->me = $me;
        $this->apiParas["me"] = $me;
    }

    public function getMe() {
        return $this->me;
    }

    public function getApiMethodName() {
        return "taobao.tbk.coupon.get";
    }

    public function check() {
        RequestCheckUtil::checkNotNull($this->me, "me");
    }

}
