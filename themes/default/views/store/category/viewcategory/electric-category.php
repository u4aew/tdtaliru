<?php
/* @var StoreCategory $category ; */

$categories = StoreCategory::model()->findAll("parent_id = " . $category->id);
?>
<!-- Выодит блок с информцией в категориях-->
<div class="hidden-xs" style="margin-bottom:20px">
    <?php $this->widget(
        "application.modules.contentblock.widgets.ContentBlockWidget",
        array("code" => "info-blok-dlya-lebyodki-elektricheskie-vverhnyaya-chast"));
    ?>
</div>
<div class="container-fluid">
    <!-- Выводит все категории, электрических лебёдок-->
    <?php foreach ($categories as $item): ?>
        <div class="row" style="background-color:#F3E0D1; margin-bottom:5px">
            <div class="col-lg-9">
                <a href="<?= " /store/elektricheskie/" . $item->slug ?>"><img
                        style="float:left; margin:10px; width:100%;max-height:140px; max-width:130px;"
                        src="<?= $item->getImageUrl(200, 200); ?>"></a>
                <div class="mobile-description-category">
                    <h2 style="color: #366b81;
    font-size: 14px;
    text-decoration: underline;
    font-weight: bold;">
                        <a style="font-size: 14px" class="link-color"
                           href="<?= " /store/elektricheskie/" . $item->slug ?>">
                            <?= $item->name; ?>
                        </a>
                    </h2>
                    <p>
                        <?= $item->description; ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 hidden-xs"
                 style="background-color:#49A9C2; min-height:150px; border-left:5px solid white;">

                <?php
                $products = Product::model()->findAll("category_id = " . $item->id);
                ?>
                <ul class="model-category" style="list-style:none;padding: 0px; ">
                    <?php foreach ($products as $currentProduct): ?>
                        <Li><a class="iteam-model-category"
                               href="<?= $currentProduct->getLink(); ?>"><?= $currentProduct->name; ?></a></Li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>