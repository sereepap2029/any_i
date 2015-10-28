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
                        <div class="item"><img src="images/content/s1/s1-bg1.jpg" alt="">
                            <div class="redoverlay"></div>
                            <h1 class="s1-title">Business advisory | venture</h1></div>
                        <div class="item"><img src="images/content/s1/s1-bg2.jpg" alt="">
                            <div class="redoverlay"></div>
                            <h1 class="s1-title">Business advisory | venture</h1></div>
                        <div class="item"><img src="http://www.placehold.it/1280x840" alt="">
                            <div class="redoverlay"></div>
                            <h1 class="s1-title">Business advisory| venture</h1></div>
                    </div>
                    <!-- owl-res -->
                    <div id="owl-res" class="owl-carousel owl-theme owl-loaded">
                        <div class="item"><img src="images/content/s1/res/s1-bg1.jpg" alt="">
                            <div class="redoverlay"></div>
                            <h1 class="s1-title">Business advisory<br>| venture</h1></div>
                        <div class="item"><img src="http://www.placehold.it/320x480" alt="">
                            <div class="redoverlay"></div>
                            <h1 class="s1-title">Business advisory<br>| venture</h1></div>
                        <div class="item"><img src="http://www.placehold.it/320x480" alt="">
                            <div class="redoverlay"></div>
                            <h1 class="s1-title">Business advisory<br>| venture</h1></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- S2 ========================= -->
    <div class="section s2">
        <div class="redoverlay"></div>
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
                        <h1>เพราะ “โอกาส” คือสิ่งที่เราเชื่อมั่น </h1>
                        <p>any i ตั้งมั่นที่จะช่วยเหลือเรื่องการให้ โอกาสในการลงทุนกับคนที่มีความฝัน มีความมุ่งมั่นอยากให้ธุรกิจของตัวเอง เติบโตและประสบความสำเร็จ โดยมีเรา เป็นส่วนหนึ่งในการผลักดันให้ฝัน ของคุณเป็นจริง
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- S3 ========================= -->
    <div class="section s3">
        <div class="container">
            <h3 class="section-heading">ผลักดันคุณ ไปสู่ฝัน</h3>
            <div class="row">
                <div class="four columns">
                    <img class="u-max-full-width" src="images/content/s3/s3-ico1.jpg">
                    <h5 class="value-heading">การสนับสนุน</h5>
                    <p class="value-description">เมื่อคุณมุ่งมั่นทุ่มเทลงทุนในความฝัน any i ก็พร้อมร่วมสนับสนุนให้ให้ธุรกิจ ในฝันของคุณเติบโตและแข็งแรงมากขึ้น จนกลายเป็นความจริง
                    </p>
                </div>
                <div class="four columns">
                    <img class="u-max-full-width" src="images/content/s3/s3-ico2.jpg">
                    <h5 class="value-heading">คำปรึกษา</h5>
                    <p class="value-description">ทีมงานของ any i มาจากการทำงาน ในหลากหลายสาขา และล้วนมี ความรู้ ความเชี่ยวชาญเฉพาะทาง ให้คุณมั่นใจได้ว่าทุกคำแนะนำใน ทุกขั้นตอนของการดำเนินธุรกิจ จะเป็นไปอย่างถูกต้องแม่นยำ</p>
                </div>
                <div class="four columns">
                    <img class="u-max-full-width" src="images/content/s3/s3-ico3.jpg">
                    <h5 class="value-heading">แรงบันดาลใจ</h5>
                    <p class="value-description">เรารู้ว่าในการทำงาน เรื่องของใจ สำคัญไม่แพ้สิ่งใด any i พร้อมแชร์ ประสบการณ์และแนวคิดจากการ ทำงานเพื่อสร้างแรงบันดาลใจให้ คุณพร้อมที่จะฝ่าฟันไปให้ถึงเส้นชัย
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
                    <div id="owl-desk-s4" class="owl-carousel owl-theme owl-loaded">
                    <?
                    foreach ($action as $key => $value) {
                     ?>
                        <div class="item">
                            <div class="s4-img"> <?
                            if (isset($value['photo'][1])) {
                                ?>
                                <img src="./media/action/<?=$value['photo'][1]['filename']?>" alt="">
                                <?
                            }else{
                                ?>
                                <img src="http://www.placehold.it/1280x840" alt="">
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
            <h3 class="section-heading2">เชี่ยวชาญเฉพาะทาง ตอบโจทย์ได้ตรงจุด</h3>
            <p class="section-description">any i มีทีมงานที่เชี่ยวชาญใน หลากหลายด้าน สามารถให้คำปรึกษา เฉพาะทางได้สำหรับทุกช่วงการเติบโตของธุรกิจ
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
            <h3 class="section-heading2">ผู้ร่วมลงทุนของเรา</h3>
            <div class="row">
                <?
                foreach ($partner as $key => $value) {
                    ?>
                    <div class="three columns s6-1">
                        <img class="u-max-full-width" src="./media/partner/<?=$value['filename']?>">
                    </div>
                    <?
                }
                ?>            
               
            </div>
        </div>
        <img src="images/footer/footer-bg.png" class="end-bg">
    </div>
    <!-- END CONTENT ************************** -->
