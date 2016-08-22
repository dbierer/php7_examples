<?php
class Token {
	// Constants default to public
	const PUBLIC_CONST = 0;

    // Constants then also can have a defined visibility
    private const PRIVATE_CONST = 0;
    protected const PROTECTED_CONST = 0;
    public const PUBLIC_CONST_TWO = 0;

    //Constants can only have one visibility declaration list
    private const FOO = 1, BAR = 2;
}

class Child extends Token
{
    public static function getProtectedConst()
    {
        return static::PROTECTED_CONST;
    }
}

echo __LINE__ . ':' . Token::PUBLIC_CONST;
echo PHP_EOL;

echo __LINE__ . ':' . Child::getProtectedConst();
echo PHP_EOL;

try {
    echo __LINE__ . ':' . Token::PROTECTED_CONST;
} catch (Error $e) {
    echo __LINE__ . ':' . $e->getMessage();
}
echo PHP_EOL;

//Interfaces only support public consts, and a compile time error will be thrown for anything else. Mirroring the behavior of methods.
interface ICache {
        public const PUBLIC = 0;
        const IMPLICIT_PUBLIC = 1;
}

//Reflection was enhanced to allow fetching more than just the values of constants
class testClass  {
  const TEST_CONST = 'test';
}

// works OK
$obj = new ReflectionClass( "testClass" );
$const = $obj->getReflectionConstant( "TEST_CONST" );
var_dump($const);
