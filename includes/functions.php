<?php 
    
    /**
     * Defina uma função que receba o id numérico e retorne a
     * pizza quem tem como id este que foi dado
     */
     
    function pizzaPorId($id){
        //Trazer o array de pizzas
        global $pizzas;

        //Realizar o "for" procurando a pizza que tem o id = $id
        foreach ($pizzas as $pizza) {
            if ($pizza["id"]==$id) {
                return $pizza;
            }
        }

        //Se não encontrar pizza nenhuma, retorna falso
        return false;
    }

    /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasComDestaque(){

        global $pizzas;
        $pizzasDestaque = [];

        foreach ($pizzas as $pizza) {
            if ($pizza["destaque"]==true) {
                $pizzasDestaque[]=$pizza;
            }
        }
        return $pizzasDestaque;
    }

     /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasSemDestaque(){
        global $pizzas;
        $pizzasSemDestaque = [];

        foreach ($pizzas as $pizza){
            if($pizza["destaque"]==false){
                $pizzasSemDestaque[]=$pizza;

            }
        
        }
        return $pizzasSemDestaque;
    }
        
    /**
     * Defina uma função que retorne a pizza mais cara do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisCara(){
        global $pizzas;
        $pizzaMaisCara = $pizzas[0];

        foreach ($pizzas as $pizza) {
            if ($pizza["preco"]>$pizzaMaisCara["preco"]) {
                $pizzaMaisCara=$pizza;
            }
        }return $pizzaMaisCara;
    }

    /**
     * Defina uma função que retorne a pizza mais barata do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisBarata(){}

    /**
     * Defina uma função que recebe o trecho de nome de uma pizza
     * e retorna um array contendo todas as pizzas que contenham
     * o trecho
     */
    function buscaPizza($trecho){
        global $pizzas;
        $resultado = [];
        foreach ($pizzas as $pizza){
            if (stripos ($pizza['nome'], $trecho) !== false){
                $resultado[] = $pizza;
            }
        }
        return $resultado;
    }

     /**
     * Defina uma função que impima as informações de uma pizza
     */
    function pizzaPrint($pizza){}
?>