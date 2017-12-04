<?php

namespace Top\Request;

use Top\MethodNotExistsException;
use Top\RequestCheckUtil;

abstract class RequestBase implements RequestInterface {

    protected $apiParas = [];
    protected $notAllowNull = [];

    public function getApiMethodName() {
        return $this->getApiUrl();
    }

    public function getApiParas() {
        return $this->apiParas;
    }

    public function check() {
        foreach ($this->getNotAllowNullProperty() as $value) {
            RequestCheckUtil::checkNotNull($this->$value, $value);
        }
    }

    protected function getNotAllowNullProperty() {
        return $this->notAllowNull;
    }

    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function __call($name, $arguments) {
        $todo = substr($name, 0, 3);
        $property = $this->__fengToSnack(substr($name, 3));
        $exists = property_exists(static::class, $property);
        if ($todo == 'set') {
            if ($exists) {
                $this->apiParas[$property] = (string)$arguments[0];
            }
            return $this;
        } else if ($todo == 'get') {
            if ($exists) {
                return $this->apiParas[$property];
            }
        }
        throw new MethodNotExistsException("class " . __CLASS__ . " doesn't exists method:" . $name . "!");
    }

    private function __fengToSnack($name) {
        return strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '_', $name));
    }

    private function getApiUrl() {
        $class_name = __CLASS__;
        $name = substr($class_name, 0, -7);
        $api_name = "taobao." . strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '.', $name));
        return $api_name;
    }

}
