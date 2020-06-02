<?php 
include('dal/dal.contents.php');

class BLLContents
{
	
	public function PrintContents($SuraID)
	{
		$dalContents  = new DALContents;
                $resultContents = $dalContents->getContents();
                $data = "";
                while ($resContents = mysqli_fetch_assoc($resultContents))
                {       
                        if($SuraID==$resContents['SuraID'])
                        {
                                $data .= '<a class="mdl-navigation__link" href="index.php?SuraID='.$resContents['SuraID'].'">['.$resContents['SuraID'].'] '.$resContents['Name'].'.</a>';
                        }
                        else
                        {
                                $data .= '<a class="mdl-navigation__link " href="index.php?SuraID='.$resContents['SuraID'].'">['.$resContents['SuraID'].'] '.$resContents['Name'].'.</a>';
                        }
                }
                return $data;
	}
}

?>