<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK202</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <?php
    $ErrorName = $ErrorNIM = $ErrorGender = "";
    if (isset($_POST['submit'])) {
        if (empty(trim($_POST['name']))) {
            $ErrorName = "nama tidak boleh kosong";
        }
        if (empty(trim($_POST['nim']))) {
            $ErrorNIM = "nim tidak boleh kosong";
        }
        if (empty(trim($_POST['gender']))) {
            $ErrorGender = "jenis kelamin tidak boleh kosong";
        }
    }
    ?>
    <form action=" " method="POST">
        <label>Nama :</label>
        <input type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
        <span class="error"> * <?= $ErrorName; ?></span><br>
        <label>Nim :</label>
        <input type="text" name="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>">
        <span class=error> * <?= $ErrorNIM; ?></span><br>
        <label>Jenis Kelamin : </label><span class="error"> * <?php echo $ErrorGender; ?></span><br>
        <input type="radio" name="gender" id="laki" value="Laki-laki" 
        <?php if(isset($_POST["gender"]) and $_POST["gender"] == "Laki-laki")
            echo "checked"; ?>>Laki-laki <br>
        <input type="radio" name="gender" id="perempuan" value="Perempuan" 
        <?php if(isset($_POST["gender"]) and $_POST["gender"] == "Perempuan")
            echo "checked"; ?>>Perempuan <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (
            !empty($_POST['name']) &&
            !empty($_POST['nim']) && !empty($_POST['gender'])
        ) {
            echo "<h2><b>Output:</b></h2>";
            if (!empty($_POST["name"])) {
                echo $_POST["name"] . "<br>";
            }
            if (!empty($_POST["nim"])) {
                echo $_POST["nim"] . "<br>";
            }
            if (!empty($_POST["gender"])) {
                echo $_POST["gender"];
            }
        }
    }
    ?>
</body>
</html>