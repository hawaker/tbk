<?php

namespace Top\Request;

/**
 * TOP API: taobao.top.auth.token.create request
 * 
 * @author auto create
 * @since 1.0, 2016.04.15
 */
class TopAuthTokenCreateRequest extends RequestBase {

    /**
     * 授权code，grantType==authorization_code 时需要
     * */
    protected $code;

    /**
     * 与生成code的uuid配对
     * */
    protected $uuid;
    protected $notAllowNull = ['code'];

}
