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
    <p>Welcome to the University App</p>

    <div class="dashboard-cards">

        <a href="modules/lost_found/view.php" class="card">
            Lost & Found
        </a><br>

        <a href="modules/canteen/menu.php" class="card">
            Canteen Preorders
        </a><br>

        <a href="modules/hostel/availability.php" class="card">
            Hostel
        </a><br>

        <a href="modules/mess/mess_list.php" class="card">
            Mess
        </a><br>

        <a href="modules/campus_map/map.php" class="card">
            Campus Navigation
        </a><br>

    </div>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
