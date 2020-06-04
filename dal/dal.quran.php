<?php 
class DALQuran
{
	
	function __construct()
        {

        }
        public function getQuranBangla($SuraID)
        {
                $utility = new Utility;
                $sql = "SELECT * FROM `quran_bangla` WHERE SuraID=".$SuraID;
                $result = $utility->dbQuery($sql);
                return $result;
        }
        public function getQuranArabic($SuraID)
        {
                $utility = new Utility;
                $sql = "SELECT * FROM `quran_arabic` WHERE SuraID=".$SuraID;
                $result = $utility->dbQuery($sql);
                return $result;
        }
}

?>