<?php
namespace MainBundle\Factory;

class ProgrammingTaskFactoryMethod extends AbstractFactoryMethod{
private $sort = "programming";
    public function makeTask($param){
        $task = NUll;
        switch($param){
            case "complete":
                $task = new completedTask;
                break;
            case "current":
                $task = new developTask;
                break;
            default :
                $task = new unsortedTask;
                break;
        }
        return $task;
    }
}