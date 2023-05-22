<?php 
    // $res = 50 / 2 + 3 ** 2;
    // echo "O resultado é $res "; 
    
    // $r = abs(-2000);
    // print("A resposta é $r");

    // $b = base_convert(254, 10, 2); // ultima casa binario 2 hexadecimal 16 descimal 8
    // print("A resposta é $b");

    // $a = 5%2; // $a = intdiv(5,2);
    // print("A resposta é $a");
    
    // $h = min(10, 3, 4, 5, 8); 
    // print("A resposta é $h");

    // $a = max(10, 3, 4, 5, 8); 
    // print("A resposta é $a");

    // $a = pi(); // M_PI;
    // print("A resposta é $a");

    // $a = pow(5, 2);  // 5 **2
    // print("A resposta é $a");
    
    // $a = sqrt(81); // raiz quadrada 27 ** (1/2)
    // print("A resposta é $a");


    $num = 15;

    // $ant = $num - 1;
    // $suc = $num + 1;

    // echo "O antecessor de $num é $ant \n";
    // echo "O sucessor de $num é $suc \n";

    // 
    
  
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);
        // rand() = 1951 - Linear Congretional Gererator
        // mt_rand() = 1997 - Mersenne Twister
        //random_int() gera números aleatórios criptograficamente seguros 

        // echo "Gerando um número aleátorio entre $min e $max... \n";
        // echo "O número gerado foi $num";

        //Cotação copiada do Google
        $cotação = 5.17;

        // Quanto $$ você tem?
        $real = 1000;
        
        //Equivalência em dólar
        $dólar = $real / $cotação;

        //Mostrar o resultado
        // echo "Seus R\$" . number_format($real,2, ",",".") . " equivalem a US\$" . number_format($dólar, 2, ",",".");

        //formatação de moedas com internacionalização
        // Biblioteca intl (internallization PHP)
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD");
?>