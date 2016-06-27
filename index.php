<!DOCTYPE html>
<html>
<?php require_once ("header.php") ?>


<body style="background-color: sandybrown;">
<div id="carousel" class="carousel slide myBackgroundCarousel" >
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide="0"></li>
        <li class="active" data-target="#carousel" data-slide="1"></li>
        <li data-target="#carousel" data-slide="2"></li>
        <li data-target="#carousel" data-slide="3"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item" align="center">
            <img src="http://scouteu.s3.amazonaws.com/cards/images_vt/merged/vidpochinok_naiylipsha_pratsya_0.jpg" alt="відпочинок">
            <div class="carousel-caption">
                <h3>відпочинок</h3>
                <p>відпочинок</p>
            </div>
        </div>
        <div class="item active" align="center">
            <img src="http://ostriv.in.ua/images/publications/4/3377/1320499520.gif" alt="начання">
            <div class="carousel-caption">
                <h3>начання</h3>
                <p><b>Отак вивчаю новий предмет</b></p>
            </div>
        </div>
        <div class="item" align="center">
            <img src="http://velo.zhzh.info/_nw/1/68171439.jpg" alt="хобі">
            <div class="carousel-caption">
                <h3>хобі</h3>
                <p>хобі</p>
            </div>
        </div>
        <div class="item" align="center" >
            <img src="http://ekonomski.mk/wp-content/uploads/2014/11/den-programeri.jpg" alt="робота">
            <div class="carousel-caption">
                <h3>робота</h3>
                <p>робота</p>
            </div>
        </div>
    </div>

    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>
<br>
<div class="container myBackgroundBlock1">
    <div class="row">
        <div class="col-lg-5">
            <img src="http://news.pl.ua/uploads/posts/2013-04/1364800416_stypendija_miskrady.jpg">

        </div>
        <div class="col-lg-7" style="margin-top: 10%">
            <label style="margin-top: 20px; background-color: #dff0d8">
                Навча́ння — це організована, двостороння діяльність, спрямована на максимальне засвоєння та усвідомленн
                я навчального матеріалу і подальшого застосування отриманих знань, умінь та навичок на практиці.
                Цілеспрямований процес передачі і засвоєння знань, умінь, навичок і способів пізнавальної діяльності людини.[1]
            </label>

            <br>
            <br>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myLessons">Дізнатись більше</button>
        </div>
    </div>
</div>
<br>
<div class="container myBackgroundBlock2">
    <div class="row">

        <div class="col-lg-7" style="margin-top: 10%">
            <label style="margin-top: 20px; background-color: #dff0d8">
                Велосипе́длі) — це транспортний засіб, який приводить в рух сила людських м'язів, що передається на
                ведуче(і) колесо(а). Зазвичай велосипеди мають два колеса; бувають також триколісні велосипеди та інші,
                екзотичніші — одноколісні, чотириколісні тощо.
            </label>

            <br>
            <br>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myBicycle">Дізнатись більше</button>
        </div>
        <div class="col-lg-5">
            <img src="http://daler.ru/pictures/1/2560x1920/Velosipedist-na-zakate-10549.jpg" width="420" height="500">

        </div>
    </div>
</div>


<!-- Modal block 1-->
<div class="modal fade" id="myLessons" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Навча́ння</h4>
            </div>
            <div class="modal-body">
                <p>Підходи до викладання та навчанн
                    Лекції, практичні заняття, семінари, лабораторні роботи в малих групах, самостійна робота на
                    основі підручників, навчальних посібників, методичних розробок та конспектів, консультації із
                    викладачами, дистанційних форм навчання, підготовка та здача державної атестації у вигляді державного іспиту.
                    Ділові ігри, заняття-екскурсії, заняття-заліки, заняття-лекції, заняття-діалоги, заняття-семінари, домашня робота.
                    Наочний матеріал
                    Схеми, таблиці, малюнки. Особливий інтерес викликають відеофільми.
                    Система оцінювання
                    Письмові та комбіновані (усно-письмові) екзамени, диференційовані заліки, лабораторні звіти,
                    поточний та модульний контроль, курсові проекти та роботи, розрахунково-графічні роботи,
                    підготовка наочних презентацій, підготовка індивідуальних завдань, рефератів, звіти з практики, державний іспит.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Х</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal block 2-->
<div class="modal fade" id="myBicycle" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">велосипед</h4>
            </div>
            <div class="modal-body">
                <p>
                    До 1817 року
                    Так, малюнок двоколісного велосипеда з кермом і ланцюговою передачею, що приписується Леонардо да Вінчі
                    чи його учню Джакомо Капротті, є, на думку багатьох, фальсифікацією.[6]
                    Зображення на вітражі церкви Stoke Poges, яке датується шістнадцятим чи сімнадцятим століттям,
                    показує ангела на чомусь схожому на самокат. Але цей «самокат», певно, був одноколісною колісницею,
                    що асоціюються з херувимами і серафимами в іконографії середніх віків. Самокат ніби 1791 року, який
                    приписують графу де Сівраку (Comte de Sivrac) — фальсифікація 1891 року, автором якої був
                    французький журналіст Луї Бодрі. Насправді ніякого графа де Сіврака не було, прототипом його став Джин
                    Генрі Сіврак, що отримав у 1817 році дозвіл на імпорт чотириколісних екіпажів.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Х</button>
            </div>
        </div>
    </div>
</div>
<div>
    <br>
<?php include ("footer.php") ?>
</div>
</body>
</html>