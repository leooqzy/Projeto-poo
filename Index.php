<?php

    require_once "Humano.php";
    require_once "Animal.php";
    require_once "Foca.php";
    require_once "Funcionario.php";
    require_once "Lontra.php";
    require_once "Produto.php";
    require_once "Canario.php";

    $humano1 = new Humano ("Pedrinho", 14, "Paraiba", "(83)9 99999-6756");
    print_r ($humano1);

    $humano2 = new Humano ("Joaquim", 26, "Bahia", "(77)9 88888-6756");
    print_r ($humano2);

    $humano3 = new Humano ("Roberto", 54, "Goioxim", "(42)9 77777-6756");
    print_r ($humano3);

    $funcionario1 = new Funcionario("Leonardo", 18, "Batel", "(42)9 99906-3972", "Balconista", 1518); 
    print_r ($funcionario1);

    $funcionario2 = new Funcionario("Gustavo", 20, "Jardim das Américas", "(42)9 98888-9999", "Veterinário", 2518); 
    print_r ($funcionario2);

    $funcionario3 = new Funcionario("João", 22, "Boqueirão", "(42)9 97777-6666", "Vendedor", 3518); 
    print_r ($funcionario3);

    $animal1 = new Canario("Carijó", "Canário Vermelho", "Vermelho", "20.0g", "13.5cm", $humano1);
    echo $animal1->falar();
    print_r ($animal1);

    $animal2 = new Foca("Marcelo", "Hydrurga leptonyx", "Cinza", "80kg", "1.85m", $humano2);
    echo $animal2->falar();
    print_r ($animal2);

    $animal3 = new Lontra("Arnaldinho", "lontra-neotropical", "Branco", "6.6kg" , "60cm", $humano3);
    echo $animal3->falar();
    print_r ($animal3);

    $produto1 = new Produto("Ração para gato", 15.85);
    print_r ($produto1);

    $produto2 = new Produto("Catnip", 35.15);
    print_r ($produto2);

    $produto3 = new Produto("bolinha de lã", 5.50);
    print_r ($produto3);

    $compra1 = new Venda($produto1, $humano1);
    print_r ($compra1);

    $compra2 = new Venda($produto2, $humano2);
    print_r ($compra2);

    $compra3 = new Venda($produto3, $humano3);
    print_r ($compra3);
?>