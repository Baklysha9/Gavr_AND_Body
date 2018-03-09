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

      <div class="container-fluid ">
      <div class="row" style="background:linear-gradient(to left,#00519c,#0063bb); text-align: center;"> 
        <div class="col-md-1" style="width: 100%;"></div>
        <div class="col-md-10" style="width: 100%;">
          <form>
                <label style="text-align: left; color:white;">Откуда
                <input type="text" class="form-control frm" name=""></label>
                <label style="text-align: left;color:white;">Куда
                <input type="text" class="form-control frm"  name=""></label>
                <label style="text-align: left;color:white;">Вылет
                <input type="date" class="form-control frm"  name=""></label>
                <label style="text-align: left;color:white;">Прилет
                <input type="date" class="form-control frm" name=""></label>
                <label style="text-align: left;color:white;">Количество
                <input type="number" min="1" class="form-control frm" name=""></label>
              </form>
        </div>
        <div class="col-md-1" style="width: 100%;"></div>
      </div>
      <div class="row" style="background:white; text-align: center;"> 
        <div class="col-md-1" style="width: 100%;"></div>
        <div class="col-md-10" style="width: 100%;">
              <img src="images/30.gif" alt="">
        </div>
        <div class="col-md-1" style="width: 100%;"></div>
      </div>
    </div>


        <div class="container-fluid logoSign">
        <div class="row"> 
          <div class="col-md-1"></div>
        <div class="col-md-3 nav" style="background: #f1f1f1; height: 405px; position: relative; ">
          <form action="handler.php">
          <div>
        <label style="padding:10px; font-size: 18px; text-align: left; color: #3f3f3f;">Способ оплаты</label>
          <select class="form-control" name="" id="" style="width: 160px;position: absolute; right: 20px;top:10px;">
            <option value="">По карте</option>
            <option value="">Наличными</option>
            <option value="">Яндекс.Деньги</option>
            <option value="">WebMoney</option>
          </select >
        </div>
          <br>
          <div>
             <label style="padding: 10px; padding-top: 0px;font-size: 18px; color: #3f3f3f;" >Багаж</label>
          <select class="form-control" name="" id="" style=" width: 160px;position: absolute; right: 20px; top:65px;">
            <option value="">Всё</option>
            <option value="">Багаж и ручная кладь</option>
            <option value="">Без багажа</option>
          </select>
        </div>
        <div>
             <label style="padding: 10px; padding-top: 15px;font-size: 18px; color: #3f3f3f;">Пересадки</label>
          <select class="form-control" name="" id="" style=" width: 160px;position: absolute; right: 20px; top:120px;">
            <option value="">Без пересадок</option>
            <option value="">1 пересадка</option>
            <option value="">2 пересадки</option>
          </select>
          <div style="margin-left: 10px; margin-top: 15px;"> 
            <label style="font-size: 18px; color: #3f3f3f;">Цена</label>
            <br>
          <div class="dv">
             <input type="text" class="form-control frm2" name=""></label>
          </div>
          &mdash;
          <div class="dv">
             <input type="text" class="form-control frm2" name=""></label>
          </div>
        </div>
        </div>
        <div style="margin-top: 15px;">
        <div style="margin:10px; margin-top: -10px; display: inline-block; ">
            <br>
           <p style="font-size: 18px;color: #3f3f3f;"><b>Пересадки</b></p>
           <p><input name="dzen" type="radio" value="nedzen"> Без пересадок</p>
           <p><input name="dzen" type="radio" value="dzen"> 1 пересадка</p>
           <p><input name="dzen" type="radio" value="pdzen"> 2 пересадки</p>
         </div> 
         <div style="margin-left: 50px;  margin-top: -10px; display: inline-block;">
            <br>
           <p style="font-size: 18px;color: #3f3f3f;"><b>Класс</b></p>
           <p><input name="dzen" type="radio" value="nedzen"> Эконом</p>
           <p><input name="dzen" type="radio" value="dzen"> Бизнес</p>
           <p><input name="dzen" type="radio" value="pdzen"> Первый</p>
         </div> 
       </div>
           </form> 

          </div>
        <div class="col-md-7" >
          <div class="okno-bileta"  >
           <div style="display:inline-block; position:absolute;right: 185px; left: 15px; ">
            <div style="margin-bottom: 25px;">
              <div style="display: inline-block; line-height: 5px;">
                <h1><b>7:30</b></h1>
              <p>Ростов-на-Дону</p>
                7 мар 2018, Ср
              </div>
              <div style="display: inline-block; ">
                <p style="position: absolute; top: 15%; left: 43%;color: #fd611b; letter-spacing: 1px;"><b>Всего 1ч 50м</b></p>
                <div class="hr1" style="position: absolute;top: 25%;left: 25%;"></div>
              </div>
              <div style="display: inline-block;float: right;line-height: 5px;">
                <h1><b>9:20</b></h1>
              <p>Москва</p>
                7 мар 2018, Ср
              </div>
            </div>
            <div style="border-top: 1px dashed #747474;">
              <div style="margin-bottom: 25px;">
              <div style="display: inline-block; line-height: 5px;">
                <h1><b>22:25</b></h1>
              <p>Ростов-на-Дону</p>
                9 мар 2018, Пт
              </div>
              <div style="display: inline-block; ">
                <p style="position: absolute; top: 65%; left: 43%;color: #fd611b; letter-spacing: 1px;"><b>Всего 1ч 50м</b></p>
                <div class="hr1" style="position: absolute;top: 75%;left: 25%;"></div>
              </div>
              <div style="display: inline-block;float: right;line-height: 5px;">
                <h1><b>00:15</b></h1>
              <p>Москва</p>
                10 мар 2018, Сб
              </div>
            </div>
            </div>
           </div>
           <div style=" text-align: center; display:inline-block; width: 170px;  height: 240px; position: absolute; right: 0px; border-left: 1px solid #747474;">
              <a href="order.php" class="btn orderBut" >Купить за<br><b>10000$</b></a>
              <p style="position: absolute;top: 55%; left: 10%;">Осталось 5 билетов</p>
            </div>
          </div>
          
          <div class="okno-bileta"  >
           <div style="display:inline-block; position:absolute;right: 185px; left: 15px; ">
            <div style="margin-bottom: 25px;">
              <div style="display: inline-block; line-height: 5px;">
                <h1><b>7:30</b></h1>
              <p>Ростов-на-Дону</p>
                7 мар 2018, Ср
              </div>
              <div style="display: inline-block; ">
                <p style="position: absolute; top: 15%; left: 43%;color: #fd611b; letter-spacing: 1px;"><b>Всего 1ч 50м</b></p>
                <div class="hr1" style="position: absolute;top: 25%;left: 25%;"></div>
              </div>
              <div style="display: inline-block;float: right;line-height: 5px;">
                <h1><b>9:20</b></h1>
              <p>Москва</p>
                7 мар 2018, Ср
              </div>
            </div>
            <div style="border-top: 1px dashed #747474;">
              <div style="margin-bottom: 25px;">
              <div style="display: inline-block; line-height: 5px;">
                <h1><b>20:05</b></h1>
              <p>Ростов-на-Дону</p>
                9 мар 2018, Пт
              </div>
              <div style="display: inline-block; ">
                <p style="position: absolute; top: 65%; left: 43%;color: #fd611b; letter-spacing: 1px;"><b>Всего 1ч 50м</b></p>
                <div class="hr1" style="position: absolute;top: 75%;left: 25%;"></div>
              </div>
              <div style="display: inline-block;float: right;line-height: 5px;">
                <h1><b>21:55</b></h1>
              <p>Москва</p>
                9 мар 2018, Пт
              </div>
            </div>
            </div>
           </div>
           <div style=" text-align: center; display:inline-block; width: 170px;  height: 240px; position: absolute; right: 0px; border-left: 1px solid #747474;">
              <button class="btn orderBut" >Купить за<br><b>10000$</b></button>
              <p style="position: absolute;top: 55%; left: 10%;">Остался 1 билет</p>
            </div>
          </div>

          <div class="okno-bileta"  >
           <div style="display:inline-block; position:absolute;right: 185px; left: 15px; ">
            <div style="margin-bottom: 25px;">
              <div style="display: inline-block; line-height: 5px;">
                <h1><b>7:45</b></h1>
              <p>Ростов-на-Дону</p>
                7 мар 2018, Ср
              </div>
              <div style="display: inline-block; ">
                <p style="position: absolute; top: 15%; left: 43%;color: #fd611b; letter-spacing: 1px;"><b>Всего 1ч 50м</b></p>
                <div class="hr1" style="position: absolute;top: 25%;left: 25%;"></div>
              </div>
              <div style="display: inline-block;float: right;line-height: 5px;">
                <h1><b>9:30</b></h1>
              <p>Москва</p>
                7 мар 2018, Ср
              </div>
            </div>
            <div style="border-top: 1px dashed #747474;">
              <div style="margin-bottom: 25px;">
              <div style="display: inline-block; line-height: 5px;">
                <h1><b>22:25</b></h1>
              <p>Ростов-на-Дону</p>
                9 мар 2018, Пт
              </div>
              <div style="display: inline-block; ">
                <p style="position: absolute; top: 65%; left: 43%;color: #fd611b; letter-spacing: 1px;"><b>Всего 1ч 50м</b></p>
                <div class="hr1" style="position: absolute;top: 75%;left: 25%;"></div>
              </div>
              <div style="display: inline-block;float: right;line-height: 5px;">
                <h1><b>00:15</b></h1>
              <p>Москва</p>
                10 мар 2018, Сб
              </div>
            </div>
            </div>
           </div>
           <div style=" text-align: center; display:inline-block; width: 170px;  height: 240px; position: absolute; right: 0px; border-left: 1px solid #747474;">
              <button class="btn orderBut" >Купить за<br><b>10000$</b></button>
              <p style="position: absolute;top: 55%; left: 10%;">Осталось 6 билетов</p>
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