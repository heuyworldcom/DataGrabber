<?php 

// Class DataGrab - Created By Kevin J Brosnahan On: 2019-10-29 at 02:10:52

 if(!class_exists('DataGrabber')){
  class DataGrabber{
      var $today;
      private $m_fields;
      private $m_values;
      private $m_sql;
      public $Fields;
      public $Values;
      public $Sql;

      function __construct(){
          $this->today = date( 'Y-m-d' );
          $this::Initialize();
      } 

      private function Initialize(){
            $this->Fields='';
            $this->Values='';
            $this->Sql='';
      }
      
	  
      public function GrabGlobalsSql(){

        $this::set_Sql("INSERT INTO `data_collection`(`created_date`,");

        if(isset($_SERVER) && ( json_encode($_SERVER, JSON_HEX_QUOT) != '[]')){
            $this::set_Fields("`SERVER`,");
            $this::set_Values("'".json_encode($_SERVER, JSON_HEX_QUOT)."',");
        }

        if(isset($_REQUEST) && json_encode($_REQUEST, JSON_HEX_QUOT) != '[]' ){
			$this::set_Fields("`REQUEST`,");
			$this::set_Values("'".json_encode($_REQUEST, JSON_HEX_QUOT)."',");
		}

        if(isset($_POST) && json_encode($_POST, JSON_HEX_QUOT) != '[]' ){
			$this::set_Fields("`POST`,");
			$this::set_Values("'".json_encode($_POST, JSON_HEX_QUOT)."',");
		}

		if(isset($_GET) && json_encode($_GET, JSON_HEX_QUOT) != '[]' ){
			$this::set_Fields("`GET`,");
			$this::set_Values("'".json_encode($_GET, JSON_HEX_QUOT)."',");
		}

		if(isset($_FILES) && json_encode($_FILES, JSON_HEX_QUOT) != '[]' ){
			$this::set_Fields("`FILES`,");
			$this::set_Values("'".json_encode($_FILES, JSON_HEX_QUOT)."',");
		}

		if(isset($_ENV) && json_encode($_ENV, JSON_HEX_QUOT) != '[]' ){
			$this::set_Fields("`ENV`,");
			$this::set_Values("'".json_encode($_ENV, JSON_HEX_QUOT)."',");
		}

		if(isset($_COOKIE) && json_encode($_COOKIE, JSON_HEX_QUOT) != '[]' ){
			$this::set_Fields("`COOKIE`,");
			$this::set_Values("'".json_encode($_COOKIE, JSON_HEX_QUOT)."',");
		}

		if(isset($_SESSION) && json_encode($_SESSION, JSON_HEX_QUOT) != '[]' ){
			$this::set_Fields("`SESSION`,");
			$this::set_Values("'".json_encode($_SESSION, JSON_HEX_QUOT)."',");
		}

        $this::set_Sql(substr($this::get_Fields(),0,strlen($this::get_Fields())-2) . "`) VALUES('".date('Y-m-d H:m:s')."'," . substr($this::get_Values(),0,strlen($this::get_Values())-2)."');");

        return $this::get_Sql();
	  }
	  
      // Fields
      public function set_Fields( $m_fields ){
            $this->Fields .= $m_fields;
      }
      public function get_Fields(){
            return $this->Fields;
      }
      
      // Values
      public function set_Values( $m_values ){
            $this->Values .= $m_values;
      }
      public function get_Values(){
            return $this->Values;
      }
      
      // Sql
      public function set_Sql( $m_sql ){
            $this->Sql .= $m_sql;
      }
      public function get_Sql(){
            return $this->Sql;
      }
  }  // Class DataGrab()
} // if(!class_exists('DataGrab')

?>
