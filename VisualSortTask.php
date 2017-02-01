<?php

namespace MainBundle\Factory;


class VisualSortTask extends AbstractSortTask
{
private $category;
private $title;

public function __construct(){
    $this->category = 'Public documents';
    $this->title = 'Coding web tech';
}
    public function getCategory(){
        return $this->category;
    }
    public function getTitle(){
        return  $this->title;
    }

}