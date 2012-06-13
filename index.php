<?php

/*require_once 'tagger/Tagger.php';
$tagger = Tagger::getTagger();

var_dump( $tagger->tagText(
            'Helle Thorning-Schmidt'
            //TRUE, // Rate html
            //array(), // Rating configuration - is set in conf.php
            //array_keys($vocab_names), 
            //$response->getRequestVars('disambiguate') ? true : false,
            //$response->getRequestVars('uris') ? true : false,
            //$response->getRequestVars('unmatched') ? true : false,
            //$response->getRequestVars('markup') ? true : false,
            //$response->getRequestVars('nl2br') ? true : false
          )->getTags() );

die();*/

//include 'tagger/conf.php';
include 'rest/RestUtils.inc.php';
include 'access/iplog.php';

$controller = RestUtils::processRequest();



?>