<?php
require "simple_html_dom.php";

if(($argc)==2){
    if(strlen($argv[1]) == 2){

    $html = file_get_html('https://etablissements.fhf.fr/annuaire/carte-departement.php?dpt='.$argv[1]);
    $count = 0;

    foreach($html->find("ul.liste_departement") as $dep){
        foreach($dep->find('a')as $a){
            $count++;
            echo $a->innertext.PHP_EOL;
        }
    }

    echo PHP_EOL."=============================================".PHP_EOL;
    echo $count." facilities were found in the ".$argv[1]. " departement".PHP_EOL;
    echo "=============================================".PHP_EOL;

    }else{
        echo PHP_EOL."=============================================".PHP_EOL;
        echo "the department must have 2 characters".PHP_EOL;
        echo "=============================================".PHP_EOL;
    }
    
}else{
    echo PHP_EOL."=============================================".PHP_EOL;
    echo "Please set a department number. ".PHP_EOL;
    echo "=============================================".PHP_EOL;
}

