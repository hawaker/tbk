<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Top\Request;

/**
 * Description of TbkRebateAuthGetRequest
 *
 * @author V
 */
class TbkRebateAuthGetRequest extends RequestBase {

    private $fields;
    private $params;
    private $type;
    protected $notAllowNull = ['fields', 'params', 'type'];

}
