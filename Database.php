<?php
/*
PHP Database Class by Blatacaharry made with love from University of Cape Coast...

Simple class made to help with Database connections 
*/
//@Class create Database
Class Database{
	/*
	@param 
	Setting the data driver default driver is mysql you can change if you are using a different driver like mysqli...
	*/
	private $_driver = 'mysql';
	

	//@param private for the host...
	private $_db_host; 

	//@param private for the database name ...
	private $_db_name; 

	//@param private for the database user...
	private $_db_user; 

	//@param private for the database password...
	private $_db_pass; 

	//@param protected connection string...
	protected $_conn;

	/*
	@func constructs to instatiate the @params
	*/
	public function __construct(){
		$this->_db_host = htmlspecialchars($this->_db_host);
		$this->_db_name = htmlspecialchars($this->_db_name);
		$this->_db_user = htmlspecialchars($this->_db_user);
		$this->_db_pass = htmlspecialchars($this->_db_pass);
		$this->_driver = htmlspecialchars($this->_driver);
	}

	/*
	@func destruct  to kill the after use of the @class
	*/
	public function __destruct(){
		$this->conn = NULL;
		$this->_db_host = NULL;
		$this->_db_name = NULL;
		$this->_db_user = NULL;
		$this->_db_pass = NULL;
	}

	/*Now the @func to create the connection coms here
	a protected function to build the @param conn...@Blatacharry 
	*/

	public function _dbConnection($host,$name,$user,$pass,$driver){
		try{
			$handler = new PDO("".$this->_driver.":host=".$this->_db_host.";dbname=".$this->_db_name."",$this->_db_user,$this->_db_pass);
			$handler->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $exception){
			echo "Connection Error: ".$exception->getMessage();
		}
		return $handler;
	}
}

?>