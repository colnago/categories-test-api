<?php


namespace frontend\controllers;


use common\models\Currencies;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;

class CurrenciesController extends ActiveController
{
    public $modelClass = Currencies::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['only'] = ['index', 'view'];
        $behaviors['authenticator']['authMethods'] = [
            HttpBearerAuth::class
        ];

        return $behaviors;
    }
}