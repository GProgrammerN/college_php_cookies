<?php
if (isset($_COOKIE["corperso"])) {
    $cor = $_COOKIE["corperso"] . '.css';
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/$cor\">";
} else {
    echo '<link rel="stylesheet" type="text/css" href="css/azul.css">';
}
?>
