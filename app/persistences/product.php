<?php

function getAllProducts(): mixed
{
    $api_url = "https://fakestoreapi.com/products";

return file_get_contents($api_url);
}