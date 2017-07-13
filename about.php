<html>
	<head>
			<title>Home work_1</title>
	</head>
	<body>
		<h1>Страница пользователя Николай Полюков</h1>
		<?php
			$userName = "Nikolay";
			$userAge = 37;
			$userMail = "npolyukov@yandex.ru";
			$userCity = "Sankt-Peterburg";
			$userAbout = "interested in Web"
		?>
		<table>
			<tr>
				<td><strong>Name</strong></td>
				<td><?= $userName ?></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><?= $userAge ?></td>
			</tr>
			<tr>
				<td><strong>e-mail:</strong></td>
				<td><?= $userMail ?></td>
			</tr>
			<tr>
				<td><strong>City</strong></td>
				<td><?= $userCity ?></td>
			</tr>
			<tr>
				<td><strong>About me:</strong></td>
				<td><?= $userAbout ?></td>
			</tr>
		</table>
	</body>
</html>