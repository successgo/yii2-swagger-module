<?php


namespace successgo\yii\modules\swagger\controllers;


use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actions()
    {
        return [
            'index' => [
                'class' => 'light\swagger\SwaggerAction',
                'restUrl' => Url::to(['/swagger/default/api'], true),
            ],
            'api' => [
                'class' => 'light\swagger\SwaggerApiAction',
                'scanDir' => $this->buildScanDir(),
                'cache' => $this->module->cache,
                'cacheKey' => Yii::$app->id . '-swagger-cache',
            ],
        ];
    }

    private function buildScanDir()
    {
        if (!empty($this->module->scanDir)) {
            return $this->module->scanDir;
        }

        return [
            __DIR__ . '/../definitions',
        ];
    }
}
