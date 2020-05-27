<?php

namespace whitemiku\alogger;

use yii\helpers\Json;
use Yii;

/**
 * This is just an example.
 */
class Log extends \Yii
{
    public static function error($message, $add = array(), $category = 'System')
    {
    	$data['type'] = (php_sapi_name() == 'cli' ? 'console' : 'web');
    	$data['add'] = $add;
    	if ($data['type'] == 'web')
    	{
    		$data['user']['id'] = Yii::$app->user->identity->getId();
    		$data['user']['login'] = Yii::$app->user->identity->login;
    		$data['user']['ip'] = Yii::$app->getRequest()->getUserIP();
    		$data['url'] = Yii::$app->request->url;
    	}
    	$json = Json::encode(['text' => $message, 'data' => $data]);
        parent::error($json, $category);
    }

    public static function warning($message, $add = array(), $category = 'System')
    {
        $data['type'] = (php_sapi_name() == 'cli' ? 'console' : 'web');
        $data['add'] = $add;
        if ($data['type'] == 'web')
    	{
    		$data['user']['id'] = Yii::$app->user->identity->getId();
    		$data['user']['login'] = Yii::$app->user->identity->login;
    		$data['user']['ip'] = Yii::$app->getRequest()->getUserIP();
    		$data['url'] = Yii::$app->request->url;
    	}
    	$json = Json::encode(['text' => $message, 'data' => $data]);
        parent::warning($json, $category);
    }

    public static function info($message, $add = array(), $category = 'System')
    {
        $data['type'] = (php_sapi_name() == 'cli' ? 'console' : 'web');
        $data['add'] = $add;
        if ($data['type'] == 'web')
    	{
    		$data['user']['id'] = Yii::$app->user->identity->getId();
    		$data['user']['login'] = Yii::$app->user->identity->login;
    		$data['user']['ip'] = Yii::$app->getRequest()->getUserIP();
    		$data['url'] = Yii::$app->request->url;
    	}
    	$json = Json::encode(['text' => $message, 'data' => $data]);
        parent::info($json, $category);
    }
}
