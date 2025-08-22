<?php
   include 'cabecalho.php'
?>
<body>
    <div class="container ">
        <h2>Cadastro de Produtos</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do Produto">
            </div>
            <div class="mb-3">
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do Produto">
            </div>
            <div class="mb-3 form-check">
                <input type="text" name="quantidade" class="form-control" placeholder="Digite a quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
       </form>
    </div>     


<?php
   include 'pontape.php'
?>
</html>