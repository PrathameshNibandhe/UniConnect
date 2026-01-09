<?php
session_start();

// simple login check
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include("includes/header.php"); ?>

<div class="dashboard">
    <h2>University Services Dashboard</h2>
    <p>Welcome, <?php echo $_SESSION['user']; ?></p>

    <div class="dashboard-cards">

        <a href="modules/lost_found/view.php" class="card">
            Lost & Found
        </a>

        <a href="modules/canteen/menu.php" class="card">
            Canteen Preorders
        </a>

        <a href="modules/hostel/availability.php" class="card">
            Hostel
        </a>

        <a href="modules/mess/mess_list.php" class="card">
            Mess
        </a>

        <a href="modules/campus_map/map.php" class="card">
            Campus Navigation
        </a>

    </div>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
