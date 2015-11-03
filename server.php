<?php


  if( isset($_GET["operation"]) ){

      $file = fopen("operation.txt", "w") or die("Unable to open file!");
      fwrite( $file , $_GET["operation"] . ";" . $_GET["content"] );
      fclose($myfile);
      echo "DONE";
      die;

  }else{

?>

  <div id="operationencours" style="text-align: center;border: 1px solid #3D53AD;height: 39px;font-size: 13px;padding: 10px;"></div>
  <br />
  <div id="result" style="border:1px solid #3E9621;text-align: center;height: 39px;font-size: 13px;padding: 10px;"></div>
  
<?php
  /*
  <a href="javascript:void(0)" id="id0909E3" class="setOperation">Ecran BLEU</a><br />
  <a href="javascript:void(0)" id="id0DBD13" class="setOperation">Ecran VERT</a><br />
  <a href="javascript:void(0)" id="idD11F34" class="setOperation">Ecran ROUGE</a><br />
  <a href="javascript:void(0)" id="idD1D11F" class="setOperation">Ecran JAUNE</a><br />
  */
?>
     <div class="page-header">
       <h1>Actions</h1>
     </div>
	<p>
       <a href="javascript:void(0)" class="setOperation btn btn-lg btn-primary" id="id0909E3">Ecrant Bleu</a>
       <a href="javascript:void(0)" class="setOperation btn btn-lg btn-success" id="id0DBD13">Ecrant Vert</a>
       <a href="javascript:void(0)" class="setOperation btn btn-lg btn-danger" id="idD11F34">Ecrant Rouge</a>
       <a href="javascript:void(0)" class="setOperation btn btn-lg btn-warning" id="idD1D11F">Ecrant Jaune</a>
       <a href="javascript:void(0)" class="setOperation" id="img1">
       		<img src="1.jpg" />
	   </a>
       <a href="javascript:void(0)" class="setOperationImage" id="img2">
       		<img src="2.jpg" />
	   </a>
       <a href="javascript:void(0)" class="setOperationImage" id="img3">
       		<img src="3.jpg" />
	   </a>
       <a href="javascript:void(0)" class="setOperationImage" id="img4">
       		<img src="4.jpg" />
	   </a>
       <a href="javascript:void(0)" class="setOperationImage" id="img5">
       		<img src="5.jpg" />
	   </a>
	</p>
<script src="http://ec2-52-32-10-107.us-west-2.compute.amazonaws.com/js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ec2-52-32-10-107.us-west-2.compute.amazonaws.com/css/bootstrap.min.css"/>

<script>
  $(document).ready(function(){
	
//	setTimeout(
	setInterval(function(){
		$("#operationencours").load("http://ec2-52-32-10-107.us-west-2.compute.amazonaws.com/back/server/operation.txt");

	}, 2000);
	
    $('.setOperation').click(function(){
      var id = $(this).attr("id");
      id = id.replace('id','');
	$("#result").load("http://ec2-52-32-10-107.us-west-2.compute.amazonaws.com/back/server/index.php?operation=color"+"&content="+id);      
    });
  });
</script>
<?php

  }

?>