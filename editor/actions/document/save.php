<?php

$title = elgg_get_title_input('title');
$body = get_input('body');
$tags = string_to_tag_array(get_input('tags'));

$document = new ElggObject();
$document->title = $title;
$document->description = $body;
$document->tags = $tags;

$document->setSubtype('document');

$document->access_id = ACCESS_PUBLIC;

$document->owner_guid = elgg_get_logged_in_user_guid();

if ($document->save()) {
   return elgg_ok_response('', "Documento creado exitosamente", $document->getURL());
} else {
   return elgg_error_response("No se pudo crear el documento");
}