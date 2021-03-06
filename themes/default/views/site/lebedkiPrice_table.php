
<?php 
 /**
 * @var StoreCategory $category 
 * @var int[] $attributeIds
 */
$attributes = [];
foreach ($attributeIds as $id)
{
    $attributes[] = Attribute::model()->findByPk($id);
}
$products = Yii::app()->getComponent('productRepository')->getListForCategoryAsArray($category);
?>

<?php
$breads = $category->getBreadcrumbs(true);
$categoryUrl = $breads[$category->name];
?>



<h2><a  class="link-price" href="<?= $categoryUrl; ?>"><?=$category->name; ?></a></h2>
<table class="price-table-lebedki table-responsive">
    <thead>
        <th>
          Общий вид  
        </th> 
        <th>
            Модель
        </th>
         <th style="width:10%">
            Цена c НДС
        </th>
        <?php foreach ($attributes as $attribute):?> 
        <th class="hidden-sm hidden-xs ">
            <?=$attribute->title;?>
        </th>
        <?php endforeach; ?>
       
    </thead>
    <tbody>
       <?php foreach ($products as $product):?>
       <tr>
           <td style="text-align:center !important; ">
		<?php $productUrl = Yii::app()->createUrl('/store/product/view', ['name' => CHtml::encode($product->slug)]); ?>	   
        <a href="<?= $productUrl; ?>" > <img  class="img-price-lebedki" src="<?= $product->getImageUrl(50, 50); ?>"/> </a>
         </td>
           <?php $productUrl = Yii::app()->createUrl('/store/product/view', ['name' => CHtml::encode($product->slug)]); ?>
		   <td style="text-align:center"> <a href="<?= $productUrl; ?>" style="color:#0E4E69;font-weight:bold;text-decoration: underline"> <?=$product->name;?></a></td>
           <td > <strong>
              <?php if ($product->getResultPrice() > 0):?>
               <?= round($product->getBasePrice(), 2); ?>
               <?= Yii::t("StoreModule.store", "RUB"); ?> 
               <?php else:?>
                По заявке
               <?php endif; ?>
			   </strong>
             </td>
            <?php foreach ($attributes as $attribute):?> 
            <td class="hidden-sm hidden-xs">
              <?= AttributeRender::renderValue($attribute, $product->attribute($attribute));?>
            </td>
            <?php endforeach; ?>
           
       </tr>
       <?php endforeach; ?>        
    </tbody>
</table>