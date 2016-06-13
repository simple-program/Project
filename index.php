<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Library</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="system/library/alert/alert.css">
	<script src="system/library/alert/alert.js"></script>
	<script src="system/library/datedropper/datedropper.js"></script>
	<link rel="stylesheet" href="system/library/datedropper/datedropper.css">
</head>
<body>
	<script>
		function add(text, b, v)
		{
			var c = document.getElementsByTagName('BODY')[0];
			var d = document.createElement('DIV');
			var t = document.createTextNode(text);
			d.style.display = "none";
			d.className = b + ' alert';
			d.style.display = 'none';
			var hide = "$('div." + b + "').hide('1000');";
			d.appendChild(t);
			c.appendChild(d);
			$('div.' + b).show('200');
			setTimeout(hide, v * 1000);
		}
	</script>
</head>
<body>
	<button onClick='add("Сообщение с ошибкой", "alert-error", 5);'>Error</button><br>
	<br><button onClick='add("Сообщение с предупреждением", "alert-warning", 5);'>Warning</button><br>
	<br><button onClick='add("Success-сообщение", "alert-success", 5);'>Success</button>
</body>
</html>