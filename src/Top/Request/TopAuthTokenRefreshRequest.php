<?php

namespace Top\Request;

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
    protected $refresh_token;
    protected $notAllowNull = ['refresh_token'];

}
