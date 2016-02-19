
<?
include("views/admin_header.php");
require_once("../model/m_contact.php");
$m_contact = new M_contact;
$edit=false;
$cont=null;
if (isset($_POST['detail'])) {
        $data = array(
            'detail' => $_POST['detail'], 
            'detail_en' => $_POST['detail_en'], 
            'email' => $_POST['email'], 
            );
        $m_contact->update_contact($data);
        $err_msg="บันทึกข้อมูลเรียบร้อยแล้ว";
    }
$cont=$m_contact->get_contact()->result;        
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
                        <div class="muted pull-left">Edit contact </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <h5> <?if (isset($err_msg)) {
                                        echo "*******".$err_msg."*******";
                                    }?></h5>
                            <form class="form-horizontal" method="post" action="contact_edit.php">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Contact Detail</label>
                                        <div class="controls">                                            
                                            <textarea class="span7 focused" style="height:200px" name="detail"><?echo $cont[0]['detail'];?></textarea>                                            
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Contact Detail EN</label>
                                        <div class="controls">                                            
                                            <textarea class="span7 focused" style="height:200px" name="detail_en"><?echo $cont[0]['detail_en'];?></textarea>                                            
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Contact Email</label>
                                        <div class="controls">                                            
                                            <input class="span7 focused" name="email" value="<?echo $cont[0]['email'];?>">
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