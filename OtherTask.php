<?php


namespace MainBundle\Factory;


class OtherTask extends AbstractSortTask
{
    private $category;
    private $title;
    public function __construct(){
        $this->category = __CLASS__;
        $this->title;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getTitle(){
        return  $this->title;
    }


}