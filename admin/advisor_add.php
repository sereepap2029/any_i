
<?
include("views/admin_header.php");
require_once("../model/m_advisor.php");
$m_advisor = new M_advisor;
$edit=false;
$advisor=null;
if (isset($_GET['edit'])) {
    $edit=true;
    $advisor=$m_advisor->get_advisor_by_id($_GET['id'])->result;
}else if (isset($_POST['title'])) {
    if (isset($_POST['id'])) {
        $advisor=$m_advisor->get_advisor_by_id($_POST['id'])->result;
        $ad_id=$advisor[0]['id'];
        $data = array(
            'title' => $_POST['title'], 
            'name' => $_POST['name'], 
            'Position' => $_POST['Position'], 
            'title_en' => $_POST['title_en'], 
            'name_en' => $_POST['name_en'], 
            'Position_en' => $_POST['Position_en'], 
            );
        if ($_POST['file_path']!="") {
            @unlink("../media/advisor/" . $advisor[0]['picture']);
            $filename = $_POST['file_path'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_id . "_".time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/advisor/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['picture'] = "no";
                    } 
                    else {
                        $data['picture'] = $new_filename;
                        @unlink("../media/tmp/" . $filename);
                    }
        }
        $m_advisor->update_advisor($data,$ad_id);
        ?>
        <script type="text/javascript">
        window.open("./advisor_list.php","_self");
        </script>
        <?
    }else{
        $ad_id=$m_advisor->generate_id();
        $data = array(
            'id' => $ad_id, 
            'title' => $_POST['title'], 
            'name' => $_POST['name'], 
            'Position' => $_POST['Position'], 
            'title_en' => $_POST['title_en'], 
            'name_en' => $_POST['name_en'], 
            'Position_en' => $_POST['Position_en'], 
            );
        if ($_POST['file_path']!="") {
            $filename = $_POST['file_path'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_id . "_".time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/advisor/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['picture'] = "no";
                    } 
                    else {
                        $data['picture'] = $new_filename;
                        @unlink("../media/tmp/" . $filename);
                    }
        }
        $m_advisor->insert_advisor($data);
        ?>
        <script type="text/javascript">
        window.open("./advisor_list.php","_self");
        </script>
        <?
    }
}else if(isset($_GET['delete'])&&isset($_GET['id'])){
    $advisor=$m_advisor->get_advisor_by_id($_GET['id'])->result;
    @unlink("../media/advisor/" . $advisor[0]['picture']);
    $m_advisor->delete_advisor($advisor[0]['id']);
    ?>
        <script type="text/javascript">
        window.open("./advisor_list.php","_self");
        </script>
        <?
}
?>
<style type="text/css">
.row-fluid .no-margin-left {
    margin-left: 0px;
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
                        <div class="muted pull-left">Add admin Account </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <h5> <?if (isset($err_msg)) {
                                        echo "*******".$err_msg."*******";
                                    }?></h5>
                            <form class="form-horizontal" method="post" action="advisor_add.php">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">title</label>
                                        <div class="controls">                                            
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="title" type="text" name="title" link="">
                                            <? }else{ ?>
                                            <input type="hidden" name="id" value="<?echo $advisor[0]['id'];?>">
                                            <input class="focused" id="title" type="text" name="title" value="<?echo $advisor[0]['title'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">name</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="" type="text" name="name">
                                            <? }else{ ?>
                                            <input class="focused" id="" type="text" name="name" value="<?echo $advisor[0]['name'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Position</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="" type="text" name="Position">
                                            <? }else{ ?>
                                            <input class="focused" id="" type="text" name="Position" value="<?echo $advisor[0]['Position'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">title_en</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="" type="text" name="title_en">
                                            <? }else{ ?>
                                            <input class="focused" id="" type="text" name="title_en" value="<?echo $advisor[0]['title_en'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">name_en</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="" type="text" name="name_en">
                                            <? }else{ ?>
                                            <input class="focused" id="" type="text" name="name_en" value="<?echo $advisor[0]['name_en'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Position_en</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="" type="text" name="Position_en">
                                            <? }else{ ?>
                                            <input class="focused" id="" type="text" name="Position_en" value="<?echo $advisor[0]['Position_en'];?>">
                                            <? } ?>
                                        </div>
                                    </div>                                
                                    <div class="control-group">
                                        <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>เลือกไฟล์</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload" type="file" name="files[]">
                                        </span>
                                        <br>
                                        <br>
                                        <!-- The global progress bar -->
                                        <div id="progress" class="progress progress-striped progress-success active">
                                            <div class="bar progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="span12 no-margin-left" style="margin-bottom:20px;">
                                    <?
                                    if ($edit) {
                                      ?>
                                      <img src="../media/advisor/<?php echo $advisor[0]['picture']; ?>" id="file_tmp" class="span4">
                                      <?
                                    }else{
                                      ?>
                                      <img src="" id="file_tmp" class="span4">
                                      <?
                                    }
                                    ?>
                                        
                                        <input type="hidden" id="file_path" name="file_path" value="">
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
                    if (file.error == "File is too big") {
                        $("#file_tmp").attr("alt", "ไฟล์ขนาดไหญ่เกินไป");
                        $("#file_tmp").attr("src", "");
                    } else {
                        $("#file_tmp").attr("alt", "Upload Complete file " + file.name);
                        $("#file_path").val(file.name);
                        $("#file_tmp").attr("src", '../media/tmp/' + file.name);
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