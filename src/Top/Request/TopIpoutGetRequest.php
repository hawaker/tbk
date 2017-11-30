<?php

namespace Top\Request;

/**
 * TOP API: taobao.top.ipout.get request
 * 
 * @author auto create
 * @since 1.0, 2017.07.31
 */
class TopIpoutGetRequest {

    private $apiParas = array();

    public function getApiMethodName() {
        return "taobao.top.ipout.get";
    }

    public function getApiParas() {
        return $this->apiParas;
    }

    public function check() {
        
    }

    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

}
