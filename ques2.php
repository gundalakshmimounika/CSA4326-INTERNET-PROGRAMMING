<?php
setcookie("language", "English", time() + 3600);
if (isset($_COOKIE["language"])) {
    echo "Preferred Language: ". $_COOKIE["language"];
} else {
    echo "No preference selected";
}
?>
