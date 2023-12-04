<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
        // aqui estou colocando HTML dentro do PHP. 
        echo 'Hello ';
        echo '<small>';
        echo 'World';
        echo '</small>';
    ?>
</h1>

<?= '<div center azul>Outra forma de escrever! HTML no PHP!</div>'?>

<br>

<!--neste caso estou colocando o PHP dentro do HTML-->
<div center><button dobro><?= 'legal!' ?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10?>;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 10 - 8?>rem;
    }

    /* 
        IMPORTANTE: 
        - é preciso saber onde estou colocando PHP e onde estou colocando HTML ou CSS
        - É possível integrar tanto no HTML quando no CSS
        - o PHP será interpretado no servido e depois encaminha para o navegardor
        - Quando eu quiser colocar PHP eu preciso saber integrar.
    */
</style>