<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.uatm.event.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.29
 */
class TbkUatmEventGetRequest extends RequestBase {

    /**
     * 需要返回的字段列表，不能为空，字段名之间使用逗号分隔
     * */
    protected $fields;

    /**
     * 默认1，第几页，从1开始计数
     * */
    protected $page_no;

    /**
     * 默认20,  页大小，即每一页的活动个数
     * */
    protected $page_size;
    protected $notAllowNull = ['fields'];

}
