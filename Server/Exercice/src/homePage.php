<?php
$dB = 'tagbesill';
$host ='127.0.0.1';
$username = 'root';
$password = '';

try{
    $connection = new PDO("mysql:dbname=$dB; $host=$host", $username, $password);
}   catch (\PDOException $exception) {
    print_r('[ERROR] %s Impossible connection to the DB %s');
    print_r($exception);
}

$articles = $connection->query('select * from article');

echo "<br>".$articles->rowCount()."<br><br>";

//print_r($articles->fetch());
echo "<br><br>";
//print_r($articles->fetch(PDO::FETCH_ASSOC));
$AllArticles = $articles->fetchAll();
//print_r("<br><br>");

//write HTML with For Loop
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
home
<?php
foreach ($AllArticles as $article) {
//   print_r($article)
    ?>

<article>
    <p><?php echo $article['pub_date']?> </p>
    <img src="<?php echo $article['img'] ?>" alt="">
    <h2><?php echo $article['title']?></h2>
    <p><?php echo $article['description']?> </p>
    <?php }?>
</article>

</body>
</html>




