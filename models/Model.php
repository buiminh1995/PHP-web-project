<?php 
	require_once('Connection.php');
	class Model{
		var $connection;
        var $table = '';
		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table;

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
        }
        
        function create($data){
            $f = '';
            $v = '';
            foreach($data as $key => $value){
                $f .= $key.",";
                $v .= "'".$value."',";
            }
            $f = trim($f,",");
            $v = trim($v,",");
            $query = "INSERT INTO ".$this->table." (".$f.") VALUES (".$v.")";
			return $this->connection->query($query);
        }

        function find($id){
            $query = "SELECT * FROM ".$this->table." WHERE id =".$id;
            $result = $this->connection->query($query)->fetch_assoc();
            return $result;
		}
		
		function delete($id){
			$query = "DELETE FROM ".$this->table." WHERE id =".$id;
			return $this->connection->query($query);
		}

		function update($data){
            $v = '';
            foreach($data as $key => $value){
                $v .= $key." ='".$value."',"; 
            }
            $v = trim($v,",");
            $query = "UPDATE ".$this->table." SET ".$v." WHERE id =".$data['id'];
			return $this->connection->query($query);
        }

	}
 ?>