<?php 

    session_start();


    //remover indices do array de sessão
    //unset() //para remover o indice apenas




    //destruir a variavel de sessão
    //session_destroy() //será destruida
    //forçar um redirecionamento

    session_destroy();
    header('Location: index.php');



?>