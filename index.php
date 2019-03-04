<html>
  <head>
    <title>Al-Quran</title>
    <script src="https://code.getmdl.io/1.3.0/material.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Hind+Siliguri" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <!-- The drawer is always open in large screens. The header is always shown,
      even in small screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <div class="mdl-layout-spacer"> <h2 style="text-align: center;">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيم </h2></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon"
                   for="fixed-header-drawer-exp">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" name="sample"
                     id="fixed-header-drawer-exp">
            </div>
          </div>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Quran</span>
        <nav class="mdl-navigation">
          <?php
          	$SuraID = 1;
          	if (isset($_GET['SuraID'])) 
          	{
          		$SuraID = $_GET['SuraID'];
          	}
			include_once($_SERVER['DOCUMENT_ROOT'].'/Quran/bll/bll.contents.php');
			$bllContents = new BLLContents;
			echo $bllContents->printContents($SuraID);
          ?>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
           <div class="mdl-grid">
           		<?php
					include($_SERVER['DOCUMENT_ROOT'].'/Quran/dal/dal.quran.php');
           			$SuraID = 1;
           			if(isset($_GET['SuraID']))
           			{
           				$SuraID = $_GET['SuraID'];
           			}

           			$dalQuran = new DALQuran;
           			$resultQuranBangla =  $dalQuran->getQuranBangla($SuraID);
           			$resultQuranArabic =  $dalQuran->getQuranArabic($SuraID);

           			$data = "";
	                while (($resQuranArabic = mysqli_fetch_assoc($resultQuranArabic)) && ($resQuranBangla = mysqli_fetch_assoc($resultQuranBangla)))
	                {
	                	$data .= '<div class="mdl-cell-a mdl-cell--12-col">';
	                	$data .= '<small>['.$resQuranArabic['VerseID'].']</small> ';
	                	$data .= $resQuranArabic['AyahText'];
	                	$data .= '</div>';

	                	$data .= '<div class="mdl-cell-b mdl-cell--12-col">';
	                	$data .= '['.$resQuranBangla['VerseID'].'] ';
	                	$data .= $resQuranBangla['AyahText'];
	                	$data .= '</div>';
	                }
	                print($data)
           		?>
			    
			</div>
        </div>
      </main>
    </div>
  </body>
</html>