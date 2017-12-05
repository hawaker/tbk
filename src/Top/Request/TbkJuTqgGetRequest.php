<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.ju.tqg.get request
 * 
 * @author auto create
 * @since 1.0, 2017.06.17
 */
class TbkJuTqgGetRequest extends RequestBase {

    /**
     * 推广位id（推广位申请方式：http://club.alimama.com/read.php?spm=0.0.0.0.npQdST&tid=6306396&ds=1&page=1&toread=1）
     * */
    protected $adzone_id;

    /**
     * 最晚开团时间
     * */
    protected $end_time;

    /**
     * 需返回的字段列表
     * */
    protected $fields;

    /**
     * 第几页，默认1，1~100
     * */
    protected $page_no;

    /**
     * 页大小，默认40，1~40
     * */
    protected $page_size;

    /**
     * 最早开团时间
     * */
    protected $start_time;
    protected $notAllowNull = ['adzone_id', 'end_time', 'fields', 'start_time'];

}
