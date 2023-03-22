<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>

<?php 
    function ronFunc($nice) {
        echo "<h2>$nice is a good person </h2>";
    }

    ronFunc("ron");
?>

<?php 
    $myArr = array('ron', 'michal', 'dana');

    $count = 0;

    while($count < count($myArr)) {
        echo "<p>hey there $myArr[$count]</p>";
        $count++;
    }

?>

<?php 

?>