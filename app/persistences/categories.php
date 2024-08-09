<?php

function getAllCategories()
{
    $api_url = 'https://fakestoreapi.com/products/categories';

    return file_get_contents($api_url);
}
