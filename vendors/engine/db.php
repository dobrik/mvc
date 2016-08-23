<?php


class Db
{
    private $db;
    private $result;
    private static $instance = null;

    private function __construct()
    {
        $config = parse_ini_file("config/db.ini");
        if( !empty($config) ){
            $this->db = mysqli_connect($config['host'],$config['user'],$config['password'],$config['db']);
            if( mysqli_connect_errno() ){
                echo mysqli_connect_error(); // Вывод ошибки
                exit();
            }
        }
    }

    public function query($sql)
    {
        $this->result = mysqli_query( $this->db, $sql );
        if(mysqli_error($this->db)){
            echo 'Mysql error: '. mysqli_error($this->db);
        }
    }

    public function fetch_all()
    {
        $DbResult = [];
        while( $row = mysqli_fetch_assoc( $this->result )) {
            $DbResult[] = $row;
        }
        return $DbResult;
    }

    public function num_rows(){
        return mysqli_num_rows($this->result);
    }

    public static function getInstance()
    {
        if( is_null(self::$instance) ){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {

    }
}