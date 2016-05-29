<div class="row header-block hidden-xs"
     style="padding: 0px;margin: 0px;min-height: 113px;border-bottom: 2px solid #8F6D40;background-color: #DCBE9C">
    <div class="naw">
        <div style="width: 250px;position: absolute;left: 0px;top: 0px;text-align: center">
            <a href="/"> <img style="display: block;margin: 5px auto 5px auto"
                              src="/uploads/image/826a42e01147f2318aa391d522f1abad.jpg" alt="Логотип Барнаульские тали"></a>
            <span style="font-weight: bold;font-size: 18px">Барнаульские тали</span>
        </div>
        <div style="margin: 0px 300px 0px 250px;">
            <div class="collapse navbar-collapse">
                <ul class="iteam-menu-list" style="background-color: transparent;text-align: right;padding: 0px">
                    <?php foreach ($this->params['items'] as $item): ?>
                        <li>
                            <a href="<?= $item["url"] ?>">
                                <?= $item["label"] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="contacts-free-phone" id="block-phone-free"
             style="text-align: right;border-left:20px solid rgb(158, 157, 139)">
            <div style="width: 240px;margin: 10px auto">
                <span style="font-size: 20px;color: white;font-weight: bold;"> <img
                        src="/uploads/image/048c33c671579cc51114331cfa606bc8.png" alt="телефон барнаульские тали">     8-800-700-88-47 </span>
                <span style="font-weight: bold;color: white;"> Звонок по России бесплатный </span>
            </div>
            <div style="width: 240px; margin: 5px auto">

            </div>
            </div>
    </div>
</div>
<div class="row visible-xs" style="padding: 0px;margin: 0px">
    <div class="menu-fixed">
    <div class="navbar-header mobile-header">
        <button type="button" style="float: right; width: 60px;height: 30px;margin: 10px" data-toggle="collapse"
                data-target="#responsive-menu">
            Меню
        </button>
        <div class="visible-xs block-mobile-info">Барнаульские тали</div>
    </div>
    <div id="responsive-menu" class="collapse navbar-collapse">
        <ul class="iteam-menu-list">
            <?php foreach ($this->params['items'] as $item): ?>
                <li>
                    <a href="<?= $item["url"] ?>">
                        <?= $item["label"] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div style="background-color: #F5F5F5;font-weight: bold;padding: 10px;border: 2px solid grey">
        <div style="float: left">
            <p style="margin: 0px"> Звонок по России бесплатный </p>
            <p style="margin: 0px"> 8-800-700-88-47 </p>


        </div>
        <div style="float: right">
          <p style="margin: 0px">  <img src="/uploads/image/62bd7a3ea698a05d66968e126fae813c.png" class="logo-skype">  <a href="skype:telfer.barnaul?call"> Tdtali </a> </p>
            <p style="margin: 0px">  ICQ 480568098 </p>
            <p style="margin: 0px"> <a href="mailto:barnaul@tali.ru">  barnaul@tali.ru </a> </p>

        </div>
   <div class="clearfix"></div>

    </div>
    </div>
</div>












