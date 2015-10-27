<?
include("views/admin_header.php");
require_once("../model/m_advisor.php");
$m_advisor = new M_advisor;
$advisor=$m_advisor->get_all_advisor(100000,0);
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
                                <div class="muted pull-left">Dashboard</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="advisor_add.php"><button class="btn btn-success">Add Advisor <i class="icon-plus icon-white"></i></button></a>
                                      </div>                                      
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                              <th>Picture</th>
                                              <th>Title</th>
                                              <th>Name</th>
                                              <th>Position</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody id="table_sort">
                                             <?
                                             foreach ($advisor->result as $key => $value) {
                                             	?>
                                             	<tr>
                                             		<td>
                                             			<img src="../media/advisor/<?=$value['picture']?>" style="width:200px">
                                             		</td>
                                             		<td>
                                             			<?=$value['title']."(".$value['title_en'].")"?>
                                             		</td>
                                             		<td>
                                             			<?=$value['name']."(".$value['name_en'].")"?>
                                             		</td>
                                             		<td>
                                             			<?=$value['Position']."(".$value['Position_en'].")"?>
                                             		</td>
                                             		<td>
                                             			<a href="advisor_add.php?edit=yes&id=<?=$value['id']?>" class="btn btn-info"><i class="icon-pencil icon-white"></i></a>
                                             			<a href="javascript:del_advisor('advisor_add.php?delete=yes&id=<?=$value['id']?>');" class="btn btn-danger">x</a>
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
		      placeholder: "ui-state-highlight"
		    });
		    $( "#table_sort" ).disableSelection();
		    function del_advisor(link){
		    	if(confirm("แน่ใจ๋")){
		    		window.open(link,"_self");
		    	}
		    }
        </script>
<?
include("views/footer.php");
?>