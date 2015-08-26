<?php
// @TODO: work in progress ... doesn't work as is!
// preg_replace_callback_array()

// uses preg_replace_callback_array() to update old version of phpLDAPadmin

// get name of all files in $lib
$lib = __DIR__ . '/../phpldapadmin-1.2.3/lib/';
$rev = __DIR__ . '/../temp/';
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($lib), 
										 RecursiveIteratorIterator::SELF_FIRST);
// $object = SplFileInfo object
foreach($objects as $name => $object){
	// this is the filename
    echo "$name\n";
    // now we can run preg_replace_callback_array()
    $revised = preg_replace_callback_array(
		['/password_hash\(/' => 
			function ($matches) {
				return 'password_hash_ldap(';
			},
		 // looking for things like this:
		 // preg_replace('/\\\([0-9A-Fa-f]{2})/e',"''.chr(hexdec('\\1')).''",$dn | $rdn);
		 '/preg_replace\(\'\/.*?\/e\'.*?\);' => 
			function ($matches) {
				$
				return preg_replace_callback_array(
					['/\/\/e' => '//',
					 '' => '',
					 '' => '',
					],
					$matches
				);
			},
		],
		// contents of the file
		$object->openFile()->fread($object->getSize())
	);
	// write out revised version
	file_put_contents($rev . '/' . basename($name), $revised);
}


