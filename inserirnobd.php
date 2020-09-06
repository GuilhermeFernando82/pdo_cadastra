<?php

//verificar se clicou no botão

require_once 'classes/usuario.php';
require_once 'classes/conexaobd.php';

$u = new Usuario;

    $nome =  htmlspecialchars(addslashes($_POST['nome']));
    $cell =  htmlspecialchars(addslashes($_POST['cell']));
    $cnpj =  htmlspecialchars(addslashes($_POST['cnpj']));
    $email = htmlspecialchars(addslashes($_POST['email']));
    $senha = htmlspecialchars(addslashes($_POST['senha']));
    $confsenha = ($_POST['confsenha']);

        if(!empty($nome) && !empty($cell) && !empty($cnpj) && !empty($email) && !empty($senha) && !empty($confsenha))
        {

          if($senha != $confsenha){
                 echo "Digite a mesma senha";
          }else{
            $u->cadastrar($nome,$cell,$cnpj,$email,$senha,$pdo);
            
          }
            }else{
                echo "Preencha todos os campos";
            }
         
                    
?>