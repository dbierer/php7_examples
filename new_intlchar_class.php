<?php
// NOTE: the "intl" extension must be installed

printf('%x', IntlChar::CODEPOINT_MAX);
echo IntlChar::charName('@');
var_dump(IntlChar::ispunct('!'));

//The above example will output:
/*
10ffff
COMMERCIAL AT
bool(true)
*/
