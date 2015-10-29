
<?
include("views/admin_header.php");
require_once("../model/m_action.php");
$m_action = new M_action;
$edit=false;
$action=null;
if (isset($_GET['edit'])) {
    $edit=true;
    $action=$m_action->get_action_by_id($_GET['id'])->result;
}else if (isset($_POST['title'])) {
    if (isset($_POST['id'])) {
        $action=$m_action->get_action_by_id($_POST['id'])->result;
        $data = array(
            'title' => $_POST['title'], 
            'description' => $_POST['description'], 
            'title_en' => $_POST['title_en'], 
            'description_en' => $_POST['description_en'], 
            'detail_title' => $_POST['detail_title'], 
            'detail_description' => $_POST['detail_description'], 
            'detail_title_en' => $_POST['detail_title_en'], 
            'detail_description_en' => $_POST['detail_description_en'], 
            );
        $m_action->update_action($data,$_POST['id']);
        $sort_order=0;
        foreach ($_POST['file_path'] as $key => $value) {
            $filename = $value;
            $pos = strpos($filename, "old_file_picture__");
            if ($pos === false&&$filename!="") {

                $ad_pid=$m_action->generate_pid();
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $_POST['id'] . "_".$ad_pid."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/action/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['picture'] = "no";
                    } 
                    else {
                        $pdata = array(
                            'id' => $ad_pid, 
                            'filename' => $new_filename, 
                            'sort_order' => $sort_order, 
                            'action_id' => $_POST['id'], 
                            );
                        $m_action->insert_action_photo($pdata);
                        @unlink("../media/tmp/" . $filename);
                    }
            }else{
                $ext=explode("__", $filename);
                $data_photo= array(
                        'sort_order' => $sort_order,
                        );            
                    $m_action->update_action_photo($data_photo,$ext[1]);     
            }
            $sort_order+=1;
        }
        
        ?>
        <script type="text/javascript">
        window.open("./in_action_list.php","_self");
        </script>
        <?
    }else{
        $ad_id=$m_action->generate_id();
        $data = array(
            'id' => $ad_id, 
            'title' => $_POST['title'], 
            'description' => $_POST['description'], 
            'title_en' => $_POST['title_en'], 
            'description_en' => $_POST['description_en'], 
            'detail_title' => $_POST['detail_title'], 
            'detail_description' => $_POST['detail_description'], 
            'detail_title_en' => $_POST['detail_title_en'], 
            'detail_description_en' => $_POST['detail_description_en'], 
            );
        $m_action->insert_action($data);
        foreach ($_POST['file_path'] as $key => $value) {
            $filename = $value;
            $ad_pid=$m_action->generate_pid();
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_id . "_".$ad_pid."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/action/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['picture'] = "no";
                    } 
                    else {
                        $pdata = array(
                            'id' => $ad_pid, 
                            'filename' => $new_filename, 
                            'sort_order' => $key, 
                            'action_id' => $ad_id, 
                            );
                        $m_action->insert_action_photo($pdata);
                        @unlink("../media/tmp/" . $filename);
                    }
        }
        
        ?>
        <script type="text/javascript">
        window.open("./in_action_list.php","_self");
        </script>
        <?
    }
}else if(isset($_GET['delete'])&&isset($_GET['id'])){
    $action=$m_action->get_action_by_id($_GET['id'])->result;
    $photo=$m_action->get_all_action_photo($action[0]['id'])->result;
    foreach ($photo as $key => $value) {
       @unlink("../media/action/" . $value['filename']);
       $m_action->delete_action_photo($value['id']);
    }
    
    $m_action->delete_action($action[0]['id']);
    ?>
        <script type="text/javascript">
        window.open("./in_action_list.php","_self");
        </script>
        <?
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
                        <div class="muted pull-left">Add any i inaction </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <h5> <?if (isset($err_msg)) {
                                        echo "*******".$err_msg."*******";
                                    }?></h5>
                            <form class="form-horizontal" method="post" action="in_action_add.php">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Title</label>
                                        <div class="controls">                                            
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="title" type="text" name="title" link="">
                                            <? }else{ ?>
                                            <input type="hidden" name="id" value="<?echo $action[0]['id'];?>">
                                            <input class="focused" id="title" type="text" name="title" value="<?echo $action[0]['title'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Description</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>                                            
                                            <textarea class="span7 focused" style="height:200px" name="description"></textarea>
                                            <? }else{ ?>
                                            <textarea class="span7 focused" style="height:200px" name="description"><?echo $action[0]['description'];?></textarea>                                            
                                            <? } ?>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Detail title &nbsp;&nbsp;&nbsp;<font style="color:red">เป็นหัวข้อที่ใช้ในหน้า รายละเอียดของ Any i incation</font></label>
                                        <div class="controls">                                            
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="detail_title" type="text" name="detail_title" link="">
                                            <? }else{ ?>
                                            <input type="hidden" name="id" value="<?echo $action[0]['id'];?>">
                                            <input class="focused" id="detail_title" type="text" name="detail_title" value="<?echo $action[0]['detail_title'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Detail description &nbsp;&nbsp;&nbsp;<font style="color:red">เป็นรายละเอียดที่ใช้ในหน้า รายละเอียดของ Any i incation</font></label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>                                            
                                            <textarea class="span7 focused" style="height:200px" name="detail_description"></textarea>
                                            <? }else{ ?>
                                            <textarea class="span7 focused" style="height:200px" name="detail_description"><?echo $action[0]['detail_description'];?></textarea>                                            
                                            <? } ?>
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Title EN</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="" type="text" name="title_en">
                                            <? }else{ ?>
                                            <input class="focused" id="" type="text" name="title_en" value="<?echo $action[0]['title_en'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Description EN</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            
                                            <textarea class="span7 focused" style="height:200px" name="description_en"></textarea>
                                            <? }else{ ?>
                                            <textarea class="span7 focused" style="height:200px" name="description_en"><?echo $action[0]['description_en'];?></textarea>                                            
                                            <? } ?>
                                        </div>
                                    </div>             

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Detail title EN &nbsp;&nbsp;&nbsp;<font style="color:red">เป็นหัวข้อที่ใช้ในหน้า รายละเอียดของ Any i incation</font></label>
                                        <div class="controls">                                            
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="detail_title_en" type="text" name="detail_title_en" link="">
                                            <? }else{ ?>
                                            <input type="hidden" name="id" value="<?echo $action[0]['id'];?>">
                                            <input class="focused" id="detail_title_en" type="text" name="detail_title_en" value="<?echo $action[0]['detail_title_en'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Detail description EN &nbsp;&nbsp;&nbsp;<font style="color:red">เป็นรายละเอียดที่ใช้ในหน้า รายละเอียดของ Any i incation</font></label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>                                            
                                            <textarea class="span7 focused" style="height:200px" name="detail_description_en"></textarea>
                                            <? }else{ ?>
                                            <textarea class="span7 focused" style="height:200px" name="detail_description_en"><?echo $action[0]['detail_description_en'];?></textarea>                                            
                                            <? } ?>
                                        </div>
                                    </div>                   
                                    <div class="control-group">
                                        <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>เลือกไฟล์</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload" type="file" name="files[]" multiple>
                                        </span>&nbsp;&nbsp;&nbsp;<font style="color:red">รูปแรกขนาด 200px X 200px ที่เหลือขนาด 1280px X 840px<br> รูปขนาด 1280px X 840px ต้องมีอย่างน้อย 3 รูป โดยที่รูปแรกที่ขนาด 1280px X 840px จะเป็นรูปที่โชวหน้า Home</font>
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
                                                    if ($edit) {
                                                        $photo=$m_action->get_all_action_photo($action[0]['id'])->result;
                                                      foreach ($photo as $key => $value) {
                                                        ?>
                                                        <div class="img_hold">
                                                            <img src="../media/action/<?=$value['filename']?>" class="span10 file_tmp">
                                                            <input type="hidden" class="file_path" name="file_path[]" value="<?="old_file_picture__".$value['id']?>">
                                                            <button id="<?=$value['id']?>" file="<?=$value['filename']?>" type="button" class="btn btn-success del_pic"><i class="icon-remove icon-white"></i></button>
                                                        </div>
                                                        <?
                                                      }
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
      $.ajax({
                                    method: "POST",
                                    url: "./del_image.php",
                                    data: {
                                        "type":"real",
                                        "id": cue_ele.attr("id"),
                                        "filename": cue_ele.attr("file"),
                                    }
                                })
                                .done(function(data) {
                                    cue_ele.parent().fadeOut(500,function(){
                                      $(this).remove();
                                    });
                                });
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
                                    url: "./action_image_hold.php",
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
                                    url: "./action_image_hold.php",
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