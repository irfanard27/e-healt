<?php

namespace backend\controllers;

use app\models\Dokter;
use app\models\FormDokterAsUser;

/**
* This is the class for controller "UserController".
*/
class UserController extends \backend\controllers\base\UserController
{
    function actionSetDokterAsUser()
    {
        $model = new FormDokterAsUser;
        if($model->load($_POST)){
            $user = $model->id_user;

            $model = Dokter::findOne($model->id_dokter);
            $model->id_user = $user;
            $model->save();

        }
        return $this->render("set_dokter_as_user",[ 'model'=>$model ]);
    }
}
