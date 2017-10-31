<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>{TITLE}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
    <link href="<?php echo base_url('assets/css/loja.css')?>" rel="stylesheet">

    <style>
        a:link{
            text-decoration: none;
        }
    </style>
  </head>
  <body style="background-image: url(https://livewallpaperhd.com/wp-content/uploads/2017/05/White-Clean-Desktop-Wallpaper.jpg);background-repeat:no-repeat">
    <div class="container">
        <div class="row-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h1 style="text-shadow: 1px 1px 3px">Buy Hardware</h1>
                </div>
                <br>
                <div class="span12">
                    
                </div>   
            </div>
        </div>
        <br>
        <div class="row-fluid">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo site_url(); ?>" title="Ir para a página inicial">Inicial</a></li>
                        <li class=""><a href="<?php echo site_url('checkout'); ?>" title="Meu Carrinho">Meu Carrinho</a></li>
  
                        <li class=""><a href="<?php echo site_url('conta/login'); ?>" title="Login">Login</a></li>
                        <li class=""><a href="<?php echo site_url('conta/novaconta'); ?>" title="Realizar cadastro na loja">Cadastrar-se</a></li>
        
                        <li class=""><a href="<?php echo site_url('conta/pedidos'); ?>" title="Verifique seus pedidos">Meus Pedidos</a></li>
                    </ul>        
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="<?php echo site_url('checkout'); ?>" title="Ir para o carrinho"><strong>Olá {NOMECLIENTE} </strong></a></li>
                        <li class=""><a href="<?php echo site_url('conta/sair'); ?>" title="Sair da loja">Sair</a></li>
                    </ul>
                            
                   
                </div>
            </nav>
            <!-- <div class="row-fluid">
                <div class="span12">
                    <ul class="span12">
                        <li class="btn btn-default"><a href="<?php echo site_url(); ?>" title="Ir para a página inicial">Inicial</a></li>
                        <li class="btn btn-default"><a href="<?php echo site_url('checkout'); ?>" title="Meu Carrinho">Meu Carrinho</a></li>
                        <naologado>
                            <li class="btn btn-default"><a href="<?php echo site_url('conta/login'); ?>" title="Login">Login</a></li>
                            <li class="btn btn-default"><a href="<?php echo site_url('conta/novaconta'); ?>" title="Realizar cadastro na loja">Cadastrar-se</a></li>
                        </naologado>
                        <logado>
                            <li class="btn btn-default"><a href="<?php echo site_url('conta/pedidos'); ?>" title="Verifique seus pedidos">Meus Pedidos</a></li>
                            <li class="btn btn-default"><a href="<?php echo site_url('conta/sair'); ?>" title="Sair da loja">Sair</a></li>
                        </logado>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
        <br>
        <div class="container">
            <form method="get" action="{URLBUSCA}">
                <div class="row-fluid">
                    <div class="form-group">
                        <input type="text" name="pesquisa" class="form-control" id="pesquisa" placeholder="Pesquisar produtos">
                        <br>
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    {MENSAGEM_SISTEMA_ERRO}
                    {MENSAGEM_SISTEMA_SUCESSO}  
                    {CONTEUDO}
                </div>
            </div>    
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.maskMoney.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.elevateZoom-3.0.8.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/js/loja.js')?>"></script>
  </body>
</html>