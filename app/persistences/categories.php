<?php

function getAllCategories()
{
    $api_url = 'https://fakestoreapi.com/products/categories';

    return file_get_contents($api_url);
}

function getCategoryProducts($category)
{
    $decoded = html_entity_decode($category);
    $encoded = rawurlencode($decoded);
    $api_url = "https://fakestoreapi.com/products/category/" . "$encoded";

    return file_get_contents($api_url);
}