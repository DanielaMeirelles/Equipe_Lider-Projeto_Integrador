<html>
<body>
    
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top">
        <div class="my-0 mr-md-auto font-weight-normal">
            <img class="rounded card-img-overlay" src="imagens/logo.jpeg" width="150px">
        </div>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="Menu">Página Inicial</a>
            <a class="p-2 text-dark" href="Empresa">Empresa</a>
            <a class="p-2 text-dark mark" href="#">Conteúdos</a>
            <a class="p-2 text-dark" href="Contato">Contato</a>
            <a class="p-2" href="Carrinho">
                <img class="figure figure-caption" src="imagens/carrinho.png" width="30px">
            </a>
        </nav>
        <a class="btn btn-outline-primary" href="Login">Login</a>
    </div>
    
    <div class="ml-5" style="margin-top: 8rem">
        <h1>
            Conteúdos 
            <?php if($this->user['acesso']){echo "<a href='New_Item' class='btn btn-outline-primary rounded-circle'><b>+</b></a>";}?>
        </h1>
        <hr class="mr-5">
        <br>
        <div class="form-row container align-items-center mx-auto">
            <?php $this->showContents(); ?>
        <div>
    </div>
</body>
</html>