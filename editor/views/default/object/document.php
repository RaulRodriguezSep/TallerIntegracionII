<?php

$full = elgg_extract('full_view', $vars, FALSE);

if ($full) {
    echo elgg_view('output/longtext', array('value' => $vars['entity']->description));

} else {
	
	$guid = $vars['entity']->getGUID();
	
    echo elgg_view_title(
        elgg_view('output/url', array(
            'href' => $vars['entity']->getURL(),
            'text' => $vars['entity']->getDisplayName(),
            'is_trusted' => true,
    )));
	
	echo elgg_view('output/url', array(
            'href' => '/editor/edit/'.$guid.'/{revision?}',
            'text' => 'Editar ',
            'is_trusted' => true,
	));
	
	echo elgg_view('output/url', array(
            'href' => '/editor/export/'.$guid,
            'text' => 'Exportar ',
            'is_trusted' => true,
	));
	
	echo elgg_view('output/url', array(
            'href' => '/editor/delete/'.$guid,
            'text' => 'Borrar ',
            'is_trusted' => true,
	));
}