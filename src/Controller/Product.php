<?php
namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Validation;
use APP\Utils\Redirect;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message:'Requisição inválida!!!',
        type: 'error'
    );
}

$productname = $_POST["name"];
$productprice=(float)  $_POST["price"];
$productquantity=(float)  $_POST["quantity"];

$error = array();

if(!Validation::validateName($productname)){
    array_push($error, "O nome do produto deve conter ao menos 5 caracteres!!!");
}

if(!Validation::validateNumber($productprice)){
    array_push($error, "O preço do produto deve ser maior que zero!!!");
}

if(!Validation::validateQuantity($productquantity)){
    array_push($error, "A quantidade do produto deve ser maior que zero!!!");
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $product = new Product(
        name: $productname,
        price: $productprice,
        quantity: $productquantity
    );
    // TODO salvar no banco de dados

    redirect::redirect(
        message: "Produto cadastrado com sucesso!!!"
    );
}