<?php $this->pageTitle = Yii::app()->getModule('yupe')->siteName;?>
<h1>Прайс-лист на редукторы </h1>
<div class="row">
	<div class="col-lg-12">
		<p>Цена на редукторы и мотор-редукторы зависят от исполнения или передаточного числа, размещенные в прайс-листе цены являются ориентировочными и могут измениться в зависимости от Ваших конкретных потребностей. Свяжитесь с нашим специалистом для уточнения цены.</p>
		
		<p style="text-align:center">При заключении долгосрочных договоров на поставку возможны СКИДКИ и БОНУСЫ!!! </p>
	</div>
		<div class="col-lg-6">
		<p align="center"> <a class="link-color" style="text-decoration: underline" href="#"> Скачать Прайс-лист в формате xls</a> </p>
	</div>
	<div class="col-lg-6">
		<p align="center"> <a class="link-color" style="text-decoration: underline" href="#">  Скачать Прайс-лист в архиве zip </a> </p>
	</div>
</div>
<?php 
    use \application\store;
    use \Yii;
    $category = StoreCategory::model()->findByPk(38);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);

    $category = StoreCategory::model()->findByPk(39);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);

    $category = StoreCategory::model()->findByPk(40);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);
  
    $category = StoreCategory::model()->findByPk(41);
    $attributeIds = [35,36,39,130];
    $this->renderPartial("reductoriPrice_table",["category" => $category, "attributeIds" => $attributeIds]);
?>