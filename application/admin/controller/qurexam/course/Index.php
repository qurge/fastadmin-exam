<?php

namespace app\admin\controller\qurexam\course;

use app\common\controller\Backend;

class Index extends Backend
{
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\qurexam\course\CourseModel();
        $this->view->assign("statusList", $this->model->getStatusList());
    }
}
