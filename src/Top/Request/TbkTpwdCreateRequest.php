<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.tpwd.create request
 * 
 * @author auto create
 * @since 1.0, 2017.08.23
 */
class TbkTpwdCreateRequest extends RequestBase {

    /**
     * 扩展字段JSON格式
     * */
    protected $ext;

    /**
     * 口令弹框logoURL
     * */
    protected $logo;

    /**
     * 口令弹框内容
     * */
    protected $text;

    /**
     * 口令跳转目标页
     * */
    protected $url;

    /**
     * 生成口令的淘宝用户ID
     * */
    protected $user_id;
    protected $notAllowNull = ['text', 'url'];

}
