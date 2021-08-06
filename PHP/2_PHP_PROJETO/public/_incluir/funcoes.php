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

    function gerarCodigoUnico(){
        $_alfabeto = "23456789ABCDEFGHJKMNPQRS";
        $_tamanho = 12;
        $_letra = "";
        $_resultado = "";
        
        for( $i = 1 ; $i <= $_tamanho ; $i){
            $_letra = substr($_alfabeto,rand(0,23),1);
            $_resultado .= $_letra;
        }

        date_default_timezone_set('Amreica/Recife');
        $_agora = getdate();
        $_codigo_data = $_agora['year'] . "_" . $_agora['yday'] . "_";
        $_codigo_data .= $_agora['hours'] . $_agora['minutes'] . $_agora['seconds'];
        return "foto_" . $_codigo_data . "_" . $_resultado;
    }

    function getExtensao($_nome){
        return strrchr($_nome,".");
    }

    function publicarImagem($_imagem){
        $_arquivo_temporario = $_imagem['tmp_name'];
        $_arquivo_nome = basename($_imagem['name']);
        $_novo_nome = gerarCodigoUnico() . getExtensao( $_arquivo_nome );
        $_nome_completo = "../imagens/product_images/". $_novo_nome;

        if(move_uploaded_file($_arquivo_temporario, $_nome_completo )){
            $_msg = "Imagem publicada com sucesso";
        }else{
            $_msg = mostrarAvisoPublicacao($_imagem['error']);            
        }
        return $_msg;
    }

    function enviarmsg($_dados){
        //Dados do formulário
        $_nome_usuario = $_dados['nome'];
        $_email_usuario = $_dados['email'];
        $_msg_usuario = $_dados['mensagem'];

        //Criar variaveis de enviou
        $_destino  = "williany.veras@gmail.com";
        //o envio é do e-mail do site, não do e-mail da pessoa, pois pode enviar um e-mail falso
        $remetente = "udemi@udemi.com.br";
        $assunto = "MSG do site";

        // montar o corpo da msg
        $_mensagem = "O usuario ". $_nome_usuario . " enviou um mensaguem. <br/>";
        $_mensagem .= "Com o e-mail: ". $_email_usuario  . ". <br/>";
        $_mensagem .= "Mensaguem: <br/>";
        $_mensagem .= $_msg_usuario;

        return mail ($_destino, $assunto,$_mensagem, $remetente);
    }

?>