Yii2 Curler
=======================
Advanced Curl wrapper for Yii2

Why Use It
-----------
*   

Requirements
-----------
*   PHP version 5.4 or later
*   Yii2 frameworks (Optional)



Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist swinetwork/yii2-curler "dev-master"
```

or add

```
"swinetwork/yii2-curler": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use Yii;
use swinetwork\Curler\Curler;

$curler = new Curler();
$simplyGet = $curler->get('http://www.swi.com');
print_r($simplyGet->response);

$curler = new Curler();
$data = array(
    'id' => '1',
    'key' => 'swi',
    'date' => date('Y-m-d H:i:s')
);
$simplyPost = $curler->post('http://www.swi.com', $data);
print_r($simplyPost->response);

```
