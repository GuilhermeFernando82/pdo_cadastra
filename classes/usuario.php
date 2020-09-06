<?php  
Class Usuario
{
    public function cadastrar($nome, $cell, $cnpj, $email, $senha,$pdo){
        
        //verificando se já existe usuário cadastrado
        $sql = $pdo->query("SELECT email FROM usuarios WHERE email = '$email'");
        if($sql->rowCount() > 0){
            echo "Já existe esse email";
        }
        else{
        //caso não, cadastrar no BD
         $pdo->query("INSERT INTO usuarios SET nome='$nome', cell= '$cell',cnpj= '$cnpj',email= '$email',senha= '$senha'");    
         echo "Cadastrado com sucesso!!!";
         // }
    }
}
}

?>