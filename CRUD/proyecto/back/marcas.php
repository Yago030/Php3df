<?php include('header.php'); ?>
<?php
if (isset($_REQUEST['mode'])=='remove') {

	    	$strsql = "Delete from categorias where id_categoria=".addslashes($_REQUEST['id']);
			$result = MySQLSESSION_ExecuteSQL($strsql);
}
?>
<script type="text/javascript">
function deleteAlert(name,id){

	var conBox = confirm("Desea Borrar: " + name);

	if(conBox){ 

		location.href="<?php $_SERVER['PHP_SELF']; ?>?id="+ id + "&mode=remove";

	}else{

		return;

	}

}
</script>	
	
<!--/row-->
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Categorias</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
                              <tr>
									  <th colspan="6" >
							    <a style="float:right" class="btn btn-success" href="categorias-editar.php?action=alta"> <i class="icon-plus icon-white"></i>Nuevo </a></th>
							    </tr>
								  <tr>
									  
									  <th>Categoria</th>
									                                      
								       <th>Acciones</th>
								  </tr>
							  </thead>   
							  <tbody>
								<?php
$pag=$_GET["pag"];
if (!isset($pag)) $pag = 1; // Por defecto, pagina 1
$tampag = 10;
$columna = 1;
$reg1 = ($pag-1) * $tampag;

$sql="select * from categorias where 1";



$result = MySQLSESSION_ExecuteSQL($sql." order by categoria asc");



	$linea= 1;
		
$total = mysqli_num_rows($result);

for ($i=$reg1; $i<min($reg1+$tampag, $total); $i++) {
    mysqli_data_seek($result, $i);
	$row = mysqli_fetch_array($result);
	
		
		
	?>
                                <tr>
									
									<td class="center"><?php echo $row['categoria']; ?></td>
									
									
								    <td class="center"> <a class="btn btn-info" href="categorias-editar.php?id=<?php echo $row['id_categoria']; ?>&action=modificar"> <i class="icon-edit icon-white"></i> Editar </a> <a class="btn btn-danger" href="javascript: deleteAlert('<?php echo $row['categoria']; ?>','<?php echo $row['id_categoria'];?>')"> <i class="icon-trash icon-white"></i> Borrar </a></td>
								</tr>
                                <?php }  ?>
							  </tbody>
						 </table>  
<div class="pagination pagination-centered">
						  <ul>
							<?php  echo paginar($pag, $total, $tampag, "categorias.php?pag="); ?>
						  </ul>
						</div>     
			   
					</div>
				</div><!--/span-->
			</div><!--/row-->
   
<?php include('footer.php'); ?>
