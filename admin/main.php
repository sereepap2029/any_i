<?

include("views/admin_header.php");
require_once("../model/m_banner.php");
$m_banner = new M_banner;
$banner=$m_banner->get_all_banner(100000,0);
?>
<style type="text/css">
	.ui-state-highlight { position: relative;
  width: 100%;
  height: 150px;
  margin:10px; 
}
</style>
<div class="container-fluid">
            <div class="row-fluid">                
                <div class="span12" id="content">

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Home Banner</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="banner_add.php"><button class="btn btn-success">Add Banner <i class="icon-plus icon-white"></i></button></a>
                                      </div>                                      
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                              <th>Picture</th>
                                              <th>Text</th>
                                              <th>Text EN</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody id="table_sort">
                                             <?
                                             foreach ($banner->result as $key => $value) {
                                             	?>
                                             	<tr>
                                             		<td>
                                             			<img src="../media/banner/<?=$value['picture']?>" style="width:200px">
                                             		</td>
                                             		<td>
                                             		<input type="hidden" name="id[]" value="<?=$value['id']?>">
                                             			<?=$value['text']?>
                                             		</td>
                                             		<td>
                                             			<?=$value['text_en']?>
                                             		</td>
                                             		<td>
                                             			<a href="banner_add.php?edit=yes&id=<?=$value['id']?>" class="btn btn-info"><i class="icon-pencil icon-white"></i></a>
                                             			<a href="javascript:del_banner('banner_add.php?delete=yes&id=<?=$value['id']?>');" class="btn btn-danger">x</a>
                                             		</td>
                                             	</tr>
                                             	<?
                                             }
                                             ?>                                                   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script type="text/javascript">
        	$( "#table_sort" ).sortable({
		      placeholder: "ui-state-highlight",
		      update: function( event, ui ) {
		      	sort_banner();
		      },
		    });
		    $( "#table_sort" ).disableSelection();
		    function del_banner(link){
		    	if(confirm("แน่ใจ๋")){
		    		window.open(link,"_self");
		    	}
		    }
		    function sort_banner() {
			  var id=$("input[name='id[]']").serialize()
			  $.ajax({
			                method: "POST",
			                url: "./sort_banner.php",
			                data: id
			            })
			            .done(function(data) {
			            });
			    
			}
        </script>
<?
include("views/footer.php");
?>
        