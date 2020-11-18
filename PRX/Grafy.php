<!DOCTYPE html>
<html>
	<head>
		<title>Grafy</title>
		<meta charset = "utf-8">
		<link href="login.css" rel="stylesheet" type="text/cas"/>
	</head>
        
	<body style="background-color:#999999;">
	    <?php
            $data = filter_input(INPUT_GET, "data");
            $pole = explode(",", $data);
            ?>
            <h1>Grafy</h1>
            <form action="Grafy.php" method="Get">
		    <input type="text" name="data" value="<?php echo $data ?>">
		    <input type="submit" value="Zobrazit Graf">
            </form>
            
            <h2>Radkovy Graf</h2>
            <?php
            
            for ($i = 0; $i < count($pole); $i++){
		$pole[$i] = intval ($pole[$i]);
            }
            foreach ($pole as $val){
		echo "<p>";
                $b = 0;
		for ($i = 0; $i < $val; $i++){
		    $b +=1;
		}
                $max = max($pole);
                $procento = ($b * 100)/$max;
                echo '<div style="background: #3333ff; height:50px; width:';
                echo "$procento";
                echo '%"></div>';
                echo "</p>\n";
	    }
            ?>
        </body> 
</html>