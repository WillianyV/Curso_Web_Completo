<?php
    function real_format($valor) {
        $valor  = number_format($valor,2,",",".");
        return "R$ " . $valor;
    }

    function mostrarAvisoPublicacao($numero){
        $array_erro = array(
            UPLOAD_ERR_OK => "Sem erro.",
            UPLOAD_ERR_INI_SIZE => "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
            UPLOAD_ERR_FORM_SIZE => "O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML",
            UPLOAD_ERR_PARTIAL => "O upload do arquivo foi feito parcialmente.",
            UPLOAD_ERR_NO_FILE => "Nenhum arquivo foi enviado.",
            UPLOAD_ERR_NO_TMP_DIR => "Pasta temporária ausente.",
            UPLOAD_ERR_CANT_WRITE => "Falha em escrever o arquivo em disco.",
            UPLOAD_ERR_EXTENSION => "Uma extensão do PHP interrompeu o upload do arquivo."
        ); 
        return  $array_erro[$numero];
    }

    function publicarArquivo($arquivo){
        $_arquivo_temporario = $arquivo['tmp_name'];
        $_arquivo_nome = basename($arquivo['name']);
        $_dir = "../uploads";
        if(move_uploaded_file($_arquivo_temporario,$_dir."/".$_arquivo_nome)){
            $_msg = "Imagem publicada com sucesso";
        }else{
            $_msg = mostrarAvisoPublicacao($arquivo['error']);            
        }
        return $_msg;
    }
?>