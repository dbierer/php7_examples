<?php
// context sensitive lexer
// see: https://wiki.php.net/rfc/context_sensitive_lexer
// don't need to return self::$instance

class Finder
{
    public $sql = '';
    public static $instance = '';
    public static function for($a)
    {
        self::$instance  = new Finder();
        self::$instance->sql = 'SELECT * FROM ' . $a;
    }
    public function where($a)
    {
        self::$instance->sql .= ' WHERE ' . $a;
    }
    public function like($a)
    {
        self::$instance->sql .= ' LIKE ' . $a;
    }
    public function and($a = NULL, $b = NULL, $c = NULL)
    {
        self::$instance->sql .= ' AND ' . $a . ' ' . $b . ' ' . $c;
    }
    public function or($a = NULL, $b = NULL, $c = NULL)
    {
        self::$instance->sql .= ' OR ' . $a . ' ' . $b . ' ' . $c;
    }
    public function in(array $a)
    {
        self::$instance->sql .= ' IN ( ' . implode(',', $a) . ' )';
    }
    public function not($a = NULL)
    {
        self::$instance->sql .= ' NOT ' . $a;
    }
    public function list($limit, $offset)
    {
        self::$instance->sql .= ' LIMIT ' . $limit . ' OFFSET ' . $offset;
    }
    public function __toString()
    {
        return self::$instance->sql;
    }
}

$projects =
    Finder::for('project')
        ->where('name')->like('%secret%')
        ->and('priority', '>', 9)
        ->or('code')->in(['4', '5', '7'])
        ->and()->not('created_at')
        ->list(10, 20);

echo $projects;
