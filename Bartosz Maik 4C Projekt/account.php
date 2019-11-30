<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Bartosz Maik">
    <meta name="keywords" content="angielski, kurs, angielski zawodowy, nauka języka, ponglish">
    <meta name="description" content="Ponglish - strona do nauki języka zawodowego">
    <meta name="robots" content="follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kontakt</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <header>
      <nav class="navbar shadow navbar-dark navbar-expand-lg">
          <a class="navabar-brand" href="index.php">
            <img src="images/logo.png" id="logo" class="d-inline-block align-middle" alt="logo">
            PONGLISH
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav">

                <li class="nav-item">
                  <a class="nav-link" href="index.php">Strona główna</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="learn.php">Ucz się</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Kontakt</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="account.php">Twoje konto</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="login.php">Zaloguj się</a>
                </li>

              </ul>
          </div>
      </nav>
    </header>
<div class="container">
    <div class="row">
      <h2 class="mt-5 col-md-12 center">Informacje o koncie<hr class="col-8 col-sm-5 col-md-3 text-dark"></h2>

      <div class="accountinfo border1 col-md-12">
          <h4 class="f24">Dane osobowe</h4>

        <form class="center" name="userdata" action="account.php" method="post">

            <div class="form-group">
              <label for="name">Imię</label>
              <input type="text" class="form-control-sm" id="name" name="name">
            </div>

            <div class="form-group">
              <label for="lastname">Nazwisko</label>
              <input type="text" class="form-control-sm" id="lastname" name="lastname">
            </div>

            <div class="form-group">
              <label for="data">Data urodzenia</label>
              <input type="date" class="form-control-sm" id="data" name="data">
            </div>

            <div class="form-group">
              <label for="pn">Nr Telefonu</label>
              <input type="text" class="form-control-sm" id="pn" name="pn">
            </div>

              <button type="button" class="mtop btn btn-dark">Aktualizuj dane</button>

        </form>
      </div>

      <h2 class="mt-5 col-md-12 center">Statystki<hr class="col-8 col-sm-5 col-md-3 text-dark"></h2>
      <div class="stats border1 col-md-12 border-dark rounded">
        <p class="center">Ilość ukończonych działów:</p>
        <p class="center">Ilość nauczonych słówek:</p>
        <p class="center">Ilość dni od rejestracji:</p>
        </div>

  </div>
    </div>


    <footer>
      Stronę wykonał: Bartosz Maik 4C * Tu jakieś info random na razie, ale będzie inne *
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  	<script src="js/bootstrap.min.js"></script>
  </body>
</html>
