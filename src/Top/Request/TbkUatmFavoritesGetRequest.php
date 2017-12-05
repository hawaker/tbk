<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.uatm.favorites.get request
 * 
 * @author auto create
 * @since 1.0, 2016.04.29
 */
class TbkUatmFavoritesGetRequest extends RequestBase {

    /**
     * 需要返回的字段列表，不能为空，字段名之间使用逗号分隔
     * */
    protected $fields;

    /**
     * 第几页，从1开始计数
     * */
    protected $page_no;

    /**
     * 默认20，页大小，即每一页的活动个数
     * */
    protected $page_size;

    /**
     * 默认值-1；选品库类型，1：普通选品组，2：高佣选品组，-1，同时输出所有类型的选品组
     * */
    protected $type;
    protected $notAllowNull = ['fields'];

}
