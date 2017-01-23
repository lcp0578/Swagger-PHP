<?php
/**
 * Generate always-up-to-date the swagger documentation dynamically
 * 
 * @author  lcp0578@gmail.com
 * @date    2017/01/23 11:09
 */
/**
 * Usage from the Command Line Interface
 *
 * Generate the swagger documentation to a static json file.
 *
 * php vendor/zircote/swagger-php/bin/swagger src/Controller -o src/Doc/Json
 * 
 *     swagger可执行文件
 *     目标文件目录
 *     存储目录
 *  
 */
require(__DIR__.'/../vendor/autoload.php');
$swagger = \Swagger\scan(__DIR__.'/../src/Controller');
header('Content-Type: application/json');
echo $swagger;