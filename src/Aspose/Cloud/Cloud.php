<?php 
/**
 * Copyright (c) Aspose 2002-2014. All Rights Reserved.
 *
 * LICENSE: This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 3
 * of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://opensource.org/licenses/gpl-3.0.html>;.
 *
 * @package asposelaravel
 * @author  Masood Anwer <masood.anwer@aspose.com>
 * @link    https://github.com/asposeforcloud/asposelaravel
 */
 
namespace Aspose\Cloud;

use Aspose\Cloud\Common\AsposeApp;
use Aspose\Cloud\Common\Product;
use Aspose\Cloud\Common\Utils;
use Aspose\Cloud\Exception\AsposeCloudException as Exception;
 
class Cloud {
	private $config;
	private $classPath;
		
	public function __construct($config) 
	{
		$this->config = $config;
		Product::$baseProductUri = $this->config['baseUri'];
		AsposeApp::$appSID = $this->config['appSID']; 
		AsposeApp::$appKey = $this->config['appKey'];
	}
	
	public function setOutputLocation($outputLocation) 
	{
		AsposeApp::$outPutLocation = $outputLocation;		
	}
		
	public function get($moduleName, $className, $fileName)
	{			
		if($moduleName == '')
			throw new Exception('Module name not specified');
		if($className == '')
			throw new Exception('Class name not specified');
				
		$classPath = "\Aspose\Cloud\\$moduleName\\$className"; 
		if(class_exists($classPath))
			if($className == 'ChartEditor' || $className == 'Worksheet')
				return new $classPath($fileName, '');	
			else
				return new $classPath($fileName);
		else
			throw new Exception('Module or Class Name is not found');	
	}
}