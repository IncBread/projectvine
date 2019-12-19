<!DOCTYPE html>
<html lang="ru">
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="icon">
    <meta charset="utf-8">
    <title>Winowome</title>
  </head>
  <header class="second-index">
  </header>
  <body>
<h1 class="title kazino-title">Винное казино -
<br> как оно проходит?</h1>


  <div class="kazino">
  <div class="kazino-first">
  <h2>В НАЧАЛЕ НАЛИВАЮ ПУЗЫРИКИ</h2>
  <img src="kazino2.JPG" width="450">
  <p class="kazino-first-p">
Ходят слухи, что бокал холодного игристого вина поднимает настроение за считанные секунды.  </p>
</div>

<div class="kazino-second">
<h2>СУТЬ ИГРЫ</h2>
<img src="kazino1.JPG" width="450">
<p class="kazino-first-p kazino-second-p">
  Вы не будете знать, что я наливаю в бокалы.
   И знания вина не будут вашим преимуществом. Вы полагаетесь на вашу интуицию и на подсказки сомелье,
   которые помогут сделать ставку на сорт винограда, год сбора урожая и страну рождения вина.
 </p>
</div>

<div class="kazino-first">
<h2 class="kazino-first-second">ПРИЗ</h2>
<img src="kazino5.JPG" width="450">
<p class="kazino-first-p kazino-third-p">
  Уверена, именно вы поймаете удачу за хвост и соберёте наибольшее количество фишек!
 За это в конце игры научу открывать игристое вино саблей или бокалом!
  Будете эффектно взрывать игристое на вечеринках с друзьями.
  </p>
</div>
</div>
<div class="registration">
  <h1>Запись на игру</h1>
  <form method="post" action="mailto:lukanichevg@gmail.com">
   <input type="text" required placeholder="Имя">
   <br>
   <input type="text" required placeholder="Фамилия">
   <br>
   <input type="text" required placeholder="E-mail">
   <br>
   <select name="party" placeholder="fff">
     <option class="select-disabled" value="Тип мероприятия">Тип мероприятия</option>
     <option>День рождения</option>
     <option>Корпоратив</option>
     <option>Свадьба</option>
     <option>Мальчишник</option>
     <option>Девичник</option>
     <option>Другое</option>
      </select>
    <input class="peoplenumber" type="text" required placeholder="Количество людей">
    <br>
    <select>
     
     <option class="select-disabled second-select">Дата</option>
     <option><?php echo strftime("%d %B", time() + (24*60*60));
     echo date("j F", time() + (24*60*60));?></option>
     <option><?php echo date("j F", time() + (48*60*60)); ?></option>
     <option><?php echo date("j F", time() + (72*60*60)); ?></option>
     <option><?php echo date("j F", time() + (96*60*60));; ?></option>
     <option><?php echo date("j F", time() + (120*60*60)); ?></option>
     <option><?php echo date("j F", time() + (144*60*60)); ?></option>
     <option><?php echo date("j F", time() + (168*60*60)); ?></option>

    </select>
    <input class="submit" type="submit" name="" value="Отправить">
 </form>
  </div>


  </body>
  <footer>
    <div class="footer">
    <h1>Контакты</h1>
    <p class="kontacts" id="kontacts">Наш адрес: дом улица
    <br>Телефон: +7 921 582 76 19
    <br>E-mail: winowomne@gmail.com</p>
    </div>
    <div class="icons">
     <p>
    <a href="https://instagram.com/winowomne?igshid=vybki93nxeg0">
       <img src="icons8-instagram-50.png" alt="Инстаграм">
    </a>
    <a href="https://www.youtube.com/channel/UCKulyh0vyjFBb9KVgjHePvQ">
       <img src="icons8-play-button-50.png" alt="Ютуб">
    </a>
    <a href="https://t.me/efirmalina">
      <img src="icons8-telegram-app-50.png" alt="Телеграм">
    </a>
    <a href="https://www.facebook.com/winowomne/?modal=admin_todo_tour">
        <img src="icons8-ios-50.png" alt="Фейсбук">
    </a>
     </p>
    </div>
  </footer>
</html>
