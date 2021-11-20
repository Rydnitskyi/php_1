<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" type="text/css" href="./public/css/style_image.css">
</head>

<body>
    <div class="box">
        <div class="photo">
            <?php
            $link = mysqli_connect("localhost", "root", "30621795", "php");
            $id = $_GET['id'];
            $result = mysqli_query($link, "SELECT url, name FROM gallery WHERE id = " . $id);

            mysqli_query($link, "UPDATE gallery SET view_count= view_count + 1 WHERE id =" . $id);
            $countdb = mysqli_query($link, "SELECT view_count FROM gallery WHERE id = " . $id);
            $count = mysqli_fetch_assoc($countdb);

            while ($rows = mysqli_fetch_array($result)) {
                $img_id = $rows['id'];
                $img_src = $rows['url'];
                $img_name = $rows['name'];
                echo '<img src="' . $img_src . $img_name . '" title="' . $img_name . '" width="1500px">';
            }
            ?>
        </div>
        <div class="count">
            <span> Просмотры: <?= $count['view_count'] ?> </span>
        </div>
    </div>
</body>

</html>