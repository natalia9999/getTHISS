<!doctype html>
<html>
<head>
<title> Registrazione utente </title>
</head>
<body>
<h2> Modulo di registrazione </h2>
<hr/ >
Inserisci i dati e spedisci il modulo
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="get">
Nome <input type="text" name="nome" size="20">
<br />
Cognome <input type="text" name="cognome" size="20">
<br />
E-mail <input type="text" name="email" size="30">
<br />
<input type="submit" name="invio" value="Registra" />
<input type="reset" name="cancella" value="Anulla" />
</form>
<hr />

<?php if(isset($_GET["invio"])) {
$nome=$_GET["nome"];
$cognome=$_GET["cognome"];
$email=$_GET["email"];
echo  "Conferma della registrazione: <br />";
echo  "<br />";
echo "La richiesta di $nome $cognome è stata registrata con l'indirizzo di posta elettronica $email. <br />";

echo "La richiesta di accesso al servizio è arrivata alle ore ", date ("H:i:s"), "del giorno: ", date("d-m-Y");
echo " <br />";

}
?>
</body>
</html>