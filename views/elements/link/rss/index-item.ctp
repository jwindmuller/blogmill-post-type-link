<?php
    $item = array(
        'title' => $this->Blogmill->field($post, 'title'),
        'description' => $this->Blogmill->field($post, 'description'),
        'link' => $this->Blogmill->field($post, 'url')
    );
    echo $this->Rss->item(array(), $item);
