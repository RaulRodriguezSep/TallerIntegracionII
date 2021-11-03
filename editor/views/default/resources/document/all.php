<?php

elgg_register_title_button('document', 'add', 'object', 'document');
elgg_register_title_button('document', 'export', 'object', 'document');
$titlebar = "Editor de documentos - Taller de integracion II";

$pagetitle = "Documentos creados";

$body = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'document',
));

echo elgg_view_page($titlebar, [
    'title' => $pagetitle,
    'content' => $body,
]);
