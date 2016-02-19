
<?
include("views/admin_header.php");
require_once("../model/m_partner.php");
$m_partner = new M_partner;
$edit=false;
$partner=null;
$err_msg = array();
if (isset($_POST['file_path'])) {
        $sort_order=0;
        foreach ($_POST['file_path'] as $key => $value) {
            $filename = $value;
            $pos = strpos($filename, "old_file_picture__");
            if ($pos === false&&$filename!="") {

                $ad_pid=$m_partner->generate_id();
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_pid . "_".time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/partner/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                    } 
                    else {
                        $pdata = array(
                            'id' => $ad_pid, 
                            'filename' => $new_filename, 
                            'sort_order' => $sort_order, 
                            'link' => $_POST['link'][$key],
                            );
                        $m_partner->insert_partner($pdata);
                        @unlink("../media/tmp/" . $filename);
                    }
            }else{
                $ext=explode("__", $filename);
                $data_photo= array(
                        'sort_order' => $sort_order,
                        'link' => $_POST['link'][$key],
                        );            
                    $m_partner->update_partner($data_photo,$ext[1]);     
            }
            $sort_order+=1;
        }
        
        ?>
        <script type="text/javascript">
        //window.open("./main.php","_self");
        </script>
        <?  
        $err_msg['note']="บันทึกเรียบร้อยแล้ว";
}
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
                        <div class="muted pull-left">Business Partner</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <h5> <?if (isset($err_msg['note'])) {
                                        echo "*******".$err_msg['note']."*******";
                                    }?></h5>
                            <form class="form-horizontal" method="post" action="business_partner.php">
                                <fieldset>                                                             
                                    <div class="control-group">
                                        <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>เลือกไฟล์</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload" type="file" name="files[]" multiple>
                                        </span>&nbsp;&nbsp;&nbsp;<font style="color:red">รูปขนาด 300px X 300px</font>
                                        <br>
                                        <br>
                                        <!-- The global progress bar -->
                                        <div id="progress" class="progress progress-striped progress-success active">
                                            <div class="bar progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                    <hr>
                                                <div id="img_hold_parent" class="span12 no-margin-left" style="margin-bottom:20px;">
                                                    <?
                                                        $photo=$m_partner->get_all_partner(10000,0)->result;
                                                      foreach ($photo as $key => $value) {
                                                        ?>
                                                        <div class="img_hold">
                                                            <img src="../media/partner/<?=$value['filename']?>" class="span10 file_tmp">
                                                            <input type="hidden" class="file_path" name="file_path[]" value="<?="old_file_picture__".$value['id']?>">
                                                            <button id="<?=$value['id']?>" file="<?=$value['filename']?>" type="button" class="btn btn-success del_pic"><i class="icon-remove icon-white"></i></button>
                                                            <div class="span12 no-margin-left">
                                                                <input type="text"  name="link[]" value="<?=$value['link']?>" style="width:120px;">
                                                            </div>
                                                        </div>
                                                        <?
                                                      }
                                                    ?>
                                                    
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
<script>
/*jslint unparam: true */
/*global window, $ */
$( "#img_hold_parent" ).sortable({
      placeholder: "ui-state-highlight"
    });
    $( "#img_hold_parent" ).disableSelection();


    $(document).on('click', ".img_hold .del_tmp", function(){
      cue_ele=$(this);
      $.ajax({
                                    method: "POST",
                                    url: "./del_image.php",
                                    data: {
                                        "type":"temp",
                                        "file": cue_ele.parent().find("input").val(),
                                    }
                                })
                                .done(function(data) {
                                    cue_ele.parent().fadeOut(500,function(){
                                      $(this).remove();
                                    });
                                });
    });
    $(document).on('click', ".img_hold .del_pic", function(){
      cue_ele=$(this);
      if (confirm("ยืนยันลบข้อมูล Partner")) {
        $.ajax({
                                    method: "POST",
                                    url: "./del_image.php",
                                    data: {
                                        "type":"partner",
                                        "id": cue_ele.attr("id"),
                                        "filename": cue_ele.attr("file"),
                                    }
                                })
                                .done(function(data) {
                                    cue_ele.parent().fadeOut(500,function(){
                                      $(this).remove();
                                    });
                                });
      }
      
    });
$(function() {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = './uploadhandle/';
    $('#fileupload').fileupload({
            previewThumbnail: false,
            url: url,
            dataType: 'json',
            beforeSend: function() {
                $('#progress .progress-bar').css(
                    'width',
                    '10%'
                );
            },
            done: function(e, data) {
                //console.log(data);

                $.each(data.result.files, function(index, file) {
                    //console.log(file);
                   if (file.error=="File is too big") {
                                $.ajax({
                                    method: "POST",
                                    url: "./action_image_hold_partner.php",
                                    data: {
                                        "file": "",
                                        "file_path": "",
                                        "alt": "ไฟล์ "+file.name+" ขนาดไหญ่เกินไป",
                                    }
                                })
                                .done(function(data) {
                                    $("#img_hold_parent").append(data);
                                });
                            }else{
                                $.ajax({
                                    method: "POST",
                                    url: "./action_image_hold_partner.php",
                                    data: {
                                        "file": file.name,
                                        "file_path": "../media/tmp/"+file.name,
                                        "alt": "",
                                    }
                                })
                                .done(function(data) {
                                    $("#img_hold_parent").append(data);
                                });
                            }
                });

            },
            progressall: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
<?
include("views/footer.php");
?>