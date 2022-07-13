<?php
include('banco.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="Estilos.css" />
        
    </head>
    
    <body>
        <header>
            <div class="barra_superior">
                <div class="container">
                    Horário de abertura: 18:00 - 00:00h
                </div>
            </div>
            
            <div class="container">
                <img class="logo" href="principal.html" alt="Logo da empresa" title="Aqui é apresentado a logo da empresa XYZ" src="imagens/logo%20peixaria.jpg" />
        
                <nav class="negrito">
                    <a href="index.php">Principal</a> |
                    <a href="sobre.php">sobre</a> |
                    <a href="cardapio.php">Cardápio</a> |
                    <a href="fale_conosco.php">Fale Conosco</a> |
                    <a class="btn_destaque" href="onde_estamos.php">Onde estamos</a>               
                </nav>
            </div>
            
        </header>
        
        <section class="sec02">
            <div class="container">
                <img alt="imagem site" src="imagens/meio.png" />
        
            </div> 
        </section>
        <footer>
            <div class="container">
                <div class="um_terco">
                    <div class="container_logo">
                        <img class="logo" alt="Logo da empresa" title="Aqui é apresentado a logo da empresa XYZ" src="imagens/logo%20peixaria.jpg" />
                    </div>
                    <div class="centro">
                    <p>
                        <strong> <?php
                    echo $frase_rodape;
                    ?> </strong>
                    </p>
                    <div class="container_logo">
                        <a href="<?php echo $whats; ?>"><img     alt="Link para whatsapp" src="imagens/whats.jpg" /></a>
                        <a href="<?php echo $face; ?>"><img     alt="Link para Facebook" src="imagens/facebooklogo.jpg" /></a>
                        <a href="<?php echo $twit; ?>"><img alt="Link para Twitter" src="imagens/twiter.png"  /></a>
                        <a href="<?php echo $insta; ?>"><img alt="Link para Instagram" src="imagens/insta.jpg"  /></a>
                    </div>
                    </div>
                </div>
                <div class="um_terco">
                    <div class="margem_esquerda">
                        <h3>Links</h3>
                    
                        <a alt="Vai para a página principal do site"href="index.php">Principal</a><br />
                        <a alt="Vai para a página sobre a empresa"href="sobre.php">sobre</a><br> 
                        <a alt="Vai para o cardápio" href="cardapio.php">Cardápio</a><br />
                        <a title="Vai para a página de fale conosco" href="fale_conosco.php">Fale Conosco</a><br />
                        <a href="onde_estamos.php">Onde estamos</a><br />
                    </div>
                </div>
                <div class="um_terco">
                    <h3>Contato</h3>             
                                      
                    <?php
                        echo $endereco;
                    ?>
                    
                    <p><strong>Telefone:</strong> <a href="tel:(66) 992924915"> <?php
                    echo $contato;
                    ?>
                        </a>
                    </p>
                    
                    <p><strong>Email:</strong> <a href="mailto:peixariacuiabano@hotmail.com">
                        <?php
                    echo $email;
                    ?>
                        </a>
                    </p>
                </div>
            </div>
            <br class="clearfix" />
            <div class="direitos_reservados">
                Todos os direitos reservados (@) 2020. <a href="termodeuso.html">Termos de uso</a> e <a href="politicaprivacidade.html">Política de privacidade</a>.
            </div>
        </footer>
    </body>
</html>
