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

    protected $site_id;
    protected $adzone_name;
    protected $notAllowNull = ['site_id', 'adzone_name'];

}
