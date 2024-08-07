<?php

function processProduct($data) {
    return new Product($data['id'], 
                        $data['title'],
                        $data['price'],
                        $data['description'],
                        $data['category'],
                        $data['image'],
                        $data['rating']['rate'],
                        $data['rating']['count']);
}
