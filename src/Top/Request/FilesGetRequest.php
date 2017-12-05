<?php

namespace Top\Request;

/**
 * TOP API: taobao.files.get request
 * 
 * @author auto create
 * @since 1.0, 2017.11.14
 */
class FilesGetRequest extends RequestBase {

    /**
     * 搜索结束时间
     * */
    protected $end_date;

    /**
     * 搜索开始时间
     * */
    protected $start_date;

    /**
     * 下载链接状态。1:未下载。2:已下载
     * */
    protected $status;
    protected $notAllowNull = ['$start_date', '$end_date'];

}
