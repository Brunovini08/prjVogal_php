<?php

$cod = $_POST['cod'];

switch ($cod) {
    case '1':
        echo "Alimento não-perecível";
        break;
    case '2':
        echo "Alimento perecível";
        break;
    case '3':
        echo "Vestuário";
        break;
    case '4':
        echo "Limpeza";
    default:
        echo "Esse código não existe";
        break;
}

?>