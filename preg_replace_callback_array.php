<?php
// preg_replace_callback_array()

// uses preg_replace_callback_array() to update old version of phpLDAPadmin

// get name of all files in $lib
$lib = __DIR__ . '/../phpldapadmin-1.2.3/lib/';
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($lib), 
										 RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
	// this is the filename
    echo get_class($object) . "$name\n";
}


