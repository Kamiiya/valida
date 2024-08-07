<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php

$usuario_autenticado=false;

    $usuario_app=array(
            array(
                'email' => 'lalalalala@gmail.com',
                'senha' => '12345'
            ),
            array(
                'email' => 'bababababa@gmail.com',
                'senha' => 'hahahahahaha'
            )

        );


foreach ($usuario_app as $user) {
    if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) { 
        $usuario_autenticado=true; 
    }
};


if($usuario_autenticado) {
    echo "Usuário Altenticado";
} else {
    echo "Usuário não encontrado";
}

?>

</body>
</html>