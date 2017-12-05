<?php

namespace Top\Request;

/**
 * TOP API: taobao.top.secret.get request
 * 
 * @author auto create
 * @since 1.0, 2016.08.19
 */
class TopSecretGetRequest extends RequestBase {

    /**
     * 自定义用户id
     * */
    protected $customer_user_id;

    /**
     * 伪随机数
     * */
    protected $random_num;

    /**
     * 秘钥版本号
     * */
    protected $secret_version;
    protected $notAllowNull = ['random_num'];

}
