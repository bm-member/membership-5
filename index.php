<?php 
    session_start();
    include 'header.php'; 
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <?php if(isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger">
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'footer.php'; ?>