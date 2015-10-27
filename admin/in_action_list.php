<?
include("views/admin_header.php");
require_once("../model/m_action.php");
$m_action = new M_action;
$action=$m_action->get_all_action(100000,0);
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
                                <div class="muted pull-left">Any I in action</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="in_action_add.php"><button class="btn btn-success">Add Any I in action <i class="icon-plus icon-white"></i></button></a>
                                      </div>                                      
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                              <th>Picture</th>
                                              <th>Title</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody id="table_sort">
                                             <?
                                             foreach ($action->result as $key => $value) {
                                                $photo=$m_action->get_all_action_photo($value['id'])->result;
                                             	?>
                                             	<tr>
                                             		<td>
                                             			<img src="../media/action/<?=$photo[0]['filename']?>" style="width:200px">
                                             		</td>
                                             		<td>
                                             		<input type="hidden" name="id[]" value="<?=$value['id']?>">
                                             			<?=$value['title']."(".$value['title_en'].")"?>
                                             		</td>
                                             		<td>
                                             			<a href="in_action_add.php?edit=yes&id=<?=$value['id']?>" class="btn btn-info"><i class="icon-pencil icon-white"></i></a>
                                             			<a href="javascript:del_action('in_action_add.php?delete=yes&id=<?=$value['id']?>');" class="btn btn-danger">x</a>
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
		      	sort_action();
		      },
		    });
		    $( "#table_sort" ).disableSelection();
		    function del_action(link){
		    	if(confirm("แน่ใจ๋")){
		    		window.open(link,"_self");
		    	}
		    }
		    function sort_action() {
			  var id=$("input[name='id[]']").serialize()
			  $.ajax({
			                method: "POST",
			                url: "./sort_action.php",
			                data: id
			            })
			            .done(function(data) {
			            });
			    
			}
        </script>
<?
include("views/footer.php");
?>