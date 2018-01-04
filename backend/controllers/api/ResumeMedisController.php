<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "ResumeMedisController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ResumeMedisController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\ResumeMedis';
}
