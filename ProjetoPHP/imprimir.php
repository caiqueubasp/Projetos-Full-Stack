<?php

if ($_POST['nome'] == '') {
    echo 'Opa! Preenche o nome ai rapaz!!!';
}
else if ($_POST['email'] == '') {
    echo 'Tá esquecendo o email também cara?';
}

else {
echo "O nome digitado é: ".$_POST['nome'];
echo "<br>O email digitado é: ".$_POST['email'];
echo '<br> Ficou sabendo do nosso site via:'.$_POST['checkbox'];
}

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
?>

<!DOCTYPE HTML>
<html>
    <head> 
    <link rel="stylesheet" type="text/css" href="imprimir.css">
    </head>

<body>

<header>
    <a>FORMULARIO</a>
</header>
<div class="textbox">
<form action = "imprimir.php" method = "POST">
Nome: <input type = "text" name = "nome" ><br>
Email:  <input type = "text" name = "email" ><br>
<a> Como você ficou sabendo deste site?</a><br>
<input type = "checkbox" name = "indicacao">Outros sites<br> 
<input type = "checkbox" name = "indicacao">É meu amigo!<br> 
<input type = "checkbox" name = "indicacao">Não sei como vim parar aqui<br>
<input type = "radio" name="sexo" value="masculino">Masculino<br>
<input type = "radio" name="sexo" value="feminino">Feminino<br>
<select name="opcoes">
    <option value="1">1</option>
    <option value="1">2</option>
    <option value="1">3</option>
    <option value="1">4</option>
    <option value="1">5</option>
    <option value="1">6</option>
    <option value="1">7</option>
    <option value="1">8</option>
    <option value="1">9</option>
    <option value="1">10</option>
<select>Dormiu bem essa noite?<br>
<input type="checkbox" name="checkbox">Aceito termos e condições<br>

<input type = "submit">

</form>
</div>
</body>
</html>