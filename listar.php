<?php
    include 'cabecalho.php';
?>
<style>
body {
  background-color: white;
  height: 100vh;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #222;
}

.container {
  background-color: #fff;
  padding: 40px 50px;
  border-radius: 12px;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
  width: 900px;
  max-width: 95%;
  text-align: center;
}

h2 {
  margin-bottom: 30px;
  font-weight: 700;
  color: #111;
  font-size: 2rem;
}

.table {
  width: 100%;
  border-collapse: collapse;
  font-size: 18px;
  color: #111;
}

.table thead {
  background-color: #9999;
  color: #eee;
}

.table thead th {
  padding: 16px 20px;
  text-align: left;
  border-radius: 8px 8px 0 0;
  font-weight: 700;
}

.table tbody tr {
  border-bottom: 1px solid #ccc;
  transition: background-color 0.3s ease;
}

.table tbody tr:hover {
  background-color: #f5f5f5;
}

.table tbody td {
  padding: 16px 20px;
  border-left: 1px solid #ddd;
}

.table tbody td:first-child {
  border-left: none;
}

.btn-group {
  display: flex;
  gap: 10px;
  justify-content: flex-start;
}

.btn {
  padding: 10px 18px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 6px;
  text-decoration: none;
  cursor: pointer;
  border: none;
  display: inline-block;
  text-align: center;
  transition: background-color 0.3s ease;
  color: #fff;
}


.btn-success:hover {
  background-color: #006633;
}



.btn-danger:hover {
  background-color: #990000;
}

/* Responsividade */
@media (max-width: 900px) {
  .container {
    width: 95%;
    padding: 30px 20px;
  }

  .table thead {
    display: none;
  }

  .table,
  .table tbody,
  .table tr,
  .table td {
    display: block;
    width: 100%;
  }

  .table tr {
    margin-bottom: 20px;
    border-bottom: 2px solid #ccc;
  }

  .table td {
    padding-left: 50%;
    position: relative;
    border: none;
    border-bottom: 1px solid #eee;
    text-align: left;
  }

  .table td::before {
    content: attr(data-label);
    position: absolute;
    left: 15px;
    top: 16px;
    font-weight: 700;
    color: #444;
  }
}
</style>
<body>
    <div class="container">
    <button onclick="window.location.href='adm.html'" class="btn-close" aria-label="Fechar painel">&times;</button>
        <h2>Lista de Itens</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo"<tr>";
                    echo"<td data-label='ID'>".$produto['id']."</td>";
                    echo"<td data-label='NOME'>".$produto['nome']."</td>";
                    echo"<td data-label='PREÇO'>".$produto['preco']."</td>";
                    echo"<td data-label='QUANTIDADE'>".$produto['quantidade']."</td>";
                    echo"
                    <td data-label='OPÇÕES'>
                       <div class='btn-group' role='group'>
                          <a href='form_atualizar.php?id=".$produto['id']."' type='button' class='btn btn-success'>Atualizar</a>
                          <a href='apagar.php?id=".$produto['id']."' type='button' class='btn btn-danger'>Apagar</a>
                        </div>
                    </td>
                    ";
                    echo"</tr>";
                }
            ?>
            </tbody>
        </table>      
    </div>
<?php
   include 'pontape.php'
?>