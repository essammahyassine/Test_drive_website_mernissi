<?php
			
			require_once('bdd.php');
			
			
				$civilite  = $_POST['civilite'];
				
				$nom =$_POST['nom'];
				
				$prenom=$_POST['prenom']; 
				
				$telephone=$_POST['telephone'];
				
				$mail=$_POST['mail'];
				
				$profession=$_POST['profession'];
				
				$marque=$_POST['marque'];
			
				$model=$_POST['model'];  
				

						
                             								
				$sql = "INSERT INTO information (civilite,nom,prenom,telephone,mail,profession,marque,model)
				VALUES ('$civilite','$nom','$prenom','$telephone','$mail','$profession','$marque','$model')";
							
								$query = $bdd->prepare( $sql );
							if ($query == false) {
							 print_r($bdd->errorInfo());
							 die ('Erreur prepare');
							}
							$sth = $query->execute();
							if ($sth == false) {
							 print_r($query->errorInfo());
							die ('Erreur execute');
							
							}
							header('location: index.html');

				
			
		?>
	

