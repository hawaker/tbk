<?php

namespace Top\Request;

/**
 * TOP API: taobao.topats.task.delete request
 * 
 * @author auto create
 * @since 1.0, 2014.03.27
 */
class TopatsTaskDeleteRequest extends RequestBase {

    /**
     * 需要取消的任务ID
     * */
    protected $task_id;
    protected $notAllowNull = ['task_id'];

}
