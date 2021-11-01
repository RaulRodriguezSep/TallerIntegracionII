<?php

echo elgg_view('input/file', ['name' => 'archivo']);


echo elgg_view('input/select', array(
    'required' => true,
    'name' => 'tipo',
    'options_values' => [
       'odt' => elgg_echo('ODT'),
       'PDF' => elgg_echo('PDF'),
       'json' => elgg_echo('JSON'),
    ],
    'data-rel' => 'tipoarchivo',
 ));

$submit = elgg_view_field(array(
    '#type' => 'submit',
    '#class' => 'elgg-foot',
    'value' => elgg_echo('export'),
));
elgg_set_form_footer($submit);