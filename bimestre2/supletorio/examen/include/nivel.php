<select id="obj_nivel" >
<option value="">Seleccionar...</option>
<?php 
$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
$sql="SELECT * FROM nivel";
$res = mysqli_query($conn, $sql);
while($row_nivel = mysqli_fetch_assoc($res)){
?>                        
<option value="<?php echo $row_nivel['id_nivel']; ?>"><?php echo $row_nivel['nombre']; ?></option>
<?php } ?>                          
</select>