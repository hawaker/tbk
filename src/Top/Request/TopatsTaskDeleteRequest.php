<?php

namespace Top\Request;

use Top\RequestCheckUtil;

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
    private $taskId;

    public function setTaskId($taskId) {
        $this->taskId = $taskId;
        $this->apiParas["task_id"] = $taskId;
    }

    public function getTaskId() {
        return $this->taskId;
    }

    public function getApiMethodName() {
        return "taobao.topats.task.delete";
    }

    public function check() {
        RequestCheckUtil::checkNotNull($this->taskId, "taskId");
    }

}
