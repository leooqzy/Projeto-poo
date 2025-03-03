<?php

    require_once "Humano.php";
    require_once "Animal.php";
    require_once "Foca.php";
    require_once "Funcionario.php";
    require_once "Lontra.php";
    require_once "Produto.php";
    require_once "Canario.php";

    $funcionario1 = new Funcionario("Leonardo", 18, "Batel", "(42)9 99906-3972", "Balconista", 1518); 
    print_r ($funcionario1);

    $funcionario2 = new Funcionario("Gustavo", 20, "Jardim das Américas", "(42)9 98888-9999", "Veterinário", 2518); 
    print_r ($funcionario2);

    $funcionario3 = new Funcionario("João", 22, "Boqueirão", "(42)9 97777-6666", "Vendedor", 3518); 
    print_r ($funcionario3);

    $animal1 = new Canario("Carijó", "Canário Vermelho", 2, "Vermelho", "20.0g", "13.5cm");
    echo $animal1->falar();
    //print_r ($animal1);

    $animal2 = new Foca("Marcelo", "Hydrurga leptonyx", 0, "Cinza", "80kg", "1.85m");
    echo $animal2->falar();
    //print_r ($animal2);

    $animal3 = new Lontra("Arnaldinho", "lontra-neotropical", 4, "Branco", "6.6kg" , "60cm");
    echo $animal3->falar();
    //print_r ($animal3);

    $produto1 = new Produto("Ração para gato", 15.85);
    //print_r ($produto1); 
?>