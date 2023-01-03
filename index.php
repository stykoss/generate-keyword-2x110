<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Générateur de mots-clés SEO</title>
        <link rel="icon" type="image/x-icon" href="https://www.2x110.com/svg/favicon.svg">
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/c4789d0de7.js" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	</head>
	<body>
		<div class="keyword-page col-md-4">
			<div class="form">
				<h1 class="title">Générateur de mots-clés SEO</h1>
				 <form class="login-form" action="" method="get">
				
					<input class="input" type="text" name="key" placeholder="Ajoutez votre mot-clés"/>
					<button class="btn-rechercher" name="submit">Rechercher</button>	
                
					
				</form>
				<?php
					   $value = "";
					   if ( isset( $_GET['submit'] ) )
						   {
					   
						 $value = $_GET['key']; 
						 
						 }
						
						 if ($value != "")
						 
						 {
							$xml = simplexml_load_file("http://google.com/complete/search?hl=fr&output=toolbar&q=".$value);

							$id = 1;
							foreach($xml->children() as $child)
							{
								foreach($child->suggestion[0]->attributes() as $data);
							
							echo '<input  class="input-keyword" type="text" id="' . $id . '" value="' . $data . '"/>';
							echo '<button class="btn-copy" onclick="copy(' . $id . ')"><i class="far fa-copy"></i></button>';
							$id++;	
							
						 }						


					
					
					}

                ?>   
				
				<p class="message">
						Propulsé par 
						<a href="https://www.2x110.com/">2x110</a>
					</p>
					
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="script.js"></script>

	</body>
</html>