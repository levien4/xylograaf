<html>
<head>
  <meta charset="UTF-8">
  <title>Scheurkalender</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="script.js"></script>
  <link rel="icon" type="image/svg" sizes="any" href="https://www.worldservants.nl/sites/all/themes/worldservants/images/world-servants/logo.svg">
</head>
<body bgcolor="#42616f">
  <div class="background">
  </div>
    <div class="content">
      <div class="header">
        <a href="index.html"><img src="wslogo.png"></a>
        <h1>Zwolle</h1>
        <button id="load" onclick="showDiv()">Inschrijven</button>
        <div id="inschrijven">
          <form method="post" action="send.php">
            Naam Bedrijf<br><input type="text" name="naam" placeholder="bedrijfsnaam"><br>
            Telefoonnummer<br><input type="text" name="telefoon" placeholder="telefoonnummer"><br>
            E-mailadres<br><input type="text" name="email" placeholder="e-mailadres"><br>
            Gewenste Datum<br><input type="date" name="datum"><br>
            Kies afbeelding voor reclame<br><input type="file" id="file" name="file"><label for="file">Bestand kiezen</label><br>
            <input type="submit" name="subint" value="Gereed">
          </form>
        </div>
    </div>
</div>
</body>
</html>
