<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Kuupäeva funktsioonid</title>
</head>
<body>
<h1>Kuupäeva funktsioonid</h1>
<ol>
    <li>time()</li>
    <li>date()</li>
    <li>mktime()</li>
    <li>strtotime()</li>
    <li>date_default_timezone_set()</li>
</ol>
<h1>Ülesanded</h1>
<section>
    <h2>Kuupäev ja aeg formaadis m/d/Y h:i</h2>
    <?php
    echo date('m/d/Y G:i');
    ?>
</section>
<section>
    <h2>Kasutaja vanus 11.11.2021</h2>
    <?php
    include ('funktsionid.php');
    echo get_vanus();
    ?>
</section>
<section>
    <h2>Järgmine vaheaeg on 20.12.2021</h2>
    <?php
    echo getKooliVaheajani();
    ?>
</section>

</body>
</html>
