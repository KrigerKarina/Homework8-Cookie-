<?php 
// Запомните дату последнего посещения сайта пользователем. При заходе на сайт напишите ему, сколько дней он не был на вашем сайте.
	require '/Cookie.php';
	if(!isset($_COOKIE['lastVisit']))
		{
			$cookie = new Cookie;
  			$cookie->set('lastVisit', date("Y-m-d"));
		}
?>
<!DOCTYPE html>
<html>
<body>
	<?php 
		$days = (time() - strtotime($_COOKIE['lastVisit']))/(86400);
		echo "Вы отсутствовали на сайте ". $days ." дней" 
	?>
</body>
</html>
