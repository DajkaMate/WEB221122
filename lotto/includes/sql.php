<?php
    function Ev()
    {
        $con = Connect();
        $sql = "SELECT DISTINCT ev from otos";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }

    function Het()
    {
        if(isset($_GET["evszam"]))
        {
            $evszam = $_GET["evszam"];
            $con = Connect();
            $sql = "SELECT het from otos where ev = $evszam";
            $result = mysqli_query($con, $sql);
            return $result;
            mysqli_close($con);  
        }  
    }

    function Adatlap()
    {

        $evszam = $_GET["evszam"];
        $het = $_GET["het"];
        $con = Connect();
        $sql = "SELECT * from otos where het = $het and ev = $evszam";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }

    function Mikor()
    {
        $con = Connect();
        $sql = "SELECT * from otos where talalat5_db >= 1";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }

    
?>