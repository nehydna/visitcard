<?php
/*
Template Name: Couch
Template Post Type: post, page, product
*/
?>

<!DOCTYPE html>
<html>
 <head> 
     <title>Главная страница HTML-сайта</title>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="MobileOptimized" content="320">
     <meta name="description" content="Описание" />
     <meta name="keywords" content="Ключевые слова" />
     <meta name = "robots" content = "index,follow" />
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/couch/css/style.css">
 </head>
  <body>
    <header>
       <section class="header">
            <div class="listMe">
                <div class="contain-me">
                    <div><p>01</p></div>
                    <div class="rotate">
                       <div class="progress-value">
                           <div class="progress"></div>
                           </div>
                    </div>
                    <div><p>12</p></div>
                 </div>
                 <div class="contain-list">       
                    <div class="side ellipse"><img src="<?php bloginfo('template_url'); ?>/couch/img/ellipse.png" alt=""></div>
                    <div><span class="rotate">листайте вниз</span></div>
                    <div class="side arrow"> <img src="<?php bloginfo('template_url'); ?>/couch/img/arrow.png" alt="стрелка вниз"></div>
                 </div>    
            </div>
            <div class="mainHeader">
                <div class="header-top">
                    <div><p class="logo">ABcoach</p>
                    </div>
                    <div><p>Образовательный проект от 
                        Международного Центра 
                        подготовки коучей при РУДН</p>
                    </div>
                    <div>
                    <img src="<?php bloginfo('template_url'); ?>/couch/img/man.png" class="man" alt="иконка"><p>г. Москва, м. Шаболовская, 
                    ул. Орджоникидзе, 3</p>
                    </div>
                    <div class="interactive">
                        <img src="<?php bloginfo('template_url'); ?>/couch/img/handset.png" class="handset" alt="трубка">
                        <label for="a">
                        <p class="tell">+7 (000) 000-00-00</p></label>
                         <a href="#" class="call">заказать звонок</a>
                     
                      <div class="popup popup--unavailable">
                           <fieldset>
                             <button type="button" class="close-form"></button>
                              <p class="sent--message"></p>
                              <form name="myForm" action="#" method="post" class="form"> 
                                  <input type="tel" class="user-phone" placeholder="Введите ваш номер" required><br>
                                  <button type="submit" value="Send" class="send-form">Отправка</button>
                              </form>
                        </fieldset>
                      
                      </div>
                      
                    </div>
                </div>
                <div class="header-bottom">
                    <h1>
                  СТАНЬТЕ СЕРТИФИЦИРОВАННЫМ 
                  КОУЧЕМ И КОНСУЛЬТАНТОМ  
                    </h1>
                    <ul><h5>Международный центр подготовки коучей  от РУДН</h5>
                    <li>Наш диплом признается в 
                    более 170 странах мирах</li>
                    <li>Статус выпускника,  
                    уважаемого во всем мире ВУЗа</li>
                    <li>Профессиональные коучи и консультанты 
                    зарабатывают от 5 000 руб. за 1 консультацию</li>
                    </ul>
                    <button type="submit" class="request">Оставить заявку</button>
               </div>
            </div>
        </section>
    </header>
    <section class="promo">
       <h2><span class="beige">Реализуются</span> совместно с</h2>
        <div class="partners">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/couch/img/rudn.png" alt="Российский университет дружбы народов"><p>Российский университет дружбы народов</p>
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/couch/img/eca.png" alt="ЕCA rus (Германия)">
                <p>ЕCA rus (Германия)</p>
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/couch/img/afcUK.png" alt="Association for coaching (Великобритания)">
                <p>Association for coaching (Великобритания)</p>
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/couch/img/mentalUSA.png" alt="Mental Research Institute (США)"><p>Mental Research Institute (США)</p>
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/couch/img/ici.png" alt="Акредитована в International  Association of Coaching Institutes (Германия)" class="round"><p>Акредитована в International  Association of Coaching Institutes (Германия)</p>
            </div>
        </div>
        <div class="contain">
             <h2><span class="beige">Профессиональный коучинг<br>
             </span>в очной или заочной форме</h2>
             <h3>Спезализация на выбор:</h3>
             <div class="specifications">
                <div class="shine"><img src="<?php bloginfo('template_url'); ?>/couch/img/portfel.png" alt="портфель" width="50%">
                     <p>Системное бизнес консультирование</p>
                </div>
                <div class="shine"><img src="<?php bloginfo('template_url'); ?>/couch/img/wordPad.png" alt="блокнот" width="50%">
                     <p>Основы психологического           консультирования</p>
                </div>
                <div class="shine"><img src="<?php bloginfo('template_url'); ?>/couch/img/girlCouch.png" alt="студентка" width="40%">
                     <p>Нейрокоучинг детей и подростков</p>
                </div>
            </div> 
        </div> 
    </section>
    <section class="certificate">
        <h2><span class="beige">ДОКУМЕНТЫ, </span>КОТОРЫЕ 
         ПОЛУЧАЕТ ВЫПУСКНИК,</h2>
        <p class="headering">представляют ценность в 170 странах мира: ЕС, США,  РФ и др. </p>
        <div class="certificate-contain">
            <div>
              <img src="<?php bloginfo('template_url'); ?>/couch/img/bluePass.png" alt="диплом">
              <p><strong>Диплом РУДН <br></strong>Дает право на ведение нового вида профессиональной                   деятельности</p>
             </div>
             <div>
                <img src="<?php bloginfo('template_url'); ?>/couch/img/UKsert.png" alt="сертификат от международной ассоциации Association for Coaching (Великобритания)">
                 <p><strong>Сертификат</strong><br>
                 <p>от международной ассоциации Association for Coaching (Великобритания)</p>
             </div>
             <div>
                 <img src="<?php bloginfo('template_url'); ?>/couch/img/euroSert.png" alt="сертификат от Европейской ассоциации коучинга по медиативному 
                 коучингу (Германия)">
                 <p><strong>Сертификат</strong><br> от Европейской ассоциации коучинга по медиативному 
                 коучингу (Германия)
                 </p>
             </div>
             <div>
                 <img src="<?php bloginfo('template_url'); ?>/couch/img/MUsert.png" alt="сертификат международного образца по системному и           организационному консультированию от Mental Research Institute (США)">
                 <p><strong>Сертификат</strong>
                    международного образца по системному и           организационному консультированию от Mental           Research Institute (США)</p><br>
                 <p>По желанию, за доп.плату
                 </p>
             </div>
             <div>
                 <img src="<?php bloginfo('template_url'); ?>/couch/img/iciSert.png" alt="ici international сертификат">
                 <p><strong>ici international сертификат</strong>   Членство в международной 
                     асоциации ICI
                 </p>
             </div>
         </div>
    </section>
    <footer>   
          <div>
           <p>После прохождения программы, вы получаете статус выпускника одного из самых лучших ВУЗов России. 
           Профессия “Коуч” в ближайшее время будет занесена  в Официальный реестр профессий. Возможности официально работать без документов Государственного образца не будет.</p>
           <p>Альянс организован и объединяет крупнейшие ассоциации (АС) Association for Coaching, ICF (Международной Ассоциацией Коучинга) и «European Mentor and Coaching Council».</p>
           <p>Все 3 ассоциируется признают сертификаты друг друга.</p>
       </div>
    </footer>
    <script src="<?php bloginfo('template_url'); ?>/couch/couch.js"></script>
  </body>

</html>