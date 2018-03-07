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
      <div class="row" style="background: white; margin-top: 30px;"> 
        <div class="col-md-12" style="height: 50px; padding-top: 10px; width: 100%;">

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


        </div>
        <div class="col-md-12" style="text-align: center; margin-bottom: 10px;"><img src="images/30.gif" alt=""></div>
        
      </div>
        <div class="row"> 
        <div class="col-md-4" style="background: #f1f1f1; height: 450px; ">
        <label style="padding: 30px;">Категория</label>
          <select name="" id="">
            <option value="">Категория 1</option>
            <option value="">Категория 2</option>
            <option value="">Категория 3</option>
          </select>
          <br>
             <label style="padding: 30px; padding-top: 0px;">Категория</label>
          <select name="" id="">
            <option value="">Категория 1</option>
            <option value="">Категория 2</option>
            <option value="">Категория 3</option>
          </select>
          <br>
          <label style="padding: 30px; padding-top: 0px;">Заголовок ползунка</label>
          <input type="range" min="0" max="100" step="1" value="50" style="width: 80%; margin-left:10%;"> 
            <br>
           <form action="handler.php" style="padding: 30px">
           <p><b>Какое у вас состояние разума?</b></p>
           <p><input name="dzen" type="radio" value="nedzen"> Не дзен</p>
           <p><input name="dzen" type="radio" value="dzen"> Дзен</p>
           <p><input name="dzen" type="radio" value="pdzen" checked> Полный дзен</p>
           <p><input type="submit" value="Выбрать" style="margin-left: 35%"></p>
           </form> 

          </div>
        <div class="col-md-8" style="background: white;">
          <div class="okno-bileta">
            <h2>Заголовок</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repudiandae distinctio dolorem, odio iusto voluptates, blanditiis veritatis necessitatibus explicabo earum id, quas facilis architecto eligendi, illo molestiae ut nulla eius!</p>
            <label for="">10000$</label>
            <button >Заказать</button>
          </div>
          <div class="okno-bileta">
            <h2>Заголовок</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repudiandae distinctio dolorem, odio iusto voluptates, blanditiis veritatis necessitatibus explicabo earum id, quas facilis architecto eligendi, illo molestiae ut nulla eius!</p>
            <label for="">10000$</label>
            <button >Заказать</button>
          </div>
          <div class="okno-bileta">
            <h2>Заголовок</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repudiandae distinctio dolorem, odio iusto voluptates, blanditiis veritatis necessitatibus explicabo earum id, quas facilis architecto eligendi, illo molestiae ut nulla eius!</p>
            <label for="">10000$</label>
            <button >Заказать</button>
          </div>
          <div class="okno-bileta">
            <h2>Заголовок</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repudiandae distinctio dolorem, odio iusto voluptates, blanditiis veritatis necessitatibus explicabo earum id, quas facilis architecto eligendi, illo molestiae ut nulla eius!</p>
            <label for="">10000$</label>
            <button >Заказать</button>
          </div>
        </div>
        </div>
 	
 	<footer>
    <div class="container-fluid">
      <div class="col-md-1"></div>
      <div class="col-md-5">

      </div>
      <div class="col-md-5 app">
        <img src="images/app.png" width="150" class="play1">
        <img src="images/play.png" width="150" class="play1">
      </div>
      <div class="col-md-1"></div>
    </div>
 	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>