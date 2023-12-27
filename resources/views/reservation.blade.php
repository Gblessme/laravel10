<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <link href="../css/reservation.css" type="text/css" rel="stylesheet" media="screen"/>
</head>
<body>
  <header class="titre">
    <center>
        <h1>
            <a href="Accueil.html">O Cnamo</a></h1>
    </center>

  </header>

    <form action="" method="get" class="form-example">
        <div class="form-example">
          <label for="name">Nom: </label>
          <input type="text" name="name" id="name" required />
        </div>
        <div class="form-example">
          <label for="telNo">Numéro: </label>
          <input id="telNo" name="telNo" type="tel" placeholder="01 23 45 67 89" />
        </div>
        <div class="form-example">
            <label for="couverts">Nombre de couverts: </label>
            <input type="number" name="couverts" id="couverts" min="1" max="15" required />
          </div>
          <div class="form-example">
            <label for="date">Date: </label>
            <input type="date" name="date" id="date" required />
          </div>
          <div class="form-example">
            <label for="hour">Heure: </label>
            <input type="time" name="hour" id="hour" required />
          </div>
          <div class="form-example">
            <label for="comment">Commentaire: </label>
            <!-- <input type="comment" name="comment" id="comment" required /> -->
            <textarea name="comment" id="comment" cols="" rows=""></textarea>
          </div>
        <div class="form-example">
          <input type="submit" value="Validé la Reservation" />
        </div>
      </form>

</body>
</html>
