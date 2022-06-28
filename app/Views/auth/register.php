<html>
    <head>
        <title>Test Mas Agus</title>
    </head>
    <body>
        <?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>
        
        <?php if($error){ ?>
            <p style="color:red">Terjadi Kesalahan:
                <ul>
                    <?php foreach($error as $e){ ?>
                    <li><?php echo $e ?></li>
                    <?php } ?>
                </ul>
            </p>
        <?php } ?>
        
        <h5>Register</h5>
        <form method="post" action="<?= base_url('Register-valid') ?>">
            Email : <br>
            <input type="email" name="username" required><br>
            Password: <br>
            <input type="password" name="password" required><br>
            Konfirmasi Password: <br>
            <input type="password" name="confirm" required><br>
            <button type="submit" name="login">Register</button>
        </form>
        <p>
            <a href="<?= base_url('/Login') ?>">Sudah punya akun?</a>
        </p>
    </body>
</html>