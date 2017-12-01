<?php

namespace Top\Request;

/**
 * TOP API: taobao.ju.items.search request
 * 
 * @author auto create
 * @since 1.0, 2017.04.14
 */
class JuItemsSearchRequest extends RequestBase {

    /**
     * query
     * */
    private $paramTopItemQuery;

    public function setParamTopItemQuery($paramTopItemQuery) {
        $this->paramTopItemQuery = $paramTopItemQuery;
        $this->apiParas["param_top_item_query"] = $paramTopItemQuery;
    }

    public function getParamTopItemQuery() {
        return $this->paramTopItemQuery;
    }

    public function getApiMethodName() {
        return "taobao.ju.items.search";
    }

}
