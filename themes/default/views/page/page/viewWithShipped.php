<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = [$model->title, Yii::app()->getModule('yupe')->siteName];
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>

<h1 class="pagetitle"><?= $model->title; ?></h1>
<div class="row">
    <div class="col-lg-12">

        Для удобства наших клиентов наши логисты помогут выбрать оптимальный для клиента способ доставки груза. Доставка
        может организовываться автомобильным, железнодорожным, авиационным или попутным транспортом по дополнительному
        согласованию и с согласия клиента.
        Сроки доставки варьируются от типа заказываемой продукции и удаленности потребителя от производства. Возможен
        самовывоз.
        Чтобы рассчитать стоимость доставки более точно, обратитесь к нашим менеджерам, минимальная стоимоть доставки
        500 рублей. Доставка организуется рекомендуемыми автотранспортными компаниями:
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table>
                <thead>
                <tr>
                    <th colspan="2" style="text-align: center"> Доставка</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> «Автотрейдинг»
                    </td>
                    <td>
                        <a href="http://www.autotrading.ru">http://www.autotrading.ru <a>
                    </td>

                </tr>
                <tr>
                    <td> «РАТЭК»
                    </td>
                    <td>
                        <a href="http://www.rateksib.ru/">www.rateksib.ru <a>
                    </td>

                </tr>
                <tr>
                    <td> «Деловые линии»
                    </td>
                    <td>
                        <a href="http://www.dellin.ru/">www.dellin.ru <a>
                    </td>

                </tr>
                <tr>
                    <td> «Автотрейдинг»
                    </td>
                    <td>
                        <a href="www.autotrading.ru/">www.autotrading.ru <a>
                    </td>

                </tr>
                <tr>
                    <td> «Автотрейдинг»
                    </td>
                    <td>
                        <a href="www.autotrading.ru/">www.autotrading.ru <a>
                    </td>

                </tr>

                </tbody>
            </table>
        </div>


    </div>
    <div class="row">
        <div class="col-lg-12">
            <div style="padding: 10px;">
                До транспортной компании доставляем бесплатно.
                С 1 сентября 2011 года отгрузка транспортной компанией Байкал-сервис производиться не будет
            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-lg-12" style="text-align: center;"><strong> Отгрузка лебедок автомобильным транспортом </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <img src="/uploads/image/7b8a93f59eda25033b04e12cd9424135.JPG"
                 style="width: 200px;display: block;margin: 10px auto;">
        </div>
        <div class="col-lg-6">
            <img src="/uploads/image/e41ca28ceb9b5417b1d84ddf941e7f05.JPG"
                 style="display: block;margin: 0px auto; width: 200px; margin: 10px auto;">
        </div>
        <div class="col-lg-6">
            <img src="/uploads/image/26235bab9a56b99203323fa4a22d7901.jpg"
                 style="display: block;margin:0px auto; width: 200px; margin: 10px auto">
        </div>
        <div class="col-lg-6"><img src="/uploads/image/f32de5a884c291719d836ce44fd94e5c.jpg"
                                   style="margin: 10px auto; width: 200px; display: block;" alt=""></div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="text-align:center;">
            <span><strong>  Отгрузка контейнером </strong> </span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <img src="/uploads/image/1.jpg" alt=""
                 style="display: block;margin: 0px auto; width: 200px; margin: 10px auto;">
        </div>
        <div class="col-lg-6">
            <img src="/uploads/image/2.jpg" alt=""
                 style="display: block;margin: 0px auto; width: 200px; margin: 10px auto;">
        </div>
        <div class="col-lg-6">
            <img src="/uploads/image/3.jpg" alt=""
                 style="display: block;margin: 0px auto; width: 200px; margin: 10px auto;">
        </div>
        <div class="col-lg-6">
            <img src="/uploads/image/4.jpg" alt=""
                 style="display: block;margin: 0px auto; width: 200px; margin: 10px auto;">
        </div>
    </div>
    <div class="row">
        <div style="text-align: center;" class="col-lg-12">
            <strong> Отправка почтой </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <img src="/uploads/image/5.jpg" alt=""
                 style="display: block;margin: 0px auto; width: 200px; margin: 10px auto;">
        </div>

        <div class="col-lg-6">
            <img src="/uploads/image/6.jpg" alt=""
                 style="display: block;margin: 0px auto; width: 200px; margin: 10px auto;">
        </div>
    </div>


</div>
