<?php
class DBConnection
{
    private $_username;
    private $_password;
    private $_db;
    private $_hostname;
    private $_connection;
    
    public function __construct() {
        $this->setConnection();
    }
    /**
     * Set DB connection
     * 
     * @param array $configOptions
     */
    public function setConnection()
    {
        $configOptions = parse_ini_file('./config.ini');
        $this->_db = $configOptions['db']['dbname'];
        $this->_hostname = $configOptions['db']['hostname'];
        $this->_username = $configOptions['db']['username'];
        $this->_password = $configOptions['db']['password'];
        /*$dsn = "mysql:host=$this->_hostname;dbname=$this->_db";
        $this->_connection = new PDO($dsn, $this->_username, $this->_password);*/
        $this->_connection = new mysqli($this->_hostname, $this->_username, $this->_password, $this->_db) or die('Unable to connect to database '. mysqli_connect_error());
    }
    
    /**
     * Get DB connection
     * 
     * @return mysql connection
     */
    public function getConnection()
    {
        if (!$this->_connection) {
            throw new Exception('DbConnection is not set');
        }

        return $this->_connection;
    }
}