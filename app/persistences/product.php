<?php

function getAllProducts(): mixed
{
    $api_url = "https://fakestoreapi.com/products";

return file_get_contents($api_url);
}

function getProduct($productId): mixed
{
    $encodedId = html_entity_decode($productId);
    $api_url = "https://fakestoreapi.com/products/" . $encodedId;

    return file_get_contents($api_url);
}
