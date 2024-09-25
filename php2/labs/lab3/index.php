<?php
require 'core/Form.php';
require 'core/Field.php';
use app\core\Form;
use app\core\Field;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h1>Create an account</h1>
        <?php $form = Form::begin('', 'post'); ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field('firstname')?>
            </div>
            <div class="col">
                <?php echo $form->field('lastname')?>
            </div>
        </div>
        <?php echo $form->field('email')?>
        <?php echo $form->field('password')->passwordField();?>
        <?php echo $form->field('confirmPassword')->passwordField();?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo Form::end(); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php ?>