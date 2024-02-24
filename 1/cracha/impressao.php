<?php
// Obtém o conteúdo enviado pelo formulário
$conteudo = $_POST['conteudo'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Impressão de Crachá</title>
  <style>
    /* Estilização do Crachá */
    .cracha {
      margin-top:0px;
      padding:0px;
      border:0px;
      width: 250px;
      height: 387px;      
      border-radius: 10px;
      text-align: center;
      font-family: Arial, sans-serif;
      background-color: #fff;
      
    }

    .cracha img.logo {
      width: auto;
      height: auto;
      max-width:90px;
      max-height:428px;
      margin-top: 35px;
      border-radius: 10%;
      object-fit: cover;
      object-position:center;
    }

    .cracha img {
      width: 90px;
      height: 130px;
      margin-top: 10px;
      border-radius: 10px;
      object-fit: cover;
      object-position:center;
    }

    .cracha h1 {
    margin-top: 60px;
    font-size: 20px;
    font-weight: bold;
    color: black;
    text-transform: uppercase;
    position: absolute;
    top: 280px;
    left: 133px;    
    transform: translate(-50%, -50%);
    z-index: 1;
}

.cracha p {
    margin-top: 5px;
    font-size: 18px;
    font-weight: bold;
    color: white;
    text-transform: uppercase;
    position: absolute;
    top: 366px;
    left: 134px;
    transform: translate(-50%, -50%);
    z-index: 1;
}

#linha-vermelha {
    height: 24px;
    border-right: 258px solid yellow;
    position: absolute;
    top: 340px;
    left: 0;
    transform: translateY(-50%);
    z-index: 0;
}
#linha-azul {
    height: 18px;
    border-right: 258px solid #454545;
    position: absolute;
    top: 370px;
    left: 0;
    transform: translateY(-50%);
    z-index: 0;
}
  </style>
</head>
<body onload="window.print()">
  <div class="cracha">
  
  <img src="logo/logo-caesp.png" class="logo">
  <div id="linha-vermelha"></div>
  <div id="linha-azul"></div>
    <?php echo $conteudo; ?>
  </div>
</body>
</html>