<?php
require_once("commons/session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <?php
    require_once("commons/cdn.php");
    ?>
</head>

<body>
    <?php
    require_once("commons/menu.php");
    ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white text-center p-5">Delete Account</h1>
        <?php
        if (isset($_SESSION["msg"])) {
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
        <?php
        if (isset($_SESSION["confirmDelete"]) && $_SESSION["confirmDelete"] == true) {

        ?>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="my-2">
                    <input type="submit" name="deleteProcess" class="btn btn-danger" value="Confirm to Delete Acount">
                </div>
            </form>
        <?php
            $_SESSION["confirmDelete"] = false;
        } else {
        ?>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="my-2 form-floating">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Current Password" required>
                    <label for="password" class="form-label">Enter Current Password</label>
                </div>
                <div class="my-2">
                    <input type="submit" name="passwordProcess" class="btn btn-primary" value="Delete Acount">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>

<?php
require_once("classes/Users.class.php");
if (isset($_POST["passwordProcess"])) {
    $password = $_POST["password"];

    if ($users->validateUser($username, $password)) {
        $_SESSION["confirmDelete"] = true;
        header("location:delete.php");
    } else {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Error : </strong> Incorrect Current Password</div>";
        header("location:delete.php");
    }
}

if (isset($_POST["deleteProcess"])) {
    $users->softDelete($username);
    header("location:logout.php");
}
?>