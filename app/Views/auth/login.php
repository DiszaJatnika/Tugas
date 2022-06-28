<html>
    <head>
        <title>Test Mas Agus</title>
    </head>
    <body>
        <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $username = $session->getFlashdata('username');
            $password = $session->getFlashdata('password');
        ?>
        
        <h5>Login</h5>
        
        <?php if($username){ ?>
            <p style="color:red"><?php echo $username?></p>
        <?php } ?>
        
        <?php if($password){ ?>
            <p style="color:red"><?php echo $password?></p>
        <?php } ?>
        
        <?php if($login){ ?>
            <p style="color:green"><?php echo $login?></p>
        <?php } ?>
        
        <form method="post" action="<?= base_url('/Login'); ?>">
            Email : <br>
            <input type="email" name="username" required><br>
            Password: <br>
            <input type="password" name="password" required><br>
            <button type="submit" name="login">Login</button>
        </form>
        <p>
            <a href="<?= base_url('Register') ?>">Belum punya akun?</a>
        </p>
    </body>
</html>