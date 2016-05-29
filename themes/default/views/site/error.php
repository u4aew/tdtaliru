<?php $this->title = [Yii::t('default', 'Error') . ' ' . $error['code'], Yii::app()->getModule('yupe')->siteName]; ?>

<h2><?= Yii::t('default', 'Error') . ' ' . $error['code']; ?>!</h2>
<?php
switch ($error['code']) {
    case '404':
        $msg = Yii::t(
            'default',
            '<p style="text-align:center"> <img style="width:200px;height:auto;" src="/uploads/image/6e1e37b6136f503e45591b4987b604ff.jpg"> </p> <p style="font-size:28px; text-align:center;">Оу... Кажется такой страницы больше не существует, <br> попробуйте воспользоваться нашим поиском или {link}.</p>',
            [
                '{link}' => CHtml::link(
                    Yii::t('default', 'перейдите в каталог'),
                    $this->createUrl('./store'),
                    [
                        'title' => Yii::t('default', 'Каталог'),
                        'alt'   => Yii::t('default', 'Каталог'),
                    ]
                ),

            ]
        );
        break;
    default:
        $msg = $error['message'];
        break;
}
?>

<p style="font-size:24px">
    <?= $msg; ?>
</p>
<div style="padding:10px;text-align:center; width:70%; margin:0px auto;">
	<span style="text-align:left;color:black;font-weigth:bold;font-size:20px"><span style="color:red">Б</span>АРНАУЛЬСКИЕ ТАЛИ </span> <p><span style="color:black">поиск по продукции </span></p>
                                            <?php $this->widget('application.modules.store.widgets.SearchProductWidget'); ?>
                                     
                                </div>