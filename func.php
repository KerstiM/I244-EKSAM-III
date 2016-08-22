<?php
function connect_db(){
  global $L;
  $host="localhost";
  $user="test";
  $pass="t3st3r123";
  $db="test";
  $L = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
  mysqli_query($L, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($L));
}

//Hinde tekitamine
function tekita_hinne(){
global $L;
    if (!empty($_POST)){
    			$hinne = mysqli_real_escape_string($L, $_POST['hinne']);
    			$sql = "INSERT INTO kmiller_hinne (id, hinne) VALUES ($id, $hinne))";
    			$result= mysqli_query($L, $sql);
      			//header("Location: ?");
    			    //exit(0);
          echo $result;
    		}
    	}

//Hinde kuvamine
function kuva_hinne(){
	global $L;
	$hinne = array();
	$sql = "SELECT hinne FROM kmiller_hinne;";
	$result = mysqli_query($L, $sql);
	while ($r=mysqli_fetch_assoc($result)){
		$hinne[]=$r;
	}
	return $hinne;
}


?>
