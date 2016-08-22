<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>Keskmine hinne</title>
		<link rel="stylesheet" type="text/css" href="stiil.css" />
	</head>

	<body>
  	<div id="wrap">
  	   <div id="content">
					<h1>Keskmine hinne</h1>
					<p>Siseta palun täisarv vahemikus 1 kuni 5:</p>
						 <form action="pealeht.php" method="post">
							 <input type="number" name="hinne" min="1" max="5" size="50" placeholder="1-5"><br/>
						 <input type="submit" value="ANNA HINNE">
						 </form>

        <?php if(!empty($hinne)):
        	foreach($hinne as $h):?>
        		<div class="antudhinded">
        			<b>Hinded</b>
        			<pre><?php echo htmlspecialchars($h['hinne']);?></pre>
        		</div>
        <?php	endforeach;
        endif;?>


      </div>
  </div>

	</body>
</html>
