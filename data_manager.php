<?php
session_start();
const PRODUCTSKEY = "Products";
initProducts();

function InitProducts(){
    if(!isset($_SESSION[PRODUCTSKEY])){
        $_SESSION[PRODUCTSKEY] = [];
    }
}
 
function GetProducts(): array{
    return $_SESSION[PRODUCTSKEY];

}
function DeleteProduct(int $index){
    array_pop($_SESSION[PRODUCTSKEY]);
}
  
function AddProducts(string $name, string $image, string $desc){
    InitProducts();
    $item = [
        "name"=> $name,
        "image"=> $image,
        "desc"=> $desc
    ];
    array_push($_SESSION[PRODUCTSKEY],$item);
}
?>