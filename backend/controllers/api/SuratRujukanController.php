<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "SuratRujukanController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SuratRujukanController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\SuratRujukan';
}
