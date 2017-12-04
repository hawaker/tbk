<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Top\Request;

/**
 * Description of TbkContentGetRequest
 *
 * @author V
 */
class TbkContentGetRequest extends RequestBase {

    public $adzone_id;
    public $type;
    public $before_timestamp;
    public $count;
    public $cid;
    public $image_width;
    public $image_height;
    public $notAllowNull = ['adzone_id'];

}
