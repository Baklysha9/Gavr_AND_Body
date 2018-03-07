<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>РосЛайн</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="x-icon">
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
  			<div class="container-fluid">
          <div class="row">
          <div class="col-md-1"></div>
  				<div class="col-md-5 logo"><a href="index.php"><img src="images/logo.png" width="170"></a></div>
  				<div class="col-md-5 lg">
  					<a class="btn-sm login" href="signin.php" target="_self">Вход</a>
  					<a class="btn-sm login" href="reg.php" target="_self">Регистрация</a>
  				</div>
          <div class="col-md-1"></div>
        </div>
			 </div>
  		</header>

  		    <div class="container-fluid">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <p class="title">Билеты на самолет</p>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>

        <section>
          <div class="container-fluid order">
              <form> 
                <label for="exampleInputEmail1" class="lbInd">Откуда
                <input type="text" class="form-control frm"></label>
                <label for="exampleInputEmail1" class="lbInd">Куда
                <input type="text" class="form-control frm"></label>
                <label for="exampleInputEmail1" class="lbInd">Вылет
                <input type="date" class="form-control frm"></label>
                <label for="exampleInputEmail1" class="lbInd">Прилет
                <input type="date" class="form-control frm"></label>
                <label for="exampleInputEmail1" class="lbInd">Количество
                <input type="number" min="1" class="form-control frm"></label>
              </form>
                <a href="search.php" class="subB">Поиск билетов</a>
            </div>
        </section>
  	</div>
 	
 	<footer>
    <div class="container-fluid">
      <div class="row">  
      <div class="col-md-1"></div>
      <div class="col-md-5 app1">
        <img src="images/vk.png" class="play">
        <img src="images/tvit.png" class="play">
        <img src="images/ins.png"  class="play">
        <img src="images/teleg.png" class="play">
      </div>
      <div class="col-md-5 app">
        <img src="images/app.png" class="play1">
        <img src="images/play.png" class="play1">
      </div>
      <div class="col-md-1"></div>
    </div>
    </div>
 	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>