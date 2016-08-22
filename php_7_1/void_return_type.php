<?php
// for a discussion on why "void" and not "null" see:
// https://wiki.php.net/rfc/void_return_type

function lacks_return(): void {
    // valid
}

function returns_nothing(): void {
    return; // valid
}

// A void function may not return a value:

function returns_one(): void {
    return 1; // Fatal error: A void function must not return a value
}

function returns_null(): void {
    return null; // Fatal error: A void function must not return a value
}
