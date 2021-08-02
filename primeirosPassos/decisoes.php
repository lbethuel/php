<?php

$idade = 26;

echo "Entrada permitida para maiores de 18 anos.". PHP_EOL;


if ($idade >= 18){
    echo "Você tem $idade anos. \nPode entrar!";
} else {
    echo "Você tem $idade anos. \nNão pode entrar!";
}