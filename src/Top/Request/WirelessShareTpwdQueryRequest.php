<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.wireless.share.tpwd.query request
 * 
 * @author auto create
 * @since 1.0, 2017.11.23
 */
class WirelessShareTpwdQueryRequest extends RequestBase {

    /**
     * 淘口令
     * */
    private $passwordContent;

    public function setPasswordContent($passwordContent) {
        $this->passwordContent = $passwordContent;
        $this->apiParas["password_content"] = $passwordContent;
    }

    public function getPasswordContent() {
        return $this->passwordContent;
    }

    public function getApiMethodName() {
        return "taobao.wireless.share.tpwd.query";
    }

    public function check() {
        RequestCheckUtil::checkNotNull($this->passwordContent, "passwordContent");
    }

}
