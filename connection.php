<?php
class connection
{
    var $host="localhost";
    var $db="user acounts";
    var $username="root";
    var $password="";

    var $connect;

    function connect()
    {
        $this->connect=mysqli_connect($this->host,$this->username,$this->password);
        mysqli_select_db($this->connect, $this->db);
    }

    function disconnect()
    {
        if (isset($this->connect))
        {
            mysqli_close($this->connect);
        }
    }

    function getConnect(){
        return $this->connect;
    }


}
?>
