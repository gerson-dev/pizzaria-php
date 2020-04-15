<?php 
    /**
     * Nessa parte você deve incluir os arquivos
     * pizzas.php e o functions php para realizar
     * os testes das funções desenvolvidas em
     * functions.php
     */

    include("includes/functions.php");
    include("includes/pizzas.php");

    $pizza = pizzaPorId(7);

    print_r(pizzasComDestaque());


    print_r(pizzasSemDestaque());

    print_r(pizzaMaisCara());

    echo "<pre>";
    print_r($pizza);
    echo "</pre>";
    
?>