<?php
if($_FILES){
    if($_FILES['imagem']){
        $tempName = $_FILES['imagem']['tmp_name'];
        $name = 'quebracabeca.jpg';
        if(move_uploaded_file($tempName, $name)){
            header('Location: gerar_quebracabeca.php');
        }else{
            header('Location: atualizar_imagem.php');
        }
    }
}
?>