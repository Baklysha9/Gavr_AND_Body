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
  	

  		<header style="margin-bottom: 3%;">
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

      <div class="container-fluid" style="margin-bottom: 5%;">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 frmorder" style="padding: 0;">
            <div style="font-size: 30px; padding:0 30px 0 30px;"><b>Бронирование билетов<b></div>
            <form>
             
            <br>
            <div style="background-color: #f5f5f5;border:1px solid #ccd3d7; padding:10px 30px 0 30px;">
                <div class="form-group" style="display: inline-block; width: 300px;"> 
                  <label class="lborder1">E-mail</label>
                  <input type="email" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 70px; display: inline-block; width: 300px;">
                  <label class="lborder1">Телефон</label>
                  <input type="phone" class="form-control">
                </div>
                <div  style="display: inline-block;line-height: 14px;font-size: 12px; margin-left: 70px;">Email нужен для отправки вам на почту<br>электронного билета. Контактный<br>телефон — для связи в случае<br> изменения рейса.</div>
              </div>
              <div>
                <div class="col-md-3" style="padding:35px 30px 0 30px; position: relative;">
                  <div>
                  <div style="display: inline-block;line-height: 14px;"><label class="lborder">Взрослые</label><br><div style="display: inline-block;line-height: 14px;font-size: 12px;">старше 12 лет</div></div>
                  <div style="display: inline-block;position: absolute;margin-left: 30px; top:35px;"><input style="width: 100px;text-align: center;font-size: 22px;" class="form-control" type="number" min="0" value="1"></div>
                </div>
                <div style="margin-top: 25px; ">
                  <div style="display: inline-block;line-height: 14px;"><label class="lborder">Дети</label><br><div style="display: inline-block;line-height: 14px;font-size: 12px;">младше 12 лет</div></div>
                  <div style="display: inline-block;position: absolute;margin-left: 68px; top: 95px;"><input style="width: 100px;text-align: center;font-size: 22px;" class="form-control" type="number" min="0" value="0"></div>
                </div>
                <div style="margin-top: 25px; ">
                  <div style="display: inline-block;line-height: 14px;"><label class="lborder">Младенцы</label><br><div style="display: inline-block;line-height: 14px;font-size: 12px;">младше 2 лет</div></div>
                  <div style=" display: inline-block;position: absolute;margin-left: 32px; top: 155px;"><input style="width: 100px;text-align: center;font-size: 22px;" class="form-control" type="number" min="0" value="0"></div>
                </div>
                </div>
                <div class="col-md-9" style="padding:10px 30px 0 5px; position: relative;">
                  <div class="form-group" style="margin-left: 35px; display: inline-block; width: 155px;">
                  <label class="lborder1">Имя</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 35px; display: inline-block; width: 155px;">
                  <label class="lborder1">Фамиилия</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 35px; display: inline-block; width: 155px;">
                  <label class="lborder1">Отчество</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 35px; display: inline-block; width: 155px;">
                  <label class="lborder1">Дата рождения</label>
                  <input type="date" class="form-control">
                </div>
              <div  style="line-height: 14px;font-size: 12px; margin-left: 35px;"> 
              Если вы летите с детьми — выберите сколько детей и младенцев с вами летит.<br> Возраст пассажира: количество полных лет на 9 марта 2018 г.
</div>
                </div>
                </div>
              </form>
              <div class="container-fluid" style="padding: 0;">
                <div class="col-md-12" style="padding: 0;">
              <div style="border-radius:0 0 10px 10px ; border:1px solid #ccd3d7;padding:10px 30px 10px 30px;position: relative;">
                  <div style="display: inline-block;">Общая стоимость билетов: <label class="lborder" style="margin-left: 5px;">2 441&#8381;</label></div>
                  <div style=" display: inline-block; position: absolute; right: 10px;"><a class="btn" style="background-color: #fd611b;color: white; " >Оформить</a></div>
                </div>
                </div>
              </div>
          </div>

          <div class="col-md-1"></div>
        </div>

      </div>


    
 	
 	<footer class="ft2">
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