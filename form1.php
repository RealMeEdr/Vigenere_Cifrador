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
    <form action="descifrador.php" method="post">
        <div class="form-group">
            <label for="message">Mensaje Cifrado</label>
            <input type="text" class="form-control" name="message" id="message" aria-describedby="messageHelp" placeholder="Mensaje">
            <small id="messageHelp" class="form-text text-muted">Este descifrador te ayudara a descubrir descubrir el mensaje</small>
        </div>
        <div class="form-group">
            <label for="key">Llave</label>
            <input type="text" class="form-control" name="key" id="key" aria-describedby="keyHelp" placeholder="Llave">
            <small id="keyHelp" class="form-text text-muted">Este Llave es la que se utilizó para cifrar el mensaje</small>
        </div>

        <button type="submit" class="btn btn-dark">Descifrar</button>
    </form>
</div>

<?php
$t->footer();

?>


