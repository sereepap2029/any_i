<?
require_once("./model/m_action.php");
$m_action = new M_action;
$action=$m_action->get_action_by_id($_GET['info'])->result;
if (!isset($action[0]['id'])) {
    ?>
    <script type="text/javascript">
        window.open("./index-in.php","_self");
        </script>
    <?
}
$photo_arr=$m_action->get_all_action_photo($action[0]['id']);
$action[0]['photo']=$photo_arr->result;

?>
<!-- HEAD CONTENT ************************** -->
<div class="head-adv section s4">
    <!-- Advisor info desk -->
    <div class="redoverlay"></div>
    <div class="adv-desk">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <div class="adv-desk s4-info">
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
                                echo $action[0]['title'];
                            }else{
                                echo $action[0]['title_en'];
                            }
                            ?></h1>
                        <p class="adv-desk_p"><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $action[0]['description'];
                            }else{
                                echo $action[0]['description_en'];
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1><br><br></h1>
</div>
<!-- Advisor info res -->
<div class="res">
    <div class="adv-res">
        <div class="adv-info">
            <div class="adv-tag">
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
                                echo $action[0]['title'];
                            }else{
                                echo $action[0]['title_en'];
                            }
                            ?></h1>
            <p><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $action[0]['description'];
                            }else{
                                echo $action[0]['description_en'];
                            }
                            ?>
            </p>
        </div>
    </div>
    <!-- END HEAD CONTENT ************************** -->
    <!-- in action ========================= -->
    <!--
    <div class="adv section s3 ">
        <div class="container">
            <h3 class="section-heading">ผลักดันคุณ ไปสู่ฝัน</h3>
            <div class="row">
                <div class="six columns">
                    <img class="u-max-full-width" src="http://placehold.it/200x200">
                    <h5 class="value-heading">การสนับสนุน</h5>
                    <p class="value-description">เมื่อคุณมุ่งมั่นทุ่มเทลงทุนในความฝัน any i ก็พร้อมร่วมสนับสนุนให้ให้ธุรกิจ ในฝันของคุณเติบโตและแข็งแรงมากขึ้น จนกลายเป็นความจริง
                    </p>
                    <a href="#">Read more</a>
                </div>
                <div class="six columns">
                    <img class="u-max-full-width" src="http://placehold.it/200x200">
                    <h5 class="value-heading">คำปรึกษา</h5>
                    <p class="value-description">ทีมงานของ any i มาจากการทำงาน ในหลากหลายสาขา และล้วนมี ความรู้ ความเชี่ยวชาญเฉพาะทาง ให้คุณมั่นใจได้ว่าทุกคำแนะนำใน ทุกขั้นตอนของการดำเนินธุรกิจ จะเป็นไปอย่างถูกต้องแม่นยำ</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
        <img src="images/footer/footer-bg.png" class="end-bg">
    </div>
</div>
-->
    <div class="adv-con">
        <div class="section s4">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <div id="owl-adv" class="owl-carousel owl-theme owl-loaded">
                            <!-- slide ========= -->
                            <?
                            foreach ($action[0]['photo'] as $key => $value) {
                                if ($key==0) {

                                }else{
                                    ?>
                                    <div><img src="./media/action/<?=$value['filename']?>" alt="">
                                    </div>
                                    <?
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="s4-info">
                            <h1><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $action[0]['title'];
                            }else{
                                echo $action[0]['title_en'];
                            }
                            ?></h1>
                            <p><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $action[0]['description'];
                            }else{
                                echo $action[0]['description_en'];
                            }
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!--End slide ========= -->
            </div>
        </div>
    </div>
    <div class="advcon-foot">
        <hr>
        <div class="row">
            <div class="twelve columns">
                <div class="adv-btn">
                <?
                $next=$m_action->get_action_by_sort_order((int)$action[0]['sort_order']+1)->result;
                $prev=$m_action->get_action_by_sort_order((int)$action[0]['sort_order']-1)->result;
                if (isset($prev[0]['id'])) {
                    ?>
                    <div class="prev"><a href="advisor.php?info=<?=$prev[0]['id']?>"><i class="fa fa-angle-left"></i> Previous</a></div>
                    <?
                }
                if (isset($next[0]['id'])) {
                    ?>
                    <div class="next"><a href="advisor.php?info=<?=$next[0]['id']?>">Next <i class="fa fa-angle-right"></i></a></div>
                    <?
                }
                ?>
                    
                    
                </div>
            </div>
            <img src="images/footer/footer-bg.png" class="end-bg">
        </div>
    </div>
</div>
<!--End section ========= -->
<!--
<div class="section s3" style="z-index:-1">
    <img src="images/footer/footer-bg.png" class="end-bg">
</div>
-->
