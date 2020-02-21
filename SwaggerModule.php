<?php


namespace successgo\yii\modules\swagger;


use yii\base\Module;

class SwaggerModule extends Module
{
    /**
     * Array of directories to scan for swagger annotation
     *
     * @var array
     */
    public $scanDir;

    public $cache;
}
