<?php
/**
 * Created by PhpStorm.
 * User: Marijana Marfi
 * Date: 25/11/2016
 * Time: 12:47 PM
 */

namespace MainBundle\Factory;
use MainBundle\Factory\ProgrammingTaskFactoryMethod;
use MainBundle\Factory\OtherTaskFactoryMethod;

echo tagins("html");
echo tagins("head");
echo tagins("/head");
echo tagins("body");

echo "START TESTING FACTORY METHOD";
echo tagins("br"). tagins("br");

echo "test ProgrammingTaskFactoryMethod" . tagins("br");
$factoryMethodInstance = new ProgrammingTaskFactoryMethod();
testTestFactoryMethod($factoryMethodInstance);

echo tagins("br");

echo "test OtherTaskFactoryMethod" . tagins("br");
$factoryMethodInstance = new OtherTaskFactoryMethod();
testTestFactoryMethod($factoryMethodInstance);

echo tagins("br");
echo tagins("/body");
echo tagins("/html");

function TestFactoryMethod($factoryMethodInstance){
    $phpComplete = $factoryMethodInstance->makeTask("complete");
    echo "complete task title: " . $phpComplete->getTitle.tagins("br");
    echo "complete task category: " . $phpComplete->getCategory.tagins("br");

    $phpCurrent = $factoryMethodInstance->makeTask("current");
    echo "current task title: " . $phpComplete->getTitle.tagins("br");
    echo "current task category: " . $phpComplete->getCategory.tagins("br");

    $phpSport = $factoryMethodInstance->makeTask("sport");
    echo "Ssport task title: " . $phpComplete->getTitle.tagins("br");
    echo "Ssport task category: " . $phpComplete->getCategory.tagins("br");
}
