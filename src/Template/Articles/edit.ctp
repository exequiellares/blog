<!-- File: src/Template/Articles/add.ctp -->
<?= $this->Html->css('estilos'); ?>
<div class="cuerpo">
<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
</div>