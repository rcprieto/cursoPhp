<?php if(!class_exists('Rain\Tpl')){exit;}?><html>
    <head></head>
    <body>
        <p>Hello World <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        <p>Verão: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
    </body>

</html>