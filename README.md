#Aspose Cloud for Laravel

This package allows you to work with Aspose Cloud SDK in your Laravel applications quickly and easily. 


Installation
----------------------------------

Add the following line to your composer.json file.

<pre>
require: {
	"aspose/cloud-sdk-php": "dev-master",        
	"aspose/cloud-laravel": "dev-master"
}
</pre>


Run from terminal.

<pre>
composer update
</pre>


Add package to the list of providers. In config/app.php, add the following line to the providers array.
<pre>
'Aspose\Cloud\CloudServiceProvider',
</pre>

Publish config files from the terminal.
<pre>
php artisan config:publish aspose/cloud-laravel
</pre>

Edit the new config file in the config/packages/aspose/cloud-laravel and enter your data.
<pre>
return array(
	'baseUri' => 'http://api.aspose.com/v1.1',
	'appSID' => '',
	'appKey' => ''
);
</pre>

In config/packages/aspose, rename cloud-laravel to cloud

Usage
----------------------------------

Anywhere in your application when you need to access class, just do:
<pre>
Aspose::get($moduleName, $className, $fileName);
</pre>

This will return you object of class and you can access properties and methods of class.

Please visit [wiki](https://github.com/asposeforcloud/asposelaravel/) for articles and examples.

Start a Free Trail Today
========================

Start a free trial today – all you need is to [sign up](https://cloud.aspose.com/SignUp) with Aspose for Cloud service. Once you have signed up, you are ready to try powerful file processing features offered by Aspose for Cloud.
