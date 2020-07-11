<?php 

session_start();

if($_SESSION['auth'] != true) {
    header('Location: index.php');
}

?>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="col-md-12">
        <?php if (isset($_SESSION['status'])) { ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['status']; unset($_SESSION['status']); ?>
        </div>
        <?php } ?>

        <h1>Home Page.</h1>

        <a href="logout.php">Logout</a>
    </div>
</div>

<?php include 'footer.php';


