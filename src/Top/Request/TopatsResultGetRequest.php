<?php

namespace Top\Request;

/**
 * TOP API: taobao.topats.result.get request
 * 
 * @author auto create
 * @since 1.0, 2016.10.12
 */
class TopatsResultGetRequest extends RequestBase {

    /**
     * 任务ID，创建任务时返回的task_id
     * */
    protected $task_id;
    protected $notAllowNull = ['task_id'];

}
