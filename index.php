<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Телефонный справочник</title>
		<meta http-equiv=Content-Type content="text/html;charset=utf-8">

<style type="text/css">

li {
	display: flex;
}
#main {
	display: flex;
	position: absolute;
}
#add-phone {
	display: flex;
	height: 150px;
	width: 300px;
	margin-left: 10px;
	margin-top: 15px;
	border: 1px solid #000000;
	background: #FFFFFF;
}
.phone-list {
	height: 500px;
	width: 400px;
	border: 1px solid #000000;
	overflow-y: scroll;
}		
.number {
	height: 40px;
	width: 250px;
	border: 1px solid #000000;
	margin-top: 10px;
	margin-left: 1px;
	text-align: center;
	line-height: 40px;
}
.name {
	height: 40px;
	width: 100px;
	border: 1px solid #000000;
	margin-top: 10px;
	text-align: center;
	line-height: 40px;
}
.dlt-btn {
	height: 40px;
	margin-top: 10px;
	margin-left: 10px;
	background: #CD5C5C;
}
.add-btn {
	height: 40px;
	width: 100px;
	margin-top: 30px;
	margin-left: 10px;
	border: 1px solid #000000;
	border-radius: 10px;
	background: #FAFAD2;

}
.input {
	width: 180px;
	margin-left: 10px;
	margin-top: 15px;
}
#input-btn {
	margin-top: 20px;
	margin-left:35%;
	height: 40px;
	width: 100px;
}
.new {
	margin-left: 10px;
}


</style>

	</head>


	<body>

<?php include 'get_contacts.php'?> 
<div id="main">
	<ul class="phone-list">
		<?php for($i=0; $i<count($data); $i++) {?>
			<li>
				<div class="name"><?php echo($data[$i]["name"]) ?></div>
				<div class="number"><?php echo($data[$i]["phone"]) ?></div>
				<form action="delete.php" method="POST">
					<button class="dlt-btn" name="delete" value="<?php echo($i) ?>">Удалить</button>
				</form>
			</li>
		<?php } ?>
	</ul>
	
	<div id="add-phone">
	<form action="add.php" method="POST">
		<span class="new">Имя: </span>
		<input class="input" name="name"></input>
		<span class="new">Телефон: </span>
		<input class="input" name="phone"></input>
		<button id="input-btn">Добавить</button>
	</form>
	</div>

</div>
	</body>

</html>