<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obollju";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name1 = $_POST["name1"];
    $Prichina = $_POST["Prichina"];

    $sql = "INSERT INTO partneri (name1, Prichina) VALUES ('$name1', '$Prichina')";

    if ($conn->query($sql) === true) {
        echo "Данные успешно отправлены в базу данных.";
    } else {
        echo "Ошибка при отправке данных: " . $conn->error;
    }
}

$conn->close();
?>

<html>
<head>
<link rel="icon" type="image/x-icon" href="ico.png">
<link rel="stylesheet" type="text/css" href="css.css">
<script src="script.js"></script>
<title>Сайт КиберСлавы</title>
 <body>
 <header>
<div class="imgSS">
  <img class="imgS" src="logo.png">
</div>
  <h1>Киберслав</h1>
  <nav class="but">
  <ul class="button-list">
  <li><a href="index.php" class="button">Меню</a></li>
  <li><a href="store.php" class="button">КУПИТЬ БАЙКАЛЬСКОЙ ВОДИЧКИ</a></li>
  <li><a href="php_Baza.php" class="button">КУПИТЬ БАЙКАЛЬСКОЙ ВОДИЧКИ</a></li>
</ul>
  </nav>
</header>
<body>
  <main>
  <section class="batia">
  <section class="first-block">
    <h2>Оставить заявку</h2>ы
    

    <form method="post" action="">
    <table>
        <tr>
            <th>Кто вы</th>
            <th>Что вам надо от меня???</th>
        </tr>
        <tr>
            <td>
                <label for="name1" onchange="showOption(this.value, 'name1')"> Ответ 1:</label>
                <select name="name1" required>
                    <option value="Не выбран">Не выбран</option>
                    <option value="Не выбран">Не 1</option>
                    <option value="Не выбран">Не выбран</option>
                    <option value="Ящер">Ящер</option>
                    <option value="Русс">Русс</option>
                    <option value="Бурят">Бурят</option>
                </select>
            </td>
            <td>
                <label for="Prichina" onchange="showOption(this.value, 'Prichina')"> Ответ 2:</label>
                <select name="Prichina" required>
                    <option value="Не выбран">Не выбран</option>
                    <option value="Воды байкальской">Воды байкальской</option>
                    <option value="Землицы Русской">Землицы Русской</option>
                    <option value="Шкуру ящера">Шкуру ящера</option>
                    <option value="Ящерку рабыню">Ящерку рабыню)))</option>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit">Отправить данные</button>
</form>

   </section>
</section>
  </main>
</body>
  <footer>
   <p>&copy; 2023 Телекоммуникационные системы - сайт о телекоммуникационных системах</p>
   <ul>
    <li><a href="#">О нас</a></li>
    <li><a href="#">Контакты</a></li>
    <s> ящеры ссть</s>
<footer>
</html>