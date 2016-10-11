<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);

 /*  
  * Constantes de parâmetros para configuração da conexão  
  */  
 define('HOST', '192.168.25.6');  
 define('DBNAME', 'siapen');  
 define('CHARSET', 'utf8');  
 define('USER', 'root');  
 define('PASSWORD', 'mysqldb');  

 class Conexao {  

   /*  
    * Atributo estático para instância do PDO  
    */  
   private static $pdo;

   /*  
    * Escondendo o construtor da classe  
    */ 
   private function __construct() {  
     //  
   } 
   
   /*  
    * Método estático para retornar uma conexão válida  
    * Verifica se já existe uma instância da conexão, caso não, configura uma nova conexão  
    */  
   public static function getInstance() {  
   	if (!isset(self::$pdo)) {  
   		try {  
   			$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);  
   			self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, $opcoes);  
   		} catch (PDOException $e) {  
   			echo "Erro: " . $e->getMessage();  
   		}  
   	}  
   	return self::$pdo;  
   }  
}

