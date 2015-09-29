<?php 
// context sensitive lexer
// see: https://wiki.php.net/rfc/context_sensitive_lexer

class Finder
{
    public $sql = '';
    public static $instance = '';
    public static function for($a)
    {
        self::$instance  = new Finder();
        self::$instance->sql = 'SELECT * FROM ' . $a;
        return self::$instance;
    }
    public function where($a)
    {
        self::$instance->sql .= ' WHERE ' . $a;
        return self::$instance;
    }
    public function like($a)
    {
        self::$instance->sql .= ' LIKE ' . $a;
        return self::$instance;
    }
    public function and($a = NULL, $b = NULL, $c = NULL)
    {
        self::$instance->sql .= ' AND ' . $a . ' ' . $b . ' ' . $c;
        return self::$instance;
    }
    public function or($a = NULL, $b = NULL, $c = NULL)
    {
        self::$instance->sql .= ' OR ' . $a . ' ' . $b . ' ' . $c;
        return self::$instance;
    }
    public function in(array $a)
    {
        self::$instance->sql .= ' IN ( ' . implode(',', $a) . ' )';
        return self::$instance;
    }
    public function not($a = NULL)
    {
        self::$instance->sql .= ' NOT ' . $a;
        return self::$instance;
    }
    public function list($limit, $offset)
    {
        self::$instance->sql .= ' LIMIT ' . $limit . ' OFFSET ' . $offset;
        return self::$instance;
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
