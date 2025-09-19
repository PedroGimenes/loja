<?php
   include 'cabecalho.php'
?>
<style>
    /* Reset básico */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #333;
}

body {
  background: white; 
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

.container {
  background-color: white;
  padding: 30px 40px;
  border-radius: 12px;
  box-shadow: 0 12px 30px rgba(0,0,0,0.2);
  width: 400px;
  max-width: 100%;
  text-align: center;
}

.container h2 {
  margin-bottom: 25px;
  font-weight: 700;
  color: #1a1a1a;
}

.mb-3 {
  margin-bottom: 20px;
  text-align: left;
}

.form-control {
  width: 100%;
  padding: 12px 15px;
  font-size: 16px;
  border-radius: 8px;
  border: 1.8px solid #ccc;
  transition: border-color 0.3s ease;
}

.form-control:focus {
  outline: none;
  border-color: #4b6ef6;
  box-shadow: 0 0 6px rgba(75,110,246,0.5);
}

.btn {
  width: 100%;
  padding: 14px;
  background-color: #4c4c4c;
  border: none;
  border-radius: 8px;
  color: white;
  font-size: 18px;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: grey;
}

@media (max-width: 480px) {
  .container {
    width: 100%;
    padding: 20px;
  }
}
.btn-close {
    position: absolute;
    top: 10px;
    left: 10px;
    background: transparent;
    border: none;
    font-size: 20px;
    font-weight: bold;
    cursor: default; 
    color: black;
    transition: color 0.3s ease;
    user-select: none; 
}

.btn-close:hover {
    color: black;
}
</style>
<body>
    <div class="container ">

    <button onclick="window.location.href='adm.html'" class="btn-close" aria-label="Fechar painel">&times;</button>

        <h2>Cadastro de Produtos</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do Produto">
            </div>
            <div class="mb-3">
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do Produto">
            </div>
            <div class="mb-3">
                <input type="text" name="quantidade" class="form-control" placeholder="Digite a quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
       </form>
    </div>     


<?php
   include 'pontape.php'
?>
</html>