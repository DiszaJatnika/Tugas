<html>
    <head>
        <title>Test Mas Agus</title>
    </head>
    <body>
        <?php $session = session() ?>
        <h4>Hallo user  <?php echo $session->get('username')?></h4>
        <a href="<?= base_url('Logout'); ?>">Logout</a>
    </body>
</html>