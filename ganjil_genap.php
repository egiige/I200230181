<!DOCTYPE html>
<html>
<head>
    <title>Program Ganjil Genap</title>
</head>
<body>
    <h2>Program Menentukan Ganjil atau Genap</h2>
    <form method="post" action="">
        <label>Masukkan sebuah bilangan: </label>
        <input type="number" name="bilangan" required>
        <br><br>
        <input type="submit" name="submit" value="Cek Bilangan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];

        if ($bilangan % 2 == 0) {
            echo "<br><br>Bilangan $bilangan adalah <strong>Genap</strong>.";
        } else {
            echo "<br><br>Bilangan $bilangan adalah <strong>Ganjil</strong>.";
        }
    }
    ?>
</body>
</html>