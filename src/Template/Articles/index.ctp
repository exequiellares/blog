<!-- File: src/Template/Articles/index.ctp -->
<?= $this->Html->css('estilos'); ?>
<div class="cuerpo">
<h1>Blog articles</h1>
<br/>

<div class="botones">
    <?= $this->Html->link('Add Article', ['action' => 'add']) ?>
</div>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td class="botones">
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id ]); ?>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?']);
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>