<?php

namespace Top\Request;

/**
 * TOP API: taobao.wireless.share.tpwd.create request
 * 
 * @author auto create
 * @since 1.0, 2017.10.12
 */
class WirelessShareTpwdCreateRequest extends RequestBase {

    /**
     * 口令参数
     * */
    private $tpwdParam;

    public function setTpwdParam($tpwdParam) {
        $this->tpwdParam = $tpwdParam;
        $this->apiParas["tpwd_param"] = $tpwdParam;
    }

    public function getTpwdParam() {
        return $this->tpwdParam;
    }

    public function getApiMethodName() {
        return "taobao.wireless.share.tpwd.create";
    }

}
