<?php
/*
Template Name: VoxDistroIPPBX
*/
get_header(); ?>
    <section class="call_detail_top">
        <div class="wrapper">
            <h1 class="call_detail_top_title"><span class="call_detail_yellow">CDR интерфейс</span><br>
                для отслеживания<br> звонков IP-АТС</h1>
            <a class="mouseWheel" href="#nextBlock" rel="m_PageScroll2id"></a>
        </div>
    </section>
    <section class="call_detail_select" id="nextBlock">
        <div class="wrapper">
            <div class="call_detail_select_body">
                <div class="call_detail_select_item">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/01_icon_customer-service.svg" alt="" class="call_detail_select_item_image">
                    <div class="call_detail_select_item_description">
                        Для каждой компании очень важным фактором является возможность отслеживать звонки (как внутренние, так и внешние).
                        <strong>Особенно это остро необходимо для Call-центров.</strong>
                    </div>
                </div>
                <div class="call_detail_select_item">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/02_icon_funnel.svg" alt="" class="call_detail_select_item_image">
                    <div class="call_detail_select_item_description">
                        <strong>IP-АТС Asterisk предоставляет эту возможность. </strong>
                        Статистика тут обширная и гибкая, что позволяет делать выгрузку по звонкам по различным фильтрам.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call_detail_first">
        <div class="wrapper">
            <div class="call_detail_first_title">Для начала, следует выбрать из меню <strong>«Отчеты»</strong> пункт <strong>«Статистика звонков».</strong></div>
            <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Img01.png" alt="" class="call_detail_first_img">
        </div>
    </section>
    <section class="call_detail_title">
        <div class="wrapper">
            <div class="call_detail_title_litter">В появившемся окне показано множество фильтров. Рассмотрим наиболее важные и полезные из них</div>
        </div>
    </section>
    <section class="call_detail_info">
        <div class="wrapper">
            <div class="detail_info_top">
                <div class="detail_info_top_left">
                    <div class="detail_info_top_left_title">
                        <div class="detail_info_top_number">01</div>
                        <div class="detail_info_top_icon">
                            <img src="/wp-content/themes/voxlink/minimg/call_detail_img/01_calendar.svg" alt="" class="info_top_icon">
                            <div class="detail_info_top_icon_title">Дата звонка</div>
                        </div>
                    </div>
                    <div class="detail_info_top_left_description">
                        Предположим, что у руководителя компании возникла острая необходимость сделать «выгрузку» звонков
                        за прошедший месяц, чтобы выявить, как работает телефония в организации, сколько тратиться на звонки
                        и т. п. Для этого, задаем временной интервал поиска (в данном случае – месяц октябрь) и нажимаем на кнопку поиска.
                    </div>
                </div>
                <div class="detail_info_top_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_01_1.png" alt="" class="image_right">
                </div>
            </div>
            <div class="detail_info_second">
                <div class="detail_info_second_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_01_2.png" alt="" class="image_left">
                </div>
                <div class="detail_info_second_right">
                    <div class="detail_info_second_right_title">
                        Система выдаст нам следующий результат, основанный на заданном интервале поиска.
                    </div>
                    <div class="detail_info_second_right_description">
                        Т.е., в выгрузку попали все звонки, производившиеся в заданный период времени.
                        Руководителю видно, по каким каналам шли звонки, сколько было исходящих звонков,
                        сколько входящих, сколько отвеченных, не отвеченных и т.д.
                    </div>
                </div>
            </div>
            <div class="detail_info_ul">
                <div class="detail_info_li">
                    <div class="info_li_item">
                        <div class="info_li_item_circle"></div>
                        <div class="info_li_item_descr">
                            Запись разговора можно либо прослушать в веб-интерфейсе (для этого нужно установить QuickTime),
                            либо скачать на жесткий диск своего ПК.
                        </div>
                    </div>
                    <div class="info_li_item">
                        <div class="info_li_item_circle"></div>
                        <div class="info_li_item_descr">
                            Внутренний канал показывает, по какому каналу был совершен звонок: это либо <strong>SIP</strong>,
                            либо <strong>DAHDI</strong>, либо <strong>Local</strong>.
                        </div>
                    </div>
                    <div class="info_li_item">
                        <div class="info_li_item_circle"></div>
                        <div class="info_li_item_descr">
                            Графа «Кто звонил» указывает с какого номера (внешнего либо внутреннего) был совершен звонок.
                        </div>
                    </div>
                    <div class="info_li_item w-b">
                        <div class="info_li_item_circle"></div>
                        <div class="info_li_item_descr">
                            Графа «Адресат» показывает куда был совершен звонок.
                        </div>
                    </div>
                </div>
                <div class="detail_info_li">
                    <div class="info_li_item">
                        <div class="info_li_item_circle"></div>
                        <div class="info_li_item_descr">
                            В таблице – «Статус звонка»:
                            <div class="info_li_item_descr_li"><strong>NO ANSWER</strong> – не отвечен</div>
                            <div class="info_li_item_descr_li"><strong>FAILED</strong> – отброшен</div>
                            <div class="info_li_item_descr_li"><strong>BUSY</strong> – занято</div>
                            <div class="info_li_item_descr_li"><strong>ANSWERED</strong> – отвечен</div>
                        </div>
                    </div>
                    <div class="info_li_item w-b">
                        <div class="info_li_item_circle"></div>
                        <div class="info_li_item_descr">
                            Графа «Длительность» указывает длительность звонка (в секундах).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call_detail_info">
        <div class="wrapper">
            <div class="detail_info_top">
                <div class="detail_info_top_left">
                    <div class="detail_info_top_left_title">
                        <div class="detail_info_top_number number_second">02</div>
                        <div class="detail_info_top_icon icon_second">
                            <img src="./minimg/call_detail_img/02_telephone.svg" alt="" class="info_top_icon">
                            <div class="detail_info_top_icon_title">Входящий канал</div>
                        </div>
                    </div>
                    <div class="detail_info_top_left_description">
                        Вписываем нужный канал, например SIP и нажимаем на кнопку «Искать».
                    </div>
                </div>
                <div class="detail_info_top_image">
                    <img src="./minimg/call_detail_img/Screen_02_1.png" alt="" class="image_right">
                </div>
            </div>
            <div class="detail_info_second second_block">
                <div class="detail_info_second_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_02_2.png" alt="" class="image_left">
                </div>
                <div class="detail_info_second_right">
                    <div class="detail_info_second_right_description">
                        Система выдает нам выгрузку по заданному параметру, где <strong>отражены звонки по SIP-каналу.</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call_detail_info">
        <div class="wrapper">
            <div class="detail_info_top">
                <div class="detail_info_top_left">
                    <div class="detail_info_top_left_title">
                        <div class="detail_info_top_number">03</div>
                        <div class="detail_info_top_icon icon_third">
                            <img src="/wp-content/themes/voxlink/minimg/call_detail_img/03_telephone.svg" alt="" class="info_top_icon">
                            <div class="detail_info_top_icon_title">Поиск по внутреннему номеру абонента</div>
                        </div>
                    </div>
                    <div class="detail_info_top_left_description">
                        Также можно вести <strong>мониторинг звонков в организации по внутреннему номеру одного из абонентов</strong>,
                        например, руководителю необходимо отследить
                        все звонки абонента под внутренним номером 370. Для этого он вводит в поисковую графу «370» и жмет поиск.
                    </div>
                </div>
                <div class="detail_info_top_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_03_1.png" alt="" class="image_right">
                </div>
            </div>
            <div class="detail_info_second">
                <div class="detail_info_second_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_03_2.png" alt="" class="image_left">
                </div>
                <div class="detail_info_second_right">
                    <div class="detail_info_second_right_description">
                        На рисунке видны все звонки данного абонента.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call_detail_info">
        <div class="wrapper">
            <div class="detail_info_top">
                <div class="detail_info_top_left">
                    <div class="detail_info_top_left_title">
                        <div class="detail_info_top_number number_fourth">04</div>
                        <div class="detail_info_top_icon icon_fourth">
                            <img src="/wp-content/themes/voxlink/minimg/call_detail_img/04_clock.svg" alt="" class="info_top_icon">
                            <div class="detail_info_top_icon_title">Поиск по длительности разговора</div>
                        </div>
                    </div>
                    <div class="detail_info_top_left_description descr_fourth">
                        Можно произвести <strong>поиск звонков по длительности разговора.</strong> Выбирается диапозон, например, от 30 до 60 секунд
                        <br>
                        <br>
                        В результате, в статистике отобразятся все звонки абонентов, длительность которых была в выбранном интервале времени.
                    </div>
                </div>
                <div class="detail_info_top_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_04.png" alt="" class="image_right">
                </div>
            </div>
        </div>
    </section>
    <section class="call_detail_info">
        <div class="wrapper fifth_wrapper">
            <div class="detail_info_top">
                <div class="detail_info_top_left">
                    <div class="detail_info_top_left_title">
                        <div class="detail_info_top_number fifth_number">05</div>
                        <div class="detail_info_top_icon fifth_icon">
                            <img src="/wp-content/themes/voxlink/minimg/call_detail_img/05_pin-map.svg" alt="" class="info_top_icon">
                            <div class="detail_info_top_icon_title">Поиск по статусу звонка</div>
                        </div>
                    </div>
                    <div class="detail_info_top_left_description">
                        К примеру, нужно найти звонки, на которые не было ответов. Для этого следует выбрать в графе
                        «Статус звонка» пункт «Без ответа».
                        <br>
                        <br>
                        Как видно по картинке, можно выбрать также значения: <strong>«Отвечено»</strong>, <strong>«Занято»</strong> и <strong>«Неудавшийся»</strong>.
                        В первом случае будут отражены все принятые звонки, во-втором случае — все звонки, которые не прошли до адресата,
                        т.к. он был занят, а в-третьем случае — отразятся звонки, которые не прошли до адресата из-за сбоя в системе, либо ошибки.
                        По поиску звонков <strong>без ответа</strong> система выдаст следующую картину.
                    </div>
                </div>
                <div class="detail_info_top_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_05_1.png" alt="" class="image_right">
                </div>
            </div>
            <div class="detail_info_second">
                <div class="detail_info_second_image">
                    <img src="/wp-content/themes/voxlink/minimg/call_detail_img/Screen_05_2.png" alt="" class="image_left">
                </div>
                <div class="detail_info_second_right">
                    <div class="detail_info_second_right_description">
                        Из рисунка видно, что 12 октября 2012 года абонент с внутренним номером 370 звонил на внешний номер,
                        но на звонок в течении 31 секунды так никто и не ответил, после чего звонящий абонент положил трубку.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call_detail_telephone">
        <div class="wrapper">
            <div class="detail_telephone_title">Уточняйте цену у менеджеров VoxLink</div>
            <div class="call_detail_telephone_descr">
                по телефону <strong>+7 (495) 989-85-33</strong> или по электронной почте <strong>team@voxlink.ru</strong>
            </div>
        </div>
    </section>

<?php
$postid = get_the_ID();

$managerid = get_field("manager", $postid);
if (!empty($managerid)) {

    $manager = get_post($managerid);

}
else {

    /*$manager = get_posts(array(
        "post_type"      => "managers",
        "posts_per_page" => 1,
        'orderby'        => 'rand'
    ))[0];*/

    /**
     * Выберем менеджера, у которого Страна совпадает с доменом
     */

    $managers = get_posts(array(
        "post_type"      => "managers",
        //"posts_per_page" => 1,
        'orderby'        => 'rand'
    ));

    //$mans    = [];
    $country = DOMAIN;

    foreach ($managers as $man) {

        $p = get_post_custom($man -> ID);

        if ($p['country'][0] == $country || ($country == 'ru' && $p['country'][0] == '')) {

            //$mans[] = $man -> post_title;

            $manager = $man;

            goto mexit;

        }

    }

    if(!isset($manager)){

        $manager = get_posts(array(
            "post_type"      => "managers",
            "posts_per_page" => 1,
            'orderby'        => 'rand'
        ))[0];

    }

    mexit:

}
?>
    <div class="questions2" id="question2">
        <div class="questions2-left">
            <div class="q2l-block">
                <img src="<?php the_field("img", $manager); ?>">
                <div class="q2l-text">
                    <h3>Здравствуйте!</h3>
                    <p><?php the_field("text", $manager); ?></p>
                </div>
            </div>
            <div class="questions2-table">
                <div class="q2t-row">
                    <div class="q2t-col">Ф.И.О</div>
                    <div class="q2t-col"><?php echo $manager -> post_title; ?></div>
                </div>
                <div class="q2t-row">
                    <div class="q2t-col">Должность</div>
                    <div class="q2t-col"><?php the_field("post", $manager); ?></div>
                </div>
                <div class="q2t-row">
                    <div class="q2t-col">Email</div>
                    <div class="q2t-col">
                        <a href="mailto:<?php the_field("email", $manager); ?>"><?php the_field("email", $manager); ?></a>
                    </div>
                </div>
                <?php
                $phone = get_field("phone1", $manager)
                ?>
                <?php if (!empty($phone)) { ?>
                    <div class="q2t-row">
                        <div class="q2t-col">Тел. городской</div>
                        <div class="q2t-col"><?php echo $phone; ?></div>
                    </div>
                <?php } ?>
                <?php
                $phone1 = get_field("phone2", $manager)
                ?>
                <?php if (!empty($phone1)) { ?>
                    <div class="q2t-row">
                        <div class="q2t-col">Тел. внутрений</div>
                        <div class="q2t-col"><?php echo $phone1; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>


        <div class="questions2-right">
            <form>
                <div style="display: none;">
                    <input type="text" name="fullName" value=""/>
                </div>
                <input type="hidden" name="action" value="submitForm"/>
                <label>
                    Ваше имя
                    <input type="text" name="name"/>
                </label>
                <label>
                    Ваш телефон
                    <input type="tel" name="phone"/>
                </label>
                <label>
                    Ваша почта
                    <input type="text" name="email"/>
                </label>
                <input type="submit" value="Оставить заявку" name="send" class="btn btn-orange2"/>
                <input type="hidden" name="action" value="submitForm">
                <input type="hidden" name="actionName" value="Отправка формы">
                <?php
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                ?>
                <input type="hidden" name="url" value="<?php echo $actual_link; ?>">
            </form>
        </div>

    </div>

<?php get_footer(); ?>