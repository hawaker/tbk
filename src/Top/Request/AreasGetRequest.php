<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.areas.get request
 * 
 * @author auto create
 * @since 1.0, 2017.10.17
 */
class AreasGetRequest extends RequestBase {

    /**
     * 需返回的字段列表.可选值:Area 结构中的所有字段;多个字段之间用","分隔.如:id,type,name,parent_id,zip.
     * */
    private $fields;

    public function setFields($fields) {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields() {
        return $this->fields;
    }

    public function getApiMethodName() {
        return "taobao.areas.get";
    }

    public function check() {
        RequestCheckUtil::checkNotNull($this->fields, "fields");
    }

}
