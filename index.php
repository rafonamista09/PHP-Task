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
	<div class="formInputHolder">

		<form method="post" id="inputForm">

			<ul class="formList">

				<li>

					<div class="label">

						Input anything: 

					</div>

				</li>

				<li>

					<div class="inputHolder">

						<input type="text" id="string" name="string" />

					</div>


				</li>

				<li>

					<div class="inputButtonHolder">

						<button id="submitBtn" name="submit">Submit</button>

					</div>

				</li>

			</ul>

		</form>

	</div>
</body>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

			$('#submitBtn').animateMyForm({

				'step' : 'next'

			});

		});

	</script>
</html>
