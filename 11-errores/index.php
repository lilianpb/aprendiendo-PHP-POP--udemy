<?php
try {

    if (isset($_GET['id'])) {

        echo "<h1>El paramentro es : {$_GET['id']} </h1>";
    } else {

        throw new Exception('Falta el paramentro por la url');
    }
} catch (Exception $e) {
    echo 'ha habido un error: ' . $e->getMessage();
}
