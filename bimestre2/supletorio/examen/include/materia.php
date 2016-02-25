<?php 
$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
$sql="SELECT * FROM materia";
$res = mysqli_query($conn, $sql);
$c=1;
while($row_mat = mysqli_fetch_assoc($res)){
?>
<?php echo $row_mat['nombre']; ?>
<input type="checkbox" id="materia<?=$c?>" name="materia<?=$c?>" onclick="mostrarMateriaNivel()" value="<?php echo $row_mat['nombre']; ?>">

</br>
<?php $c++; } ?>                          

 

