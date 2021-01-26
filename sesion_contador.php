<html>
	<head>
		<title>
			explicacion
		</title>
	</head>
	<body>
		<?php
		session_start();

    if(isset($_SESSION['contador'])) {
            if($_SESSION['contador'] < 10){
                    $_SESSION['contador'] = $_SESSION['contador'] + 1;
                    echo '<br>';
                    $_SESSION['id'] = session_id();
                    echo '<br>';
                    echo $_SESSION['id'];
                    echo '<br>';
                    echo "<p>Este manual ha sido visitado"." ".$_SESSION['contador']." "."veces."."</p>";
            }elseif($_SESSION['contador']  >= 10){
                    session_destroy();
                        $_SESSION['contador'] = 0;
                        echo '<br>';
                        echo "<p>Este manual ha sido visitado"." ".$_SESSION['contador']." "."veces."."</p>";
                        if(isset($_COOKIE[session_name()])) {
                            setcookie(session_name(), '', time() - 42000, '/');
                          };
            };
} else{
     $_SESSION['contador'] = 1;
     		$_SESSION['id'] = session_id();
             echo $_SESSION['id'];
             echo '<br>';
             echo "<p>Este manual ha sido visitado"." ".$_SESSION['contador']." "."veces."."</p>";
   };
		?>
	</body>
</html>
