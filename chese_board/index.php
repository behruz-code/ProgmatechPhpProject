<!DOCTYPE html>
<html>
<head>

<style>
.black {
  height: 100px;
  width: 100px;
  background-color: black;}
</style>


<style>
.white {
  height: 100px;
  width: 100px;
  background-color: white;

}
</style>
</head>
<body>

<div style="border: 1px solid #333; display: block; width: 800px; height: 800px">
<?php
	for ($i = 1; $i <= 4; $i++) {

             echo '<div style="width: 800px;">';     
           for ($m = 1; $m <= 4; $m++) {


         	  echo '<div style="float:left">
				<div class="black"></div>
				<div class="white"></div>
			</div>
			<div style="float:left">
				<div class="white"></div>
				<div class="black"></div>
			</div>';

	         }
         echo '</div>'; 

     }
      
	?>
</div>


</body>
</html> 


