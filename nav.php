<div class="container">
 <!-- Top navigation -->
    <div class="topnav">

    <!-- Centered link -->
    <div class="topnav-centered">
        <a href="index.php" class="active"><span>AD</span>D SLEEVE</a>
    </div>

    <!-- Left-aligned links (default) -->
    <a <?php if ($activePage =="about") {?>
 class="active" <?php } ?> href="about.php">About</a>
    <a <?php if ($activePage =="register") {?>
 class="active" <?php } ?>href="register.php">Register</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a <?php if ($activePage =="business") {?>
 class="active" <?php } ?>href="business.php">Business Owner</a>
        <a <?php if ($activePage =="coffee") {?>
 class="active" <?php } ?>href="coffee.php">Coffee Shop</a>
    </div>

    </div>   
</div>
