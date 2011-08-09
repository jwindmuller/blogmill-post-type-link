<div class="link post-index-preview">
    <h2><?php
        echo $this->Html->link(
            $this->Blogmill->field( $post, 'title' ), 
            $this->Blogmill->field( $post, 'url' )
        );
    ?></h2>
    <?php $description = trim($this->Blogmill->field( $post, 'description')); ?>
    <?php if ( $description !== "" ): ?>
        <div class="content"><?php echo $description; ?></div>
    <?php endif; ?>
</div>