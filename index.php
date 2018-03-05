<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>РосЛайн</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
  </head>
  <body>
  	<div class="bod">

  		<header>
  			<div class="container-fluid head">
  				<div class="col-md-3 logo"><img src="images/logo.png" width="170"></div>
  				<div class="col-md-6">
            
          </div>
  				<div class="col-md-3">
  					<a class="login" href="signin.php" target="_self">Вход</a>
  					<a class="login" href="reg.php" target="_self">Регистрация</a>
  				</div>
			 </div>
  		</header>

  		<section class="sect" >
        <section>
  		    <div class="container-fluid">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <p class="title">Билеты на самолет</p>
            </div>
            <div class="col-md-1"></div>
            </div>
        </section>
        <section>
          <div class="container-fluid">
            <div class="col-md-1"></div>
            <div class="col-md-10 order">
              <form> 
                <label>Откуда
                <input type="text" class="frm" name=""></label>
                <label>Куда
                <input type="text" class="frm"  name=""></label>
                <label>Вылет
                <input type="date" class="frm"  name=""></label>
                <label>Прилет
                <input type="date" class="frm" name=""></label>
                <label>Количество
                <input type="number" min="1" class="frm" name=""></label>
              </form>
              <div class="sub">
                <a href="search.php"><input type="submit" class="subB" value="Поиск билетов"></a>	
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
        </section>
  		</section>
  	</div>
 	
 	<footer>
    <div class="container-fluid">
      <div class="col-md-1"></div>
      <div class="col-md-5">

      </div>
      <div class="col-md-5 app">
        <img src="images/app.png" width="150" class="play">
        <img src="images/play.png" width="150" class="play">
      </div>
      <div class="col-md-1"></div>
    </div>
 	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>