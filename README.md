#Aspose Cloud for Laravel

This package allows you to work with Aspose Cloud SDK in your Laravel applications quickly and easily. 


Installation
----------------------------------

Add the following line to your composer.json file.

<pre>
{
    require: {
        "aspose/cloud-laravel": "dev-master"
    }
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
php artisan config:publish aspose/cloud
</pre>

Edit the new config file in the config/packages/aspose/cloud and enter your data.

Usage
----------------------------------

Anywhere in your application when you need to access class, just do:
<pre>
Aspose::get($moduleName, $className, $fileName);
</pre>

This will return you object of class and you can access properties and methods of class.
