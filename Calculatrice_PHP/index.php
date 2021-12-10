<?php
require_once 'class/Operation.php';
require_once 'elements/header.php';

$result = null;
$erreur = false;

if(!empty($_POST['nombre_1']) && !empty($_POST['nombre_2']) && !empty($_POST['operation'])){
    $choix = $_POST['operation'];   
    $operation = new Operation($_POST['nombre_1'], $_POST['nombre_2'], $choix);
    if($choix == 'add'){
        $result = $operation->addition();
    }
    if($choix == 'sous'){
        $result = $operation->soustraction();
    }
    if($choix == 'div'){
        $result = $operation->division();
    }
    if($choix == 'multi'){
        $result = $operation->multiplication();
    }
}




?>


<div class="container">

<?php if(isset($choix)): ?>
    <?php  if($operation->getErrors() == true): ?>

    <div class="alert alert-danger">
        Ce n'est pas possible de diviser par 0 !
    </div>

    <?php endif; ?>
<?php endif ?>
    <form action="index.php" method="post">
        <div class="form-group">
            <input type="number" step="any" class="form-control" placeholder="Votre premier nombre :" name="nombre_1">
        </div>
        <div class="form-group">
            <input type="number" step="any" class="form-control" placeholder="Votre deuxième nombre :" name="nombre_2">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="multi" id="multiplication" name="operation">
            <label class="form-check-label" for="multiplication">
                Multiplication
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" value="div" id="division" name="operation">
            <label class="form-check-label" for="division">
                Division
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" value="add" id="addition" name="operation">
            <label class="form-check-label" for="addition">
                Addition
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" value="sous" id="soustraction" name="operation">
            <label class="form-check-label" for="soustraction">
                Soustraction
            </label>
        </div>

        <button class="btn btn-primary">Calculer</button>
    </form>
</div>


<h1><?= $result ?></h1>

<?php require_once 'elements/footer.php' ?>