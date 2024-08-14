<?php

/*print_r($_POST);*/

/*abre o arquivo.hd, dados adicionados ao final do arquivo sem serem deletados*/
$arquivo= fopen('arquivo.hd', 'a');

/*variáveis substituem a # por -, caso alguém escreva #, não ocasionar problema*/ 
$titulo= str_replace('#', '-', $_POST['titulo'] );
$categoria=str_replace('#', '-', $_POST['categoria'] );
$descricao=str_replace('#', '-', $_POST['descricao'] );

/*variável texto guarda a informação # e concatenamos as variáveis dentro da variavel texto / o PHP_EOL para ficar um em baixo do outro*/
$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

/*transcreve o conteúdo do texto para o arquivo*/
fwrite($arquivo, $texto);

/*echo $texto;*/

/*fechamento de arquivo*/
fclose($arquivo);

/*redirecionamento do navegador para a página 'abrir_chamado.php'*/
header ("Location: abrir_chamado.php");

?>
