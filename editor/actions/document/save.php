<?php

$title = elgg_get_title_input('title');

$document = new ElggObject();
$document->subtype = 'document';
$document->access_id = ACCESS_PUBLIC;
$document->owner_guid = elgg_get_logged_in_user_guid();

$document->title = $title;

if ($document->save()) {
   echo exec("python save.py $title");
   return elgg_ok_response('', "Documento creado exitosamente", '/editor/all');
} else {
   return elgg_error_response("No se pudo crear el documento");
}
