<?
require_once("./model/m_advisor.php");
$m_advisor = new M_advisor;
$advisor=$m_advisor->get_all_advisor(100000,0);

require_once("./model/m_action.php");
$m_action = new M_action;
$action=$m_action->get_all_action(100000,0)->result;
foreach ($action as $key => $value) {
    $photo_arr=$m_action->get_all_action_photo($action[$key]['id']);
    $action[$key]['photo']=$photo_arr->result;
}
require_once("./model/m_partner.php");
$m_partner = new M_partner;
$partner=$m_partner->get_all_partner(10000,0)->result;

require_once("./model/m_banner.php");
$m_banner = new M_banner;
$banner=$m_banner->get_all_banner(100000,0);
require_once("./model/m_encore.php");
$m_encore = new M_encore;
$encore=$m_encore->get_encore()->result;     
?>
<!-- CONTENT ************************** -->
<div id="fullpage">
    <!-- fullpage -->
    <!-- S1 ========================= -->
    <div class="section s1">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <!-- owl-desk -->
                    <div id="owl-desk" class="owl-carousel owl-theme owl-loaded">
                        <?
                        foreach ($banner->result as $key => $value) {
                            ?>
                            <div class="item">
                            <?
                            if ($value['picture']!="") {
                                ?>
                                <img src="./media/banner/<?=$value['picture']?>" alt="">
                                <?
                            }else{
                                ?>
                                <img src="http://www.placehold.it/1280x840" alt="">
                                <?
                            }
                            ?>
                            
                            <div class="redoverlay"></div>
                            <h1 class="s1-title"><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['text'];
                            }else{
                                echo $value['text_en'];
                            }
                            ?></h1></div>
                            <?
                        }
                        ?>
                    </div>
                    <!-- owl-res -->
                    <div id="owl-res" class="owl-carousel owl-theme owl-loaded">
                        <?
                        foreach ($banner->result as $key => $value) {
                            ?>
                            <div class="item">
                            <?
                            if ($value['picture_mobile']!="") {
                                ?>
                                <img src="./media/banner/<?=$value['picture_mobile']?>" alt="">
                                <?
                            }else{
                                ?>
                                <img src="http://www.placehold.it/320x480" alt="">
                                <?
                            }
                            ?>
                            <div class="redoverlay"></div>
                            <h1 class="s1-title"><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['text'];
                            }else{
                                echo $value['text_en'];
                            }
                            ?></h1></div>
                            <?
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- S2 ========================= -->
    <div class="section s2">
        <div class="redoverlay"></div>
        <div class="whiteoverlay"></div>
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <div class="s2-info">
                        <div class="s2-tag">
                            <ul>
                                <li>
                                    <p>Philosophy</p>
                                </li>
                                <li>
                                    <div id="redtag"></div>
                                </li>
                            </ul>
                        </div>
                        <h1><?=$any_lang[$_COOKIE["lang"]]['Philosophy_h1']?></h1>
                        <p><?=$any_lang[$_COOKIE["lang"]]['Philosophy_p']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- S3 ========================= -->
    <div class="section s3">
        <div class="container">
            <h3 class="section-heading"><?=$any_lang[$_COOKIE["lang"]]['Dreams_h3']?></h3>
            <div class="row">
                <div class="four columns">
                    <img class="u-max-full-width" src="images/content/s3/s3-ico1.jpg">
                    <h5 class="value-heading"><?=$any_lang[$_COOKIE["lang"]]['Dreams_support']?></h5>
                    <p class="value-description">
                    <?
                    $order   = array("\r\n", "\n", "\r");
                    $replace = array('<br>', '<br>', '<br>');
                    if ($_COOKIE["lang"]=="th") {
                                $newstr = str_replace($order, $replace, $encore[0]['support']);
                               // $newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;//."--".strlen($action[0]['detail_description']);
                            }else{
                                $newstr = str_replace($order, $replace, $encore[0]['support_en']);
                                //$newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;
                            }
                    //$any_lang[$_COOKIE["lang"]]['Dreams_support_des']
                    ?>
                    </p>
                </div>
                <div class="four columns">
                    <img class="u-max-full-width" src="images/content/s3/s3-ico2.jpg">
                    <h5 class="value-heading"><?=$any_lang[$_COOKIE["lang"]]['Dreams_advice']?></h5>
                    <p class="value-description"><?
                    $order   = array("\r\n", "\n", "\r");
                    $replace = array('<br>', '<br>', '<br>');
                    if ($_COOKIE["lang"]=="th") {
                                $newstr = str_replace($order, $replace, $encore[0]['advice']);
                                //$newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;//."--".strlen($action[0]['detail_description']);
                            }else{
                                $newstr = str_replace($order, $replace, $encore[0]['advice_en']);
                                //$newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;
                            }
                    //$any_lang[$_COOKIE["lang"]]['Dreams_advice_des']
                            ?></p>
                </div>
                <div class="four columns">
                    <img class="u-max-full-width" src="images/content/s3/s3-ico3.jpg">
                    <h5 class="value-heading"><?=$any_lang[$_COOKIE["lang"]]['Dreams_Inspiration']?></h5>
                    <p class="value-description"><?
                    $order   = array("\r\n", "\n", "\r");
                    $replace = array('<br>', '<br>', '<br>');
                    if ($_COOKIE["lang"]=="th") {
                                $newstr = str_replace($order, $replace, $encore[0]['inspriation']);
                                //$newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;//."--".strlen($action[0]['detail_description']);
                            }else{
                                $newstr = str_replace($order, $replace, $encore[0]['inspriation_en']);
                                //$newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;
                            }
                    //$any_lang[$_COOKIE["lang"]]['Dreams_Inspiration_des']
                            ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- S4 ========================= -->
    <div class="section s4">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <div <? if(count($action)>1){?>id="owl-desk-s4"<?}?> class="owl-carousel owl-theme owl-loaded">
                    <?
                    foreach ($action as $key => $value) {
                     ?>
                        <div class="item">
                            <div class="s4-img"> <?
                            if (isset($value['photo'][1])) {
                                ?>
                                <img src="./media/action/<?=$value['photo'][1]['filename']?>" alt="" <? if(count($action)==1){?>style="width: 100%;"<?}?>>
                                <?
                            }else{
                                ?>
                                <img src="http://www.placehold.it/1280x840" alt="" <? if(count($action)==1){?>style="width: 100%;"<?}?>>
                                <?
                            }
                            ?>
                                <div class="redoverlay"></div>
                            </div>
                            <div class="s4-info">
                                <div class="s4-tag">
                                    <ul>
                                        <li>
                                            <p>any i in Action</p>
                                        </li>
                                        <li>
                                            <div id="redtag"></div>
                                        </li>
                                    </ul>
                                </div>
                                <h1><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['title'];
                            }else{
                                echo $value['title_en'];
                            }
                            ?></h1>
                                <p><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['description'];
                            }else{
                                echo $value['description_en'];
                            }
                            ?>
                                </p>
                                <br><a href="advisor.php?info=<?=$value['id']?>">Read more</a>
                            </div>
                        </div>
                     <?
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- S5 ========================= -->
    <div class="section s5">
        <div class="container">
            <h3 class="section-heading">Our Trusted Advisor</h3>
            <h3 class="section-heading2"><?=$any_lang[$_COOKIE["lang"]]['Trusted_Advisor_h3']?></h3>
            <p class="section-description"><?=$any_lang[$_COOKIE["lang"]]['Trusted_Advisor_des']?>
            </p>
            <!-- Normal Row -->
            <?        
            $num_max=(int)(count($advisor->result)/3);    
            $num_remain=(int)(count($advisor->result)%3);
            $inner_cls="";
            if ($num_remain==1) {
                $inner_cls="twelve";
            }else if($num_remain==2){
                $inner_cls="five";
            }
            $cur_num=1;
            foreach ($advisor->result as $key => $value) {                
                if ($key%3==0) {
                    ?>
                    <div class="row">
                        <div class="twelve columns">
                            <div class="row<?if(($cur_num/3)>$num_max){echo $num_remain;}?>">
                    <?
                }
                ?>
                        <div class="<?if(($cur_num/3)>$num_max){echo $inner_cls;}else{echo "four";}?> columns">
                            <img class="u-max-full-width" src="./media/advisor/<?=$value['picture']?>">
                            <h5 class="value-heading"><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['title'];
                            }else{
                                echo $value['title_en'];
                            }
                            ?>
                            </h5>
                            <p class="value-description"><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['name'];
                            }else{
                                echo $value['name_en'];
                            }
                            ?>
                                <br> <?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['Position'];
                            }else{
                                echo $value['Position_en'];
                            }
                            ?></p>
                        </div>
                <?
                if ($key%3==2||$cur_num==count($advisor->result)) {
                    ?>
                            </div>
                        </div>
                    </div>
                    <?
                }
                $cur_num+=1;
            }
            ?>
        </div>
    </div>
    <!-- S6 ========================= -->
    <div class="section s6">
        <div class="container">
            <h3 class="section-heading">Our Business Partner</h3>
            <h3 class="section-heading2"><?=$any_lang[$_COOKIE["lang"]]['Business_Partner']?></h3>
            <div class="row">                
                <?
                $partner_count=count($partner);
                $partner_remain=$partner_count%4;
                $partner_loopnum=floor($partner_count/4);
                foreach ($partner as $key => $value) {
                    if (floor(($key+1)/4)<$partner_loopnum) {
                        ?>
                        <div class="three columns s6-1">
                            <a href="<?=$value['link']?>"><img class="u-max-full-width" src="./media/partner/<?=$value['filename']?>" alt="<?=$key?>" loopnum="<?=$partner_loopnum?>" num="<?=(int)(($key+1)/4)?>"></a>
                        </div>
                        <?
                    }else{
                        if ($partner_remain==2) {
                            ?>
                            <div class="three columns s6-1 hide-mobile" style="">
                            </div>
                            <!--<div class="three columns s6-1" style="margin:0px 0px 0px 2.4%">-->
                            <div class="three columns s6-1">
                                <a href="<?=$partner[$key]['link']?>"><img class="u-max-full-width" src="./media/partner/<?=$partner[$key]['filename']?>"></a>
                            </div>
                            <div class="three columns s6-1">
                                <a href="<?=$partner[$key+1]['link']?>"><img class="u-max-full-width" src="./media/partner/<?=$partner[$key+1]['filename']?>"></a>
                            </div>
                            <div class="three columns s6-1 hide-mobile" style="">
                            </div>
                            <?
                            break;
                        }else if ($partner_remain==3) {
                            ?>
                            <div class="four columns s6-1">
                                <a href="<?=$partner[$key]['link']?>"><img class="u-max-full-width" src="./media/partner/<?=$partner[$key]['filename']?>"></a>
                            </div>
                            <div class="four columns s6-1">
                                <a href="<?=$partner[$key+1]['link']?>"><img class="u-max-full-width" src="./media/partner/<?=$partner[$key+1]['filename']?>"></a>
                            </div>
                            <div class="four columns s6-1">
                                <a href="<?=$partner[$key+2]['link']?>"><img class="u-max-full-width" src="./media/partner/<?=$partner[$key+2]['filename']?>"></a>
                            </div>
                            <?
                            break;
                        }else if($partner_remain==1){
                            ?>
                            <div class="twelve columns s6-1">
                                <a href="<?=$partner[$key]['link']?>"><img class="u-max-full-width" src="./media/partner/<?=$partner[$key]['filename']?>"></a>
                            </div>
                            <?
                        }else{
                            ?>
                            <div class="three columns s6-1">
                                <img class="u-max-full-width" src="./media/partner/<?=$value['filename']?>">
                            </div>
                            <?
                        }
                        ?>
                        
                        <?
                    }
                }
                ?>            
               
            </div>
        </div>
        <img src="images/footer/footer-bg.png" class="end-bg">
    </div>
    <!-- END CONTENT ************************** -->
