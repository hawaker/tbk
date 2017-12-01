<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Top\Request;

/**
 *
 * @author V
 */
interface RequestInterface {
    public function getApiMethodName();
    public function getApiParas();
    public function check();
    public function putOtherTextParam($key, $value);
}
