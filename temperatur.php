<html>

<head>Willkommen beim Temperaturen Umrechner !</head>

	<body>
		<form>
		
			<input type ="text" name="input" placeholder="Gib hier deine Zahl ein">											
			
			<select name = "operator">
				<option>Celsius -> Fahrenheit</option>
				<option>Fahrenheit -> Celsius</option>				
			</select>
			
			<button type "submit" name = "submit" value = "submit">Berechnen!</button>
		</form>
	

				<?php
					
					$fehlermeldung = "Bitte geben Sie eine g&uumlltige Zahl ein!";
				
				
					if (isset($_GET['submit'])){											#wenn Knopf gedrückt wird:
						$input = $_GET['input'];											#speichert die Eingabe als variable $input
						$operator = $_GET['operator'];										#speichert den Namen des Operators in der Variable $operator
					}
				
					if ($operator == "Celsius -> Fahrenheit"){										#überprüft welchen Namen der Operator besitzt
						
							if (is_numeric($input)){														#schaut ob der eingegebene Datentyp eine Zahl ist
								$fahrenheit = $input * (9/5) + 32;													#rechnet Grad Celsius in Grad Fahrenheit um	
								echo $input." Grad Celsius entsprechen: ".$fahrenheit." Grad Fahrenheit <br />";			#zeigt das Ergebnis an
							} 
												
												
							else{																			#falls keine Zahl -> Fehlermeldung, die oben deklariert wurde
								echo $fehlermeldung;
							}
					
					}
												
												
					if ($operator == "Fahrenheit -> Celsius"){								#selber Algorithmus wie oben, nur mit dem Operator Grad Fahrenheit zu Grad Celsius
							
							if (is_numeric($input)){						
								$celsius = ($input - 32)*(5/9);
								echo $input." Grad Fahrenheit entsprechen: ".$celsius." Grad Celsius <br />";	
							}
							else{
								echo $fehlermeldung;
							}
					
					}	
					
				?>
	
	</body>
</html>

