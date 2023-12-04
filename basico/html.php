<div class="titulo">Integração HTML</div>

<h1>
    <?php
        // aqui estou colocando HTML dentro do PHP. 
        echo 'Hello ';
        echo '<small>';
        echo 'World';
        echo '</small>';
    ?>
</h1>

<?= '<div>Outra forma de escrever! HTML no PHP!</div>'?>

<br>

<!--neste caso estou colocando o PHP dentro do HTML-->
<div><button><?= 'legal!' ?></button></div>