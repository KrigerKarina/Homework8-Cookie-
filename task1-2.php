<?php 
	// Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
	require '/Cookie.php';
	$cookie = new Cookie;
  	$cookie->set('visit', 0, 0);

	if(isset($_COOKIE['visit']))
	{ 
		setcookie('visit', $_COOKIE['visit']+1); 
	} 
	echo "Вы посетили наш сайт " . $_COOKIE['visit'] . " раз!"; 

	// Покажите пользователю баннер с кнопкой 'Не показывать больше!'. Если он нажмет на эту кнопку - не показывайте ему баннер в течении месяца.
 	if(isset($_REQUEST['invisible'])) { 
		$cookie = new Cookie;
  		$cookie->set('invisibleBaner', true, 31);
	} 
?> 
<!DOCTYPE html> 
<html> 
<body> 
	<?php if(!$_COOKIE['invisibleBaner']){ ?> 
		<div>Банер</div>
		<form action="" method="GET"> 
			<input type="submit" value="Не показывать больше!" name="invisible"> 
		</form> 
	<?php }?> 
</body> 
</html>

