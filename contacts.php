
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
       <title>Q1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="Stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	</head>

<body onResize="BrouseSize()">
	<div class="container">
			<div id="top_menu">
		<a href="/"><div id="Logo"></div></a>
					<a href="/"><div class="menu_item">Главная</div></a>
					<a href="about.php"><div class="menu_item">О компании</div></a>
					<a href="vacancy.php"><div class="menu_item">Вакансии</div></a>
					<a href="projects.php"><div class="menu_item">Проекты</div></a>
					<a href="contacts.php"><div class="menu_item">Контакты</div></a>
				<div id="End_Top_Menu"><img src="img/top_menu_end.png" /></div>
	</div>
				<div id="Game_Menu">
		<div id="Left_Game_Menu">
			<div id="Insight">
			</div>
		</div>
		<div id="Right_Game_Menu">
			<table>
				<tr>
					<td onclick="Move_Left_Games();" class="ArrowLeft"></td>
									<td id="Game_img"><a href="http://drako.ru" target="_blank"><img src="img/gamepic/drako.png" /></a></td>
				<td id="Game">
					<h1><a href="http://drako.ru" target="_blank">Драконы</a></h1>
					<h2><a href="http://drako.ru" target="_blank"></a></h2>
					<p><a href="http://drako.ru" target="_blank">Инновационная MMORPG. Сплав уникальных игровых особенностей от опытнейших разработчиков и современные браузерные технологии.</a></p>
				</td>
				<td onclick="Move_Right_Games();" class="ArrowRight"></td>
				</tr>
			</table>
		</div>
	</div>
				
	<table id="Content">
		<tr>
			<td width="259" style="padding:0px;">
				<img src="img/content_images/e-mail.png" />
			</td>
			<td>
				<h1>Контакты</h1>
				<p>
			По техническим вопросам: <span class='mail'><a href='mailto:it@q1.ru'>it@q1.ru</a></span><br>
			По вопросам рекламы и маркетинга: <span class='mail'><a href='mailto:pr@q1.ru'>pr@q1.ru</a></span><br>
			По вопросам трудоустройства и общим вопросам: <span class='mail'><a href='mailto:mila@q1.ru'>mila@q1.ru</a></span>
		</p>
				<!-- <div class="Content_Bottom_Block">
					<a href="/"><img src="img/download_pic.png" /></a>
					<div class="Head">Партнерам</div>
					<div class="Subscript">Контакты и все такое</div>
					<p>Почему фантастический? Если трафик покупается, например, только по регистрациям. Изысканно - но бывает, да.</p>
				</div>
				<div class="Content_Bottom_Block">
					<a href="/"><img src="img/download_pic.png" /></a>
					<div class="Head">Партнерам</div>
					<div class="Subscript">Контакты и все такое</div>
					<p>Почему фантастический? Если трафик покупается, например, только по регистрациям. Изысканно - но бывает, да.</p>
				</div> -->
			</td>
		</tr>
	</table>
		</div>
	<div id="Bottom_Line">
			<div class="container">
		<img id="Bottom_Logo" src="img/bottom_logo.png" />
		<div id="copyright">© 2010 Q1 LLC</div>
	</div>
		</div>
</body>
</html>