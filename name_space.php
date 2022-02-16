<?php
    namespace Html;

    class Table {
        public $title = "";
        public $numRow = 0;

        public function message()
        {
            echo "<p>Table {$this->title} has {$this->numRow} rows.";
        }
    }

    $table = new Table;
    $table->title = "Desk Table";
    $table->numRow = 9;


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
    <?php 
        $table->message();
    ?>
</body>
</html>