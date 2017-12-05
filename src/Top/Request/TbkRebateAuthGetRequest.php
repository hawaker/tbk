<?php

namespace Top\Request;

/**
 * Description of TbkRebateAuthGetRequest
 *
 * @author V
 */
class TbkRebateAuthGetRequest extends RequestBase {

    protected $fields;
    protected $params;
    protected $type;
    protected $notAllowNull = ['fields', 'params', 'type'];

}
