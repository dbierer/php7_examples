<?php
// Sets session.cache_limiter to private and immediately close the session after reading it

session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
]);

