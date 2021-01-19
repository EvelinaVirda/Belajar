<html>

<body>
    <?php
    $image = file_get_contents('D:/img/1.jpg');
    $image_codes = base64_encode($image);
    ?>
    <image src="data:image/jpg;charset=utf-8;base64,<?php echo $image_codes; ?>" />
</body>

</html>
