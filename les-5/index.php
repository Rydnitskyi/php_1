<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>

<body>
    <div class="gallery">
        <?php
        /* 
            1.  Создать галерею изображений, состоящую из двух страниц:
                просмотр всех фотографий (уменьшенных копий);
                просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
            2.  В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
            3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
            4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности. Популярность = число кликов по фотографии.
        */

        $link = mysqli_connect("localhost", "root", "30621795", "php");
        $result = mysqli_query($link, "SELECT id, url, name FROM gallery ORDER BY view_count DESC");

        while ($rows = mysqli_fetch_array($result)) {
            $img_id = $rows['id'];
            $img_src = $rows['url'];
            $img_name = $rows['name'];
            echo '<a target="_blank" href="image.php?id=' . $img_id . '"><img src="' . $img_src . $img_name . '" width ="400px" title="' . $img_name . '"></a>';
        }
        mysqli_close($link);
        ?>


    </div>
</body>

</html>