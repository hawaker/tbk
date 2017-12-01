<?php

namespace Top\Request;

use Top\RequestCheckUtil;

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
    private $content;

    /**
     * 1、回传加密信息
     * */
    private $type;

    public function setContent($content) {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function setType($type) {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function getApiMethodName() {
        return "taobao.top.sdk.feedback.upload";
    }

    public function check() {
        RequestCheckUtil::checkNotNull($this->type, "type");
    }

}
