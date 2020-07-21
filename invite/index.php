<?php get_header(); ?>

        <div class="content-block">
        
        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

            <h2> <?php the_title(); ?></h2>
            <div class="content-block1">
                <div class="text-block">
                    <h2>Конечно, это не...</h2>
                    <p>коммерческий проект, не всеобъясняющий лендинг, а простая статичная страничка -  визитка верстальщика (пока)...</p>
                    <p>Здесь только общая информация обо мне и моих работах</p>
                    <p>Заходите, располагайтесь.
                    </p>
                    <p>Все ссылки кликабельны, в меню линки ведут на информацию обо мне и на примеры моей верстки</p>
                   
                </div>
                <img src="<?php bloginfo('template_url'); ?>/img/programmirovanie-kak-novyi-vid-chelovecheskoi-deyatelnosti.jpg" alt="" width="50%" height="auto">
            </div>
        
        
        <div class="Explorer-2">
            <img src='<?php bloginfo('template_url'); ?>/img/abstract.png' class="abstra" alt="" width="60%" >
            <div class="absolute">
               
              <h2>Explorer</h2>
              
              <div class="text">
                <p>Прежде всего хочется отметить, что я являюсь, как это называют, "вечным студентом".</p>
                <p>Никогда в детстве не думала, что меня когда-нибудь захватит процесс обучения.</p>
                <p>Но программирование затягивает и для "вечного студента" оно является спасением от информационного голода. </p>
                </div>
            </div>
        </div>
        <div class="mySkills-3">
            <h2>My skills</h2>
            <div class="about">
                <h3>If you are looking for...</h3>
                <p>Навыки - величина весьма изменчивая, поскольку я, как уже упоминала выше, очень люблю учиться и прокачивать "скиллы".</p>
                    
                    <p>
                        Из актуальных навыков можно отметить:</p>
                       <ul>

                          <li>практикую адаптивную верстку (стандартные html, css, javascript);</li>
                          <li>умею использовать бутстрап (четвертый который);</li>
                          <li> куда же без английского (english уровня upper-intermediate);</li>
                          <li>SASS - для облегчения работы.</li>
                           <li>интегрирую сайты на CMS (в частности,Wordpress);</li>
                      </ul>
                    <p>                 

                    Кроме того, активно изучаю: </p>
                    
                    <ul>   
                      <li>библиотеку jquery;</li>
                      <li>AJAX.</li>
                    </ul> 

                    А самое главное - я все это активно применяю на практике!
                    

                    На очереди в обучении: 
                    <ul>
                    
                      <li>базы данных;</li>              
                      <li>РНР (да, бэкенд интересует в той же степени, что и фронтенд);</li>
                      <li>Python.</li>
                    </ul> 

                
                
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
       
    </div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/b.js"></script>
</body>

</html>
