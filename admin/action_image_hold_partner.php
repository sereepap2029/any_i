<div class="img_hold">
    <img src="<?=$_POST['file_path']?>" class="span10 file_tmp" alt="<?=$_POST['alt']?>">
    <input type="hidden" class="file_path" name="file_path[]" value="<?=$_POST['file']?>">
    <button type="button" class="btn btn-success del_tmp"><i class="icon-remove icon-white"></i></button>
    <div class="span12 no-margin-left">
        <input type="text" name="link[]" value="http://www.example.com" style="width:120px;">
    </div>
</div>
