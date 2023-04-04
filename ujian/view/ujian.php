<?php
    include "../../controller/controller.php";

    // QUERY SEMUA EVENT ID DIDALAM OPTION
    $files=select("SELECT * FROM questions");
    $rows=select("SELECT * FROM roles");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <?php
                foreach($files as $data) :
            ?>
            <tr><td><?= $data['question']; ?></td></tr>
            <?php
                endforeach;
            ?>
        </thead>

    </table>
    
</body>
</html>