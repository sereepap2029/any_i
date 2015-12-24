
<?
include("views/admin_header.php");
require_once("../model/m_welcome.php");
$m_welcome = new M_welcome;
$edit=false;

$err_msg = array();
$err_msg[1]="";
if (isset($_POST['text'])) {
        $welcome=$m_welcome->get_all_welcome()->result;
        $data = array(
            'text' => $_POST['text'], 
            'type' => $_POST['type'], 
            );
        if ($_POST['file_path']!="") {
            @unlink("../media/video/" . $welcome[0]['vdo']);
            $filename = $_POST['file_path'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = time()."." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/video/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['vdo'] = "no";
                    } 
                    else {
                        $data['vdo'] = $new_filename;
                        @unlink("../media/tmp/" . $filename);
                    }
        }
        if ($_POST['file_img_path']!="") {
            @unlink("../media/video/" . $welcome[0]['img']);
            $filename = $_POST['file_img_path'];
                    $ext = explode(".", $filename);
                    $new_ext = $ext[count($ext) - 1];
                    $new_filename = time()."_img." . $new_ext;
                    $file = '../media/tmp/' . $filename;
                    $newfile = '../media/video/' . $new_filename;
                    
                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n" . $file . " to " . $newfile . "  and  ";
                        
                        @unlink("../media/tmp/" . $filename);
                        $data['img'] = "no";
                    } 
                    else {
                        $data['img'] = $new_filename;
                        @unlink("../media/tmp/" . $filename);
                    }
        }
        $m_welcome->update_welcome($data,1);
        $err_msg[1].="บันทึก เรียบร้อยแล้ว";
}
$welcome=$m_welcome->get_all_welcome()->result;
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
                        <div class="muted pull-left">Add Advisor </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <h5> <?if (isset($err_msg[1])) {
                                        echo "*******".$err_msg[1]."*******";
                                    }
                                    //print_r($welcome);
                                    ?>

                                    </h5>
                            <form class="form-horizontal" method="post" action="welcome_page.php">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Text</label>
                                        <div class="controls">            
                                            <input class="focused" id="text" type="text" name="text" value="<?echo $welcome[0]['text'];?>">
                                        
                                        </div>
                                    </div>    
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Welcome Type</label>
                                        <div class="controls">            
                                            <input class="focused" id="text" type="radio" name="type" value="img" <?if ($welcome[0]['type']=="img") {
                                                echo "checked";
                                            }?>>Image &nbsp;&nbsp;<font style="color:red">แสดง เฉพาะรูปภาพเท่านั้นในทุกขนาด Screen</font><br><br>
                                            <input class="focused" id="text" type="radio" name="type" value="vdo" <?if ($welcome[0]['type']=="vdo") {
                                                echo "checked";
                                            }?>>Video &nbsp;&nbsp;&nbsp;<font style="color:red">แสดง VDO เมื่ออยู่ในขนาด Screen ที่ไหญ่กว่า 1000px และแสดงรูปภาพเมื่อ ขนาด Screen น้อยกว่า 1000px</font>
                                        
                                        </div>
                                    </div>                                                                
                                    <div class="control-group">
                                        <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>เลือกไฟล์</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload" type="file" name="files[]">
                                        </span>&nbsp;&nbsp;&nbsp;<font style="color:red">ไฟล์ MP4 เท่านั้น</font>
                                        <br>
                                        <br>
                                        <!-- The global progress bar -->
                                        <div id="progress" class="progress progress-striped progress-success active">
                                            <div class="bar progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="span12 no-margin-left" style="margin-bottom:20px;">
                                      <video autoplay id="file_tmp" loop>
                                            <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                                            <source src="../media/video/<?echo $welcome[0]['vdo'];?>" type="video/mp4">
                                        </video>
                                        
                                        <input type="hidden" id="file_path" name="file_path" value="">
                                    </div>
                                    <hr>
                                    <div class="control-group">
                                        <span class="btn btn-success fileinput-button">
                                                        <i class="glyphicon glyphicon-plus"></i>
                                                        <span>เลือกไฟล์</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload2" type="file" name="files[]">
                                        </span>&nbsp;&nbsp;&nbsp;<font style="color:red">ไฟล์ jpg jpeg png gif เท่านั้น</font>
                                        <br>
                                        <br>
                                        <!-- The global progress bar -->
                                        <div id="progress2" class="progress progress-striped progress-success active">
                                            <div class="bar progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="span12 no-margin-left" style="margin-bottom:20px;">
                                      <img id="file_img_tmp" src="../media/video/<?echo $welcome[0]['img'];?>">
                                        
                                        <input type="hidden" id="file_img_path" name="file_img_path" value="">
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
                        $("#file_tmp source").attr("src", "");
                    } else {
                        $("#file_tmp").attr("alt", "Upload Complete file " + file.name);
                        $("#file_path").val(file.name);
                        $("#file_tmp source").attr("src", '../media/tmp/' + file.name);
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
                        $("#file_img_tmp").attr("alt", "ไฟล์ขนาดไหญ่เกินไป");
                        $("#file_img_tmp").attr("src", "");
                    } else {
                        $("#file_img_tmp").attr("alt", "Upload Complete file " + file.name);
                        $("#file_img_path").val(file.name);
                        $("#file_img_tmp").attr("src", '../media/tmp/' + file.name);
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