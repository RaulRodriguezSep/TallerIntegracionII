<?php

$title = "Editor de documentos - Taller de integracion II";

$content = elgg_view('file/listing/all');

$body = elgg_view_layout('proyecto', array(
   'content' => $content,
   'title' => $title,
));

echo elgg_view_page($title, $body);
