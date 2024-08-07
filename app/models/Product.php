<?php
class Product{
    private $id;
    private $title;
    private $price;
    private $description;
    private $category;
    private $image_url;
    private $rate;
    private $count_rate;

    public function __construct($id, $title, $price, $description, $category, $image_url, $rate, $count_rate){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->image_url = $image_url;
        $this->rate = $rate;
        $this->count_rate = $count_rate;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getImageUrl(){
        return $this->image_url;
    }
    public function getRate(){
        return $this->rate;
    }
    public function getCount(){
        return $this->count_rate;
    }
}