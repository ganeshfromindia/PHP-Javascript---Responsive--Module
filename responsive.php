<?php
// set the number of columns as per your requirement. I have set it to 24 as below
$Columns = 24;

if(isset($_POST['width'])) {$colwidth = $_POST['width'];}

if(isset($colwidth)){

// minimum responsive window width is 500 as below, change it as per your need.
	if($colwidth < 500){
		$returnString='<style>
			.container {
				width: '.$colwidth.'px
				}
				';
				
		for ($i = 1; $i < $Columns + 1; $i = $i + 1) {
				$returnString.=' .col-'.$i.',';
			}
		$returnString=rtrim($returnString, ",")	;
		$returnString.='{
						width: 100%;
						}
			[class*="col"] {
				float: left;
				position:relative;
				}
			.row:before, .row:after {
					content: "";
					display: table;
					line-height: 0;
				}
			.row:after {
				clear: both;
				} 
			</style>';
		echo $returnString;
	}
	else{
		$returnString = '<style>
			.container {
				width: '.$colwidth.'px
				}';
				
		for ($i = 1; $i < $Columns + 1 ; $i = $i + 1) {
				$width = 100/$Columns*$i;
				$returnString.=' .col-'.$i.' {
										width: '.$width.'% ;
										}';
			}

			
		$returnString.= '	
			[class*="col"] {
				float: left;
				position:relative;
				}
			.row:before, .row:after {
					content: "";
					display: table;
					line-height: 0;
				}
			.row:after {
				clear: both;
				} 
			</style>';
		echo $returnString;		
	}
}
?>

