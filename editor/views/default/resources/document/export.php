<?php

$title = "Exportar documento";

$content = elgg_view_form("document/export");

$content .= elgg_view('output/url', array(
            'href' => '/editor/all',
            'text' => 'Volver al menu ',
            'is_trusted' => true,
));


echo elgg_view_page($title, [
            'content' => $content,
]);