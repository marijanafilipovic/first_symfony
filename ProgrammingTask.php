<?php
/**
 * Created by PhpStorm.
 * User: Marijana Marfi
 * Date: 25/11/2016
 * Time: 12:12 PM
 */

namespace MainBundle\Factory;


class ProgrammingTask extends AbstractSortTask
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