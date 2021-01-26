<?php


namespace frontend\controllers;


use common\models\Currencies;
use yii\data\ActiveDataProvider;
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

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider()
    {
        return new ActiveDataProvider([
            'query' => $this->modelClass::find()->select(['id', 'name'])
        ]);
    }
}