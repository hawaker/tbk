<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Top\Request;

/**
 * Description of TbkAdzoneCreateRequest
 *
 * @author V
 */
class TbkAdzoneCreateRequest extends RequestBase {

    public $site_id;
    public $adzone_name;
    public $notAllowNull = ['site_id', 'adzone_name'];

}
