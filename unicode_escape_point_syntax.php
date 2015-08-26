<?php
// uniform way of representing unicode in a string
// {} allows for variable # characters
// only works for double quoted strings or HEREDOC

echo "mañana";	// using pre-composed characters
echo PHP_EOL;
echo "mañana";	// using pre-composed characters
echo PHP_EOL;

// However, by using an escape sequence to produce the ñ, it becomes clearer: 
echo "ma\u{00F1}ana"; // pre-composed character
echo PHP_EOL;
echo "man\u{0303}ana"; // "n" with combining ~ character (U+0303)
echo PHP_EOL;

// élève
echo "élève";
echo PHP_EOL;
echo "\u{00E9}l\u{00E8}ve";
echo PHP_EOL;
echo "e\u{0301}le\u{0300}ve";
echo PHP_EOL;
	
// A further use is to produce characters you can't type on your keyboard. 
// If you are unable to type the hamburger emoji, you can use its escape sequence instead: 
echo "\u{1F354}00\u{1F602}";
echo PHP_EOL;

// reversed text
echo "\u{202E}Reversed text"; // outputs ‮Reversed text
echo PHP_EOL;
