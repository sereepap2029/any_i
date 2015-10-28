<?
require_once("./model/m_action.php");
$m_action = new M_action;
$action=$m_action->get_all_action(100000,0)->result;
foreach ($action as $key => $value) {
    $photo_arr=$m_action->get_all_action_photo($action[$key]['id']);
    $action[$key]['photo']=$photo_arr->result;
}
?>
<!-- HEAD CONTENT ************************** -->
<div class="headcon section s2">
 <div class="redoverlay"></div>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <div class="s2-info">
                    <div class="s2-tag">
                        <ul>
                            <li>
                                <p>any i in Action</p>
                            </li>
                            <li>
                                <div id="redtag"></div>
                            </li>
                        </ul>
                    </div>
                    <h1>เราจะอยู่เคียงข้าง ในการเดินทางสู่ ความสำเร็จของทุกฝัน </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HEAD CONTENT ************************** -->
<!-- in action ========================= -->
<div class="inaction section s3 ">
    <div class="container">
    <?
    $num_max=(int)(count($action)/3);    
            $num_remain=(int)(count($action)%3);
            $cur_num=1;
    foreach ($action as $key => $value) {
        if ($key%3==0) {
            ?>
            <div class="row">
            <?
        }
        ?>
            <div class="four columns">
                <img class="u-max-full-width" src="./media/action/<?=$value['photo'][0]['filename']?>">
                <h5 class="value-heading"><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['title'];
                            }else{
                                echo $value['title_en'];
                            }
                            ?></h5>
                <p class="value-description"><?
                            if ($_COOKIE["lang"]=="th") {
                                echo $value['description'];
                            }else{
                                echo $value['description_en'];
                            }
                            ?>
                    
                </p>
                <a href="advisor.php?info=<?=$value['id']?>">Read more</a>
            </div>

        <?
        if ($key%3==2||$cur_num==count($action)) {
           ?>
           </div>
           <?
        }
        $cur_num+=1;
    }
    ?>
        <?/*<div class="row">
            <div class="four columns">
                <img class="u-max-full-width" src="http://placehold.it/200x200">
                <h5 class="value-heading">PAC SolarAire</h5>
                <p class="value-description">“วันที่เราหยุดไม่ได้เพราะมาไกลแล้ว แต่จะเดินต่อก็ยังหาทางไปไม่ถูก การที่มีคนเดินเข้ามาช่วยชี้ทางให้ มันเหมือนกับเราเห็นทาง และโอกาสใหม่ที่จะไปต่อได้แล้ว”
                    
                </p>
                <a href="advisor.php">Read more</a>
            </div>
            <div class="four columns">
                <img class="u-max-full-width" src="http://placehold.it/200x200">
                <h5 class="value-heading">XXXX XXXXXX</h5>
                <p class="value-description">“วันที่เราหยุดไม่ได้เพราะมาไกลแล้ว แต่จะเดินต่อก็ยังหาทางไปไม่ถูก การที่มีคนเดินเข้ามาช่วยชี้ทางให้ มันเหมือนกับเราเห็นทาง และโอกาสใหม่ที่จะไปต่อได้แล้ว”</p>
                <a href="advisor.php">Read more</a>
            </div>
            <div class="four columns">
                <img class="u-max-full-width" src="http://placehold.it/200x200">
                <h5 class="value-heading">XXXXXXXXX XX</h5>
                <p class="value-description">“วันที่เราหยุดไม่ได้เพราะมาไกลแล้ว แต่จะเดินต่อก็ยังหาทางไปไม่ถูก การที่มีคนเดินเข้ามาช่วยชี้ทางให้ มันเหมือนกับเราเห็นทาง และโอกาสใหม่ที่จะไปต่อได้แล้ว”
                </p>
                <a href="advisor.php">Read more</a>
            </div>
        </div>*/?>
    </div>
    <img src="images/footer/footer-bg.png" class="end-bg">
</div>
