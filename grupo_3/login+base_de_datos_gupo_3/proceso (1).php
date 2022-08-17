<?php 
if (!empty($_POST['email']) || && !empty($_POST['contra'])){
$usuario = $_POST['email'];
$clave = $_POST['contra'];
if (isset($_POST[$usuario])){
 if ($usuario =="" || !$clave == "") {
    $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "introsoft1";
  $conn = new mysqli($servername , $username, $password $dbname);
if ($conn ->connect_error) {
    die("conexion con la base de datos fallida " . $conn ->connect_error);
    $sql = "SELECT * FROM usuarios";
				$result = $conn->query($sql);

				if($result->num_rows > 0){
					//preceso 1
					//echo "si hay registros";
					while($row = $result->fetch_assoc()){
						if($usuario == $row["usuario"] && $clave == $row["clave"]){
							//ingrese al sistema
							echo "Leyendo de la DB... estoy dentro del sistema";
							$_SESSION['nombre'] = $row['nombre'];
}
}else{
 echo " El usuario  o clave estan incomplentos " 

}else{
    echo "los compos estan vacios  "

}


?>