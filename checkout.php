<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
    <h1>Ótima escolha!</h1>
    <p>Obrigado por comprar na Mirror Fashion!
    Preencha seus dados para efetivar a compra.</p>

    <?php
      $conexao = mysqli_connect("127.0.0.1", "root", "", "mirror-fashion");
      $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
      $produto = mysqli_fetch_array($dados);
    ?>
    <h2>Sua compra</h2>
    <dl>
      <dt>Produto</dt>
      <dd><?= $produto["nome"] ?></dd>

      <dt>Cor</dt>
      <dd><?= $_POST["cor"] ?></dd>

      <dt>Tamanho</dt>
      <dd><?= $_POST["tamanho"] ?></dd>

      <dt>Preço</dt>
      <dd><?= $produto["preco"]  ?></dd>
    </dl>
  </body>
</html>
