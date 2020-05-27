Yii2 Advanced Logger
====================
Advanced JSON-logger for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add the following code to the `repositories` section of your `composer.json` file:

```
{
    "url": "https://github.com/white-miku/yii2-alogger.git",
    "type": "git"
}
```
and the fillowing line to the `require` section of your `composer.json` file:

```
"white-miku/yii2-alogger": "*"
```
Then run `composer update`.


Usage
-----

Once the extension is installed, you can use it:

```php
\whitemiku\alogger\Log::info('Text and {variable} to be logged as Info message', ['variable' => $variable]);
```

```php
\whitemiku\alogger\Log::warning('Text and {variable} to be logged as Warning message', ['variable' => $variable]);
```

```php
\whitemiku\alogger\Log::error('Text and {variable} to be logged as Error message', ['variable' => $variable]);
```

The messeges will be logged with tag "System" and in JSON format:
```
{"text":"Text and {variable} tobe logged as Info message,"data":{"type":"web","add":{"variable":"VARIABLE CONTENT"},"user":{"id":1,"login":"White Miku","ip":"USER's IP"},"url":"/index.php?r=controller%2Faction&parameter=1"}}
```