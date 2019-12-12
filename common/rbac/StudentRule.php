<?php
namespace common\rbac;

use yii\helpers\VarDumper;
use yii\rbac\Rule;

class StudentRule extends Rule
{
    public $name = 'isOwner';

    public function execute($user, $item, $params)
    {
        return isset($params['student-card']) ? $params['student-card']->student_id === $user : false;
    }
}