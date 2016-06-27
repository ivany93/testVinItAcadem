<?php
/**
 * Created by PhpStorm.
 * User: ITA
 * Date: 25.06.2016
 * Time: 18:08
 */
require_once ("header.php");
 ?>
<body style="background-color: rgba(34, 163, 60, 0.52)">

<div class="container">
    <div class="row" align="center">
        <form id="message"  style="background-color: rgba(226, 217, 167, 0.64)" action="FAQ.php" method="post">
            <label>
                заповніть форму перед відправкою!
            </label>
            <br>
            <br>
            <input name="name" type="text" placeholder="Ім'я"><br><br>
            <input name="email" type="email" placeholder="Email"><br><br>
     <textarea name="text" placeholder="текст повідомлення">

     </textarea><br>

            <button type="submit">Відправити</button>
        </form>
    </div>
</div>
<br>
<div class="col-lg-4"></div>
<div class="col-lg-4" style="background-color: #f7ecb5" align="center">
 <?php   if(!empty($_POST)) {

     echo "Ваше повідомлення:";
 }?>
 <br>
    <?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo("  Імя -$name \n");
    }
 ?>
    <br>
 <?php
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo("  email - $email\n");
    }
 ?>
    <br>
 <?php
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        echo("  текст -$text\n");
    }

    ?>
</div>
<?php include ("footer.php") ?>
</body>