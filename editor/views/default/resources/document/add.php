<?php

$title = "Crear un nuevo documento";

$content = elgg_view_form("document/save");

echo elgg_view_page($title, [
            'content' => $content,
]);