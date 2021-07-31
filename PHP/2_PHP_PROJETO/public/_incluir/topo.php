<header>
    <div id="header_central">
        <?php
        if(isset($_SESSION["user_portal"])){    
            $_query = "SELECT nomecompleto FROM clientes WHERE clienteID = {$_SESSION["user_portal"]}" ;
            $_result = mysqli_query($_conexao, $_query);
            if(!$_result){
                die("Erro ao se conectar ao Bando de Dados");
            }
            $_saudacao = mysqli_fetch_assoc($_result);
            $_nome = $_saudacao["nomecompleto"];       
        ?>
            <div id="header_saudacao">
                <h5>Bem vindo, <?php echo $_nome?> - <a href="../login/logout.php">Sair</a></h5>                
            </div>
        <?php
        }
        ?>
        <a href="../product/"><img src="../_assets/logo_andes.gif"></a>
        <img src="../_assets/text_bnwcoffee.gif"> 
    </div>
</header>