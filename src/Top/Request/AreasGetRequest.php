<?php

namespace Top\Request;

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
    protected $fields;
    protected $notAllowNull = ['fields'];

}
