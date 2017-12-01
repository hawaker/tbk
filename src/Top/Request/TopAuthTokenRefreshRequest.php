<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.top.auth.token.refresh request
 * 
 * @author auto create
 * @since 1.0, 2015.08.20
 */
class TopAuthTokenRefreshRequest extends RequestBase {

    /**
     * grantType==refresh_token 时需要
     * */
    private $refreshToken;

    public function setRefreshToken($refreshToken) {
        $this->refreshToken = $refreshToken;
        $this->apiParas["refresh_token"] = $refreshToken;
    }

    public function getRefreshToken() {
        return $this->refreshToken;
    }

    public function getApiMethodName() {
        return "taobao.top.auth.token.refresh";
    }

    public function check() {
        RequestCheckUtil::checkNotNull($this->refreshToken, "refreshToken");
    }

}
