<?php

namespace Top\Request;

/**
 * TOP API: taobao.top.sdk.feedback.upload request
 * 
 * @author auto create
 * @since 1.0, 2016.08.19
 */
class TopSdkFeedbackUploadRequest extends RequestBase {

    /**
     * 具体内容，json形式
     * */
    protected $content;

    /**
     * 1、回传加密信息
     * */
    protected $type;
    protected $notAllowNull = ['type'];

}
