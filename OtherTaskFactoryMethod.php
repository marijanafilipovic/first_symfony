<?php
namespace MainBundle\Factory;

class OtherTask extends AbstractFactoryMethod{
    private $sort = "other";
    public function makeTask($param){
        $task = NUll;
        switch($param){
            case "complete":
                $task = new completedTask;
                break;
            case "sport":
                $task = new sportTask;
                break;
            case "family":
                $task = new familyTask;
                break;
            default :
                $task = new unsortedTask;
                break;
        }
        return $task;
    }
}