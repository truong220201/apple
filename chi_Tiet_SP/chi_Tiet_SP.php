 <?php
    require_once "condb.php";
 ?>
 <?php
    $sql = "SELECT * FROM ipad";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chi tiet san pham</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="chi_tiet_sp.css">
    <script type="text/javascript" src="trang_chu.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "../header.php";
    ?>
    <div style="background-color: #f5f5f7;">
        <?php while ($row = mysqli_fetch_assoc($query)) {?>
        <div class="sp-1" style="background-color: <?php echo $row['maunen']?>;">
            <div id="info-ipad-a">
                    <div class="mini-red"><?php echo $row['new']; ?> </div>
                    <div class="title-black"><?php echo $row['name']; ?></div>
                    <div class="large-black"><?php echo $row['introduce']; ?></div>
                    <div class="price-a">$<?php echo $row['price']; ?></div>
                    <button class="btn-buy-a">Buy</button>
                    <div class="learn-more">Learn more ></div>
                
            </div>
            <img src="danh-sach/img-large/<?php echo $row['image']; ?>" style="width: 70%;height: 598px;display: inline-block;float: <?php echo $row['vitri']; ?>;margin-top: 20px;">
        </div>
        <div style="height: 25px;"></div>
        <?php }?>
        <div style="height: 5px;background-color: #f5f5f7;"></div>
        <div class="sp-all">
            <div class="sp-all-inside">
                <div class="noi-dung-sp-all">
                    <h2 class="txt-headline-a-1 mx-auto">Which iPad is right for you?</h2>
                    <a href="">
                        <span class="txt-all-models">Compare all iPad models<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg></span>
                    </a>
                </div>
                <div id="list-2" class="mx-auto">
                    <ul style="float: left;list-style-type: none;height: 376px;">
                        <li class="ipad-color-list">
                            <img src="img-ipads/ipad-pro-sp-1.png">
                            <div class="txt-mini-red">New</div>
                            <div class="txt-medium-name">iPad Pro</div>
                            <div class="txt-dollar">From $799</div>
                            <img class="img-two-dots" src="img-dots/two-dot-b-w.jpg"><br>
                            <button class="btn-buy-mini">Buy</button>
                        </li>
                        <li class="ipad-color-list">
                            <img src="img-ipads/ipad-pro-sp-2.png">
                            <div class="txt-mini-red"> &nbsp;</div>
                            <div class="txt-medium-name">iPad Air</div>
                            <div class="txt-dollar">From $599</div>
                            <img class="img-five-dots" src="img-dots/five-dots.jpg"><br>
                            <button class="btn-buy-mini">Buy</button>
                        </li>
                        <li class="ipad-color-list">
                            <img src="img-ipads/ipad-pro-sp-3.png">
                            <div class="txt-mini-red"> &nbsp;</div>
                            <div class="txt-medium-name">iPad</div>
                            <div class="txt-dollar">From $329</div>
                            <img class="img-three-dots" src="img-dots/three-dots.jpg"><br>
                            <button class="btn-buy-mini">Buy</button>
                        </li>
                        <li class="ipad-color-list">
                            <img src="img-ipads/ipad-pro-sp-4.png">
                            <div class="txt-mini-red"> &nbsp;</div>
                            <div class="txt-medium-name">iPad mini</div>
                            <div class="txt-dollar">From $399</div>
                            <img class="img-three-dots" src="img-dots/three-dots.jpg"><br>
                            <button class="btn-buy-mini">Buy</button>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto" id="list-3">
                    <ul style="float: left;list-style-type: none;">
                        <li class="hr-a"></li>
                        <li class="hr-a"></li>
                        <li class="hr-a"></li>
                        <li class="hr-a"></li>
                        <li class="parameter-ipad">
                            <div class="txt-prm-title">12.9” and 11”</div>
                            <div class="txt-prm-content">12.9” Liquid Retina XDR display<sup>1</sup><br>11” Liquid Retina display<sup>1</sup></div>
                        </li>
                        <li class="parameter-ipad">
                            <div class="txt-prm-title">10.9”</div>
                            <div class="txt-prm-content">Liquid Retina display<sup>1</sup><br> &nbsp;</div>
                        </li>
                        <li class="parameter-ipad">
                            <div class="txt-prm-title">10.2”</div>
                            <div class="txt-prm-content">Retina display<br> &nbsp;</div>
                        </li>
                        <li class="parameter-ipad">
                            <div class="txt-prm-title">7.9”</div>
                            <div class="txt-prm-content">Retina display<sup>1</sup><br> &nbsp;</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_m1_chip__ev9f5zgvwo02_large.png">
                            <div class="txt-prm-content">M1 chip</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_a14_chip__eflvurt7ywia_large.png">
                            <div class="txt-prm-content">A14 Bionic chip</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_a12_chip__f4cnj28qh5qq_large.png">
                            <div class="txt-prm-content">A12 Bionic chip</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_a12_chip__f4cnj28qh5qq_large.png">
                            <div class="txt-prm-content">A12 Bionic chip</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_usbc_thunderbolt__fuat6j3gyc2u_large.png">
                            <div class="txt-prm-content">USB-C connector with support<br>for Thunderbolt / USB 4</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_usbc__gnv70qm6mcuq_large.png">
                            <div class="txt-prm-content">USB-C connector<br> &nbsp;</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_lightning__drp7mpo3oyie_large.png">
                            <div class="txt-prm-content">Lightning connector<br> &nbsp;</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_lightning__drp7mpo3oyie_large.png">
                            <div class="txt-prm-content">Lightning connector<br> &nbsp;</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
                            <div class="txt-prm-content">5G cellular<sup>2</sup></div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
                            <div class="txt-prm-content">4G cellular<sup>2</sup></div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
                            <div class="txt-prm-content">4G cellular<sup>2</sup></div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
                            <div class="txt-prm-content">4G cellular<sup>2</sup></div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
                            <div class="txt-prm-content">Compatible with<br>Apple Pencil (2nd generation)</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
                            <div class="txt-prm-content">Compatible with<br>Apple Pencil (2nd generation)</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
                            <div class="txt-prm-content">Compatible with<br>Apple Pencil (1st generation)</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
                            <div class="txt-prm-content">Compatible with<br>Apple Pencil (1st generation)</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_magic_keyboard__cr367s50ehkm_large.png">
                            <div class="txt-prm-content">Compatible with<br>Magic Keyboard and<br>Smart Keyboard Folio</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_magic_keyboard__cr367s50ehkm_large.png">
                            <div class="txt-prm-content">Compatible with<br>Magic Keyboard and<br>Smart Keyboard Folio</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_smart_keyboard__gh56kiymgfam_large.png">
                            <div class="txt-prm-content">Compatible with<br>Smart Keyboard<br> &nbsp;</div>
                        </li>
                        <li class="parameter-ipad">
                            <img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_bluetooth_keyboard__fsfc35t22vqu_large.png">
                            <div class="txt-prm-content">Compatible with<br>Bluetooth keyboards<br> &nbsp;</div>
                        </li>
                        <li class="hr-a-1"></li>
                        <li class="hr-a-1"></li>
                        <li class="hr-a-1"></li>
                        <li class="hr-a-1"></li>
                        <a href="" class="learnmore-mini">Learn more ></a>
                        <a href="" class="learnmore-mini">Learn more ></a>
                        <a href="" class="learnmore-mini">Learn more ></a>
                        <a href="" class="learnmore-mini">Learn more ></a>
                    </ul>
                </div>
            </div>
            <div style="height: 30px;background-color: #f5f5f7;"></div>
            <div class="sp-4">
                <img src="img-large/four-ipads.jpg" style="display: inline-block;margin-top: 80px;">
                <div class="info-ipad-a-3">
                    <div class="large-black" style="font-weight: 500;margin-bottom: 20px;">The latest carrier deals.<span style="color: #007f01;">&nbsp;Directly from Apple.</span></div>
                    <div class="title-black" style="font-size: 48px;">Get any cellular iPad<br>model. Get up to $200<br>back after activation.<sup>3<sup></div>
                    <div style="margin-top: 30px;">
                        <img src="logo/t-mobile.png" style="display: inline-block;">
                        <img src="logo/verizon.png" style="display: inline-block;">
                    </div>
                    <div style="width: 435px;height: 92px;margin-left: 131px;margin-top: 30px;">
                        <div class="learn-more-a-2">Buy iPad Pro ></div>
                        <div class="learn-more-a-2">Buy iPad ></div>
                        <div class="learn-more-a-2">Buy iPad Air ></div>
                        <div class="learn-more-a-2">Buy iPad mini ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "../footer.php"
    ?>
</body>
</html>