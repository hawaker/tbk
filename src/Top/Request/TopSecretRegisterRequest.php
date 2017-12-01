<?php

namespace Top\Request;

/**
 * TOP API: taobao.top.secret.register request
 * 
 * @author auto create
 * @since 1.0, 2016.08.16
 */
class TopSecretRegisterRequest extends RequestBase {

    /**
     * 用户id，保证唯一
     * */
    private $userId;

    public function setUserId($userId) {
        $this->userId = $userId;
        $this->apiParas["user_id"] = $userId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getApiMethodName() {
        return "taobao.top.secret.register";
    }

}
