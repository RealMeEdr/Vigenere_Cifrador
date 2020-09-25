<?php
/**
 * Created by PhpStorm.
 * User: epalacio
 * Date: 10/15/19
 * Time: 9:39 PM
 */

include('./template.php');


$t = new Template();

$t->header();

?>
<br><br>
<h1>Vigenere</h1>
<br><br>
<div class="card col-lg-6 py-3">
    <form action="vigenere.php" method="post">
        <div class="form-group">
            <label for="message">Mensaje</label>
            <input type="text" class="form-control" name="message" id="message" aria-describedby="messageHelp" placeholder="Mensaje">
            <small id="messageHelp" class="form-text text-muted">Este mensaje se cifrará por medio del método vigenere</small>
        </div>
        <div class="form-group">
            <label for="key">Llave</label>
            <input type="text" class="form-control" name="key" id="key" aria-describedby="keyHelp" placeholder="Llave">
            <small id="keyHelp" class="form-text text-muted">Este Llave se cifrará por medio del método vigenere</small>
        </div>

        <button type="submit" class="btn btn-dark">Cifrar</button>
    </form>
</div>

<?php
$t->footer();

?>


