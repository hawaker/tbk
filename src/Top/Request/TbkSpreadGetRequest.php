<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.spread.get request
 * 
 * @author auto create
 * @since 1.0, 2017.06.17
 */
class TbkSpreadGetRequest extends RequestBase {

    /**
     * 请求列表，内部包含多个url
     * */
    private $requests;

    public function setRequests($requests) {
        $this->requests = $requests;
        $this->apiParas["requests"] = $requests;
    }

    public function getRequests() {
        return $this->requests;
    }

    public function getApiMethodName() {
        return "taobao.tbk.spread.get";
    }

}
