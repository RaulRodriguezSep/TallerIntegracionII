<?php
$full = elgg_extract('full_view', $vars, FALSE);

if ($full) {
    echo elgg_view('output/longtext', array('value' => $vars['entity']->description));
    echo elgg_view('output/tags', array('tags' => $vars['entity']->tags));

} else {
    echo elgg_view_title(
        elgg_view('output/url', array(
            'href' => $vars['entity']->getURL(),
            'text' => $vars['entity']->getDisplayName(),
            'is_trusted' => true,
    )));
    echo elgg_view('output/tags', array('tags' => $vars['entity']->tags));
}
