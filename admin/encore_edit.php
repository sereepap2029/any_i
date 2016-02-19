
<?
include("views/admin_header.php");
require_once("../model/m_encore.php");
$m_encore = new M_encore;
$edit=false;
$encore=null;
if (isset($_POST['support'])) {
        $data = array(
            'support' => $_POST['support'], 
            'advice' => $_POST['advice'], 
            'inspriation' => $_POST['inspriation'], 
            'support_en' => $_POST['support_en'], 
            'advice_en' => $_POST['advice_en'], 
            'inspriation_en' => $_POST['inspriation_en'], 
            );
        $m_encore->update_encore($data);
        $err_msg="บันทึกข้อมูลเรียบร้อยแล้ว";
    }
$encore=$m_encore->get_encore()->result;        
?>
<style type="text/css">
.row-fluid .no-margin-left {
    margin-left: 0px;
}
.img_hold{
  position: relative;
  width: 150px;
  display: inline-block;
  margin:10px;
}
.img_hold button{
  position: absolute;
  top: 0px;
  right: 0px;
}
.ui-state-highlight { position: relative;
  width: 150px;
  height: 150px;
  display: inline-block;
  margin:10px; 
}
</style>
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/style.css">

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content">
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Edit Benefit section</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <h5> <?if (isset($err_msg)) {
                                        echo "*******".$err_msg."*******";
                                    }?></h5>
                            <form class="form-horizontal" method="post" action="encore_edit.php">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">การสนับสนุน</label>
                                        <div class="controls">                                            
                                            <textarea class="span7 focused" style="height:200px" name="support"><?echo $encore[0]['support'];?></textarea>                                            
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">คำปรึกษา</label>
                                        <div class="controls">
                                            <textarea class="span7 focused" style="height:200px" name="advice"><?echo $encore[0]['advice'];?></textarea>                                            
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">แรงบันดาลใจ</label>
                                        <div class="controls">                                            
                                            <textarea class="span7 focused" style="height:200px" name="inspriation"><?echo $encore[0]['inspriation'];?></textarea>  
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Support</label>
                                        <div class="controls">                                            
                                            <textarea class="span7 focused" style="height:200px" name="support_en"><?echo $encore[0]['support_en'];?></textarea>                                            
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Advice</label>
                                        <div class="controls">
                                            <textarea class="span7 focused" style="height:200px" name="advice_en"><?echo $encore[0]['advice_en'];?></textarea>                                            
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Inspiration</label>
                                        <div class="controls">                                            
                                            <textarea class="span7 focused" style="height:200px" name="inspriation_en"><?echo $encore[0]['inspriation_en'];?></textarea>  
                                        </div>
                                    </div>
                                      
                                    <div class="control-group">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
</div>
<!--/.fluid-container-->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<?
include("views/footer.php");
/*
   "คือ บริษัท แอดวานซ์ เอ็กซเชนจ์ เทคโนโลยี จำกัด ของเรา เริ่มก่อตั้งธุรกิจมาตั้งแต่ปี 2546 โดยดำเนินธุรกิจภายใต้แบรนด์ PAC เราเริ่มต้นด้วยการทำเป็นธุรกิจภายในครอบครัว คือทำเครื่องปรับอากาศ ซึ่งปฏิเสธไม่ได้หรอกว่าเป็นครื่องใช้ไฟฟ้าที่มีความจำเป็นในยุคนี้แหละ และก็เป็นเครื่องใช้ไฟฟ้าที่มีอัตราการสิ้นเปลืองพลังงานที่ค่อนข้างสูง แต่มันมีบทบาทเป็นหนึ่งในปัจจัยสำคัญในชีวิตประจำวันของเกือบทุกๆ ครัวเรือน และสำหรับธุรกิจทุกๆ ภาคส่วนด้วยใช่มั้ยคะ ซึ่งจุดนี้เองที่เกิดเป็นแรงบันดาลใจและผลักดันให้เราเกิดแนวคิดในการวิจัยและพัฒนาผลิตภัณฑ์ขึ้นมา จนในที่สุดก็กลายมาเป็น “นวัตกรรมเครื่องทำน้ำร้อนฟรีจากเครื่องปรับอากาศ” ค่ะ หลักการคือเราอาศัยเทคโนโลยีการแลกเปลี่ยนความร้อน โดยนำเอาพลังงานที่ต้องสูญเสียไปอย่างสิ้นเปลืองในระบบปรับอากาศเนี่ย นำมาปรับอุณหภูมิน้ำให้สูงขึ้นจนเป็นน้ำร้อน ซึ่งเราพัฒนาจนสามารถทดแทนการต้มน้ำร้อนจาก Heater ไฟฟ้าได้ 100% จากนั้นเราก็มีการพัฒนาผลิตภัณฑ์ประหยัดพลังงานมาเรื่อยๆ จนปัจจุบัน PAC ก็ได้รับการยอมรับให้เป็นหนึ่งในผู้นำทางด้านนวัตกรรมพลังงานสะอาดในระดับแนวหน้าของประเทศค่ะ

   ต่อมา PAC ได้มีโอกาสรู้จักกับทาง any i ค่ะ และก็ได้มีโอกาสจับมือทำธุรกิจร่วมกัน โดย any i เป็นบริษัทที่มีความเชี่ยวชาญทางด้านให้คำปรึกษาทางด้านธุรกิจ การบริหารจัดการ การวางแผนกลยุทธ์ทางการตลาด การวางระบบบัญชี คลังสินค้า และระบบไอที ตลอดจนให้คำแนะนำในการแก้ปัญหาทางธุรกิจอย่างรอบด้าน ในขณะที่ตัว PAC เองก็มีความแข็งแรงและโดดเด่นทางด้านผลิตภัณฑ์ การที่ทั้ง 2 ฝ่ายได้ทำงานร่วมกันจึงเกิดการส่งเสริมซึ่งกันและกันในแต่ละด้าน ทำให้ PAC เติบโตอย่างสม่ำเสมอและต่อเนื่อง สามารถเตรียมความพร้อมรองรับการเจริญเติบโตของธุรกิจในอนาคต จากการกำหนดทิศทางของธุรกิจของตัวเองได้เองอย่างมีประสิทธิภาพมากขึ้นค่ะ"​
*/
?>