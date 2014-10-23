<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="UTF-8"/>
	<title>PHP Task</title>	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

	<?php 

		$str = $_GET['string'];

	?>

	<div class="formInputHolder2">

		<form method="post" id="inputForm">

			<ul class="formList2">

				<li>

					<div class="label">

						Input: <span class="inputString"> <?php echo $str; ?> </span> 

					</div>

				</li>

				<li>

					<div class="inputLabel">

						Length:

					</div>

					<div class="inputDetails">

						<span class="inputString">

							<?php 

								echo strlen($str);

							?>

						</span>

					</div>

				</li>

				<li>

					<div class="inputLabel">

						Words:

					</div>

					<div class="inputDetails">

						<span class="inputString">

							<?php 

								echo str_word_count($str);

							?>

						</span>

					</div>

				</li>

				<li>

					<div class="inputLabel">

						Reversed:

					</div>

					<div class="inputDetails">

						<span class="inputString">

							<?php 

								echo strrev($str);

							?>

						</span>

					</div>

				</li>

				<li>

					<div class="inputLabel">

						Uppercase:

					</div>

					<div class="inputDetails">

						<span class="inputString">

							<?php 

								echo strtoupper($str);

							?>

						</span>

					</div>

				</li>

				<li>

					<div class="inputLabel">

						Chars:

					</div>

					<div class="inputDetails">

						<span class="inputString">

							<?php 

								echo "<ul class='charList'>";							

								$length = strlen($str);
								
								$array = array();
								
								for ( $i = 0; $i < $length; $i++) {
								
								    $array[$i] = $str[$i];

								    echo '<li>' . $str[$i] . '</li>' ;
								
								}

								echo "</ul>";

							?>

						</span>

					</div>

				</li>																


			</ul>

		</form>

	<div class="backHolder">

		<a id="backBtn">

			Go back

		</a>

	</div>		

	</div>



</body>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

			$('#backBtn').animateMyForm({

				'step' : 'back'

			});

		});

	</script>
</html>
