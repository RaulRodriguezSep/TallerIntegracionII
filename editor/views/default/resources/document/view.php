<?php

$guid = elgg_extract('guid', $vars);
$document = get_entity($guid);

$content = elgg_view_entity($document, array('full_view' => true));

$content .= elgg_view('output/url', array(
            'href' => '/editor/all',
            'text' => 'Volver al menu ',
            'is_trusted' => true,
));

echo elgg_view_page($document->getDisplayName(), [
    'content' => $content,
]);