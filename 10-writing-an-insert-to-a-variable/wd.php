<form action="" method="GET">
	<select name="weekDay">
        <?php 
        $wd = ['mo','tu','we', 'th','fr','sa','su']; 
        foreach($wd as $elem){
            echo "<option>$elem</option>";
        } ?>
    </select>
    <input type="submit">
</form>

<?php
	if (!empty($_GET['weekDay'])) {
		echo $_GET['weekDay'];
	}
?>