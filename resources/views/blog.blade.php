<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel - www.malasngoding.com</title>
</head>

<body>

    <h3>www.malasngoding.com</h3>
    <p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
    <p>Ini adalah view blog. ada di route blog.</p>
    <?php
    $nama = "eko";
    echo 'Hallo Apa Kabar ' . $nama;
    ?>
    <?php
    $mytime = Carbon\Carbon::now();
    echo $mytime->toDateTimeString();
    ?>

</body>

</html>
