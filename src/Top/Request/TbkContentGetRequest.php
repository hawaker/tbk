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

    protected $adzone_id;
    protected $type;
    protected $before_timestamp;
    protected $count;
    protected $cid;
    protected $image_width;
    protected $image_height;
    protected $notAllowNull = ['adzone_id'];

}
