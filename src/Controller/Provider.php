<?php
namespace APP\Controller;

use APP\Model\Provider;
use APP\Model\Validation;
use APP\Utils\Redirect;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message:'Requisição inválida!!!',
        type: 'error'
    );
}

$providername = $_POST["name"];
$providerphone=(float)  $_POST["phone"];
$providercnpj=(float)  $_POST["cnpj"];
$provideraddress= $_POST["address"];

$error = array();

if(!Validation::validateName($providername)){
    array_push($error, "O nome do fornecedor deve conter ao menos 5 caracteres!!!");
}

if(!Validation::validateNumber($providerphone)){
    array_push($error, "o numero de telefone deve ser maior que 10!!!");
}

if(!Validation::validateQuantity($providercnpj)){
    array_push($error, "o cnpj deve conter ao menos 14 caracteres!!!");
}
if(!Validation::validateName($provideraddress)){
    array_push($error, "O endereço deve conter ao menos 10 caracteres!!!");
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $product = new Provider(
        name: $providername,
        phone: $providerphone,
        cnpj: $providercnpj,
        address: $provideraddress
    );
    // TODO salvar no banco de dados

    redirect::redirect(
        message: "Fornecedor cadastrado com sucesso!!!"
    );
}