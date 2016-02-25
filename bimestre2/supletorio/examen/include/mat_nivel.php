<?php 
$conn = new mysqli('localhost' , 'root' , '', 'examen2');
$sql="SELECT * FROM materia WHERE id_materia='".$_POST['idmateria']."'";
$res = mysqli_query($conn, $sql);
$c=1;
while($row_mat = mysqli_fetch_assoc($res)){
?>
<?php echo $row_mat['nombre']; ?>
</br>
<?php $c++;} ?>      