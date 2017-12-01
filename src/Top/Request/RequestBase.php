<?php

namespace Top\Request;

use Top\RequestCheckUtil;

abstract class RequestBase implements RequestInterface {

    protected $apiParas = [];

    abstract function getApiMethodName();

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
