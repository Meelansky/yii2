<?php

namespace console\controllers;

use common\rbac\StudentRule;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit() {
        $auth = Yii::$app->authManager;

        $auth->removeAll();

        $admin = $auth->createRole('admin');
        $student = $auth->createRole('student');

        $auth->add($admin);
        $auth->add($student);

        $studentRule =new StudentRule();
        $auth->add($studentRule);

        $viewAdminPage = $auth->createPermission('viewAdminPage');
        $viewAdminPage->description = 'Просмотр админки';

        $updateCard = $auth->createPermission('updateCard');
        $updateCard->description = 'Редактирование карточки';

        $updateOwnCard = $auth->createPermission('updateOwnCard');
        $updateOwnCard->description = 'Редактирование своей карточки';
        $updateOwnCard->ruleName = $studentRule->name;

        $deleteCard = $auth->createPermission('deleteCard');
        $deleteCard->description = 'Удаление карточки';

        $viewCard = $auth->createPermission('viewCard');
        $viewCard->description = 'Просмотр карточки';

        $auth->add($viewAdminPage);
        $auth->add($updateCard);
        $auth->add($deleteCard);
        $auth->add($viewCard);
        $auth->add($updateOwnCard);

        $auth->addChild($admin, $viewAdminPage);
        $auth->addChild($admin, $updateCard);
        $auth->addChild($admin, $deleteCard);
        $auth->addChild($admin, $viewCard);

        $auth->addChild($student,$viewCard);
        $auth->addChild($student,$updateOwnCard);

        //role for test users
        $auth->assign($admin, 1);
        $auth->assign($student, 2);
        $auth->assign($student, 3);
        $auth->assign($student, 4);
    }
}
