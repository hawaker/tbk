<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Top\Request;

/**
 * Description of TbkRebateOrderGetRequest
 *
 * @author V
 */
class TbkRebateOrderGetRequest extends RequestBase {

    public $fields;
    public $start_time;
    public $span;
    public $page_no;
    public $page_size;
    public $notAllowNull = ['fields', 'start_time', 'span'];

}
