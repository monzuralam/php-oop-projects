<?php
/**
 * Autoloading required files
 */

spl_autoload_register( function( $class ){
    require_once __DIR__ . '/inc/' . $class . '.php';
});

$form = new Form();
$form->addElement( new TextInput( 'Name', 'name' ) );
$form->addElement( new TextInput( 'Email', 'email' ) );
$form->addElement( new PasswordInput( 'Password', 'password' ) );
$form->addElement( new Button( 'Registration' ) );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Widget - PHP OOP</title>
</head>
<body>
    <h2>Form Widget</h2>
    <hr>
    <?php echo $form->render(); ?>
</body>
</html>