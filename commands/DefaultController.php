<?php

namespace corpsepk\yml\commands;


use yii\console\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $time_start = microtime(true);

        $module = $this->module;
        $data = $module->buildYml();
        if ($module->outputFilePath){
            file_put_contents($module->outputFilePath, $data);
        }

        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "Time: " . gmdate("i:s", $time) . "\n\n";
    }
}