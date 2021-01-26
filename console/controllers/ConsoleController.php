<?php

namespace console\controllers;


use yii\console\Controller;
use common\models\Currencies;

class ConsoleController extends Controller
{

    public function actionGetCurrencies() {
        $url = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json';
        $data = file_get_contents($url);
        $json = json_decode($data, true);
        foreach($json as $j) {
            $currency = Currencies::find()->where(['id'=>$j['r030']])->one();
            if ( $currency === NULL) {
                $currency = new Currencies();
                $currency->setAttribute('id', $j['r030']);
                $currency->setAttribute('name', $j['cc']);
            }
            $currency->setAttribute('rate', $j['rate']);
            $currency->save();
        }
        return 0;
    }

}