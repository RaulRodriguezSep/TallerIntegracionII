<?php

$title = "Exportar documento";

$content = elgg_view_form("document/export");

$sidebar = "";

echo elgg_view_page($title, [
            'content' => $content,
            'sidebar' => $sidebar
]);