<?php
/**
 * Created by PhpStorm.
 * User: Irfan
 * Date: 28/12/17
 * Time: 20.34
 */

namespace app\models;


use yii\base\Model;

class FormDokterAsUser extends Model
{
    public $id_user;
    public $id_dokter;

    public function rules()
    {
        return [
            [['id_user','id_dokter'], 'integer']
        ];
    }
}