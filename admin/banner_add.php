
<?
include("views/admin_header.php");
require_once("../model/m_banner.php");
$m_banner = new M_banner;
$edit=false;
$banner=null;
if (isset($_GET['edit'])) {
    $edit=true;
    $banner=$m_banner->get_banner_by_id($_GET['id'])->result;
}else if (isset($_POST['text'])) {
    if (isset($_POST['id'])) {
        $banner=$m_banner->get_banner_by_id($_POST['id'])->result;
        $ad_id=$banner[0]['id'];
        $data = array(
            'text' => $_POST['text'], 
            'text_en' => $_POST['text_en'], 
            );
        if ($_POST['file_path']!="") {
            @unlink("../media/banner/" . $banner[0]['picture']);
            $filename = $_POST['file_path'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_id . "_".time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/banner/' . $new_filename;
                    
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

        if ($_POST['file_path2']!="") {
            $filename = $_POST['file_path2'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_id . "_mobile_".time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/banner/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['picture_mobile'] = "no";
                    } 
                    else {
                        $data['picture_mobile'] = $new_filename;
                        @unlink("../media/tmp/" . $filename);
                    }
        }
        $m_banner->update_banner($data,$ad_id);
        ?>
        <script type="text/javascript">
        window.open("./main.php","_self");
        </script>
        <?
    }else{
        $ad_id=$m_banner->generate_id();
        $data = array(
            'id' => $ad_id, 
            'text' => $_POST['text'], 
            'text_en' => $_POST['text_en'], 
            );
        if ($_POST['file_path']!="") {
            $filename = $_POST['file_path'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_id . "_".time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/banner/' . $new_filename;
                    
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
        if ($_POST['file_path2']!="") {
            $filename = $_POST['file_path2'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = $ad_id . "_mobile_".time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/banner/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['picture_mobile'] = "no";
                    } 
                    else {
                        $data['picture_mobile'] = $new_filename;
                        @unlink("../media/tmp/" . $filename);
                    }
        }
        $m_banner->insert_banner($data);
        ?>
        <script type="text/javascript">
        window.open("./main.php","_self");
        </script>
        <?
    }
}else if(isset($_GET['delete'])&&isset($_GET['id'])){
    $banner=$m_banner->get_banner_by_id($_GET['id'])->result;
    @unlink("../media/banner/" . $banner[0]['picture']);
    @unlink("../media/banner/" . $banner[0]['picture_mobile']);
    $m_banner->delete_banner($banner[0]['id']);
    ?>
        <script type="text/javascript">
        window.open("./main.php","_self");
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
                        <div class="muted pull-left">Add Banner </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <h5> <?if (isset($err_msg)) {
                                        echo "*******".$err_msg."*******";
                                    }?></h5>
                            <form class="form-horizontal" method="post" action="banner_add.php">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Text</label>
                                        <div class="controls">                                            
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="text" type="text" name="text" link="">
                                            <? }else{ ?>
                                            <input type="hidden" name="id" value="<?echo $banner[0]['id'];?>">
                                            <input class="focused" id="text" type="text" name="text" value="<?echo $banner[0]['text'];?>">
                                            <? } ?>
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Text EN</label>
                                        <div class="controls">
                                            <? if (!$edit) { ?>
                                            <input class="focused" id="" type="text" name="text_en">
                                            <? }else{ ?>
                                            <input class="focused" id="" type="text" name="text_en" value="<?echo $banner[0]['text_en'];?>">
                                            <? } ?>
                                        </div>
                                    </div>                              
                                    <div class="control-group">
                                        <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>เลือกไฟล์</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload" type="file" name="files[]">
                                        </span>&nbsp;&nbsp;&nbsp;Desktop Image<font style="color:red">1280px X 700px</font>
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
                                      <img src="../media/banner/<?php echo $banner[0]['picture']; ?>" id="file_tmp" class="span4">
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
                                        <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>เลือกไฟล์</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload2" type="file" name="files[]">
                                        </span>&nbsp;&nbsp;&nbsp;Mobile Image<font style="color:red">320px X 480px</font>
                                        <br>
                                        <br>
                                        <!-- The global progress bar -->
                                        <div id="progress2" class="progress progress-striped progress-success active">
                                            <div class="bar progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="span12 no-margin-left" style="margin-bottom:20px;">
                                    <?
                                    if ($edit) {
                                      ?>
                                      <img src="../media/banner/<?php echo $banner[0]['picture_mobile']; ?>" id="file_tmp2" class="span4">
                                      <?
                                    }else{
                                      ?>
                                      <img src="" id="file_tmp2" class="span4">
                                      <?
                                    }
                                    ?>
                                        
                                        <input type="hidden" id="file_path2" name="file_path2" value="">
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


$(function() {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = './uploadhandle/';
    $('#fileupload2').fileupload({
            previewThumbnail: false,
            url: url,
            dataType: 'json',
            beforeSend: function() {
                $('#progress2 .progress-bar').css(
                    'width',
                    '10%'
                );
            },
            done: function(e, data) {
                //console.log(data);

                $.each(data.result.files, function(index, file) {
                    //console.log(file);
                    if (file.error == "File is too big") {
                        $("#file_tmp2").attr("alt", "ไฟล์ขนาดไหญ่เกินไป");
                        $("#file_tmp2").attr("src", "");
                    } else {
                        $("#file_tmp2").attr("alt", "Upload Complete file " + file.name);
                        $("#file_path2").val(file.name);
                        $("#file_tmp2").attr("src", '../media/tmp/' + file.name);
                    }
                });

            },
            progressall: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress2 .progress-bar').css(
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