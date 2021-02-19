<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Практика Закиров А.А. </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>
			<a id=about_me></a>
            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/my.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
					<p>Я учусь на потоке 3</p>
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
					<a id=my_portfolio></a>
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br><br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
						$GLOBALS["c"] = $c;
                        echo 'Просто так складываеваем 10 и 20, чтобы получить ', $GLOBALS["c"], ', ';
                    ?>                  
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text" align = center>
				<a id="my_articles"></a>
                    <b>Нравственный человек</b>
					<br>Н.А. Некрасов
<br>‎<br>1
<br><br>Живя согласно с строгою моралью,
<br>Я никому не сделал в жизни зла.
<br>Жена моя, закрыв лицо вуалью,
<br>Под вечерок к любовнику пошла.
<br>Я в дом к нему с полицией прокрался
<br>И уличил… Он вызвал — я не дрался!
<br>Она слегла в постель и умерла,
<br>Истерзана позором и печалью…
<br>Живя согласно с строгою моралью,
<br>10 Я никому не сделал в жизни зла.
<br><br>2
<br>Приятель в срок мне долга не представил.
<br>Я, намекнув по-дружески ему,
<br>Закону рассудить нас предоставил;
<br>Закон приговорил его в тюрьму.
<br>В ней умер он, не заплатив алтына,
<br>Но я не злюсь, хоть злиться есть причина!
<br>Я долг ему простил того ж числа,
<br>Почтив его слезами и печалью…
<br>Живя согласно с строгою моралью,
<br>20 Я никому не сделал в жизни зла.
<br><br>‎3
<br><br>Крестьянина я отдал в повара,
<br>Он удался; хороший повар — счастье!
<br>Но часто отлучался со двора
<br>И званью неприличное пристрастье
<br>Имел: любил читать и рассуждать.
<br>Я, утомясь грозить и распекать,
<br>Отечески посек его, каналью;
<br>Он взял да утопился: дурь нашла!
<br>Живя согласно с строгою моралью,
<br>30 Я никому не сделал в жизни зла.
<br><br>‎4
<br><br>Имел я дочь; в учителя влюбилась
<br>И с ним бежать хотела сгоряча.
<br>Я погрозил проклятьем ей: смирилась
<br>И вышла за седого богача.
<br>Их дом блестящ и полон был как чаша;
<br>Но стала вдруг бледнеть и гаснуть Маша
<br>И через год в чахотке умерла,
<br>Сразив весь дом глубокою печалью…
<br>Живя согласно с строгою моралью,
<br>40 Я никому не сделал в жизни зла…
<br><br><right>1847</right>
                </p>
				<p>
				<a id="links"></a>
				<br><b>Ссылки на мои любимые ресурсы:</b>
				<br><a href="https://www.rbc.ru/" target="_blank">RBC</a>
				<br><a href="https://autoreview.ru/" target="_blank">Авторевю</a>
				<br><a href="https://mail.ru/" target="_blank">Mail.ru</a>
				</p>
				<p>
				<a id="contacts"></a>
				<br><b>Контакты:</b>
				<br><br><a href="emailto:zakirovaa@skillfactory.com">Электронная почта</a>
				<br><a href="tel:+792912345678">+792912345678</a>
				</p>
			</div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
