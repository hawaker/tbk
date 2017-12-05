<?php

namespace Top\Request;

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
    protected $password_content;
    protected $notAllowNull = ['password_content'];

}
