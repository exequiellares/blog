<!-- File: src/Template/Articles/view.ctp -->
<?= $this->Html->css('estilos'); ?>
<div class="cuerpo">
    <div class="contenido">
        <h1><?= h($article->title) ?></h1>
        <p><?= h($article->body) ?></p>
        <p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
    </div>
</div>