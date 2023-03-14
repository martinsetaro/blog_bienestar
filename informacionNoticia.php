<?php 
include('include/header.php');


$titulo = $_GET['titulo'];
$parrafo = $_GET['parrafo'];
$img = $_GET['img'];


?>


<div class="w-1/2 h-auto p-5 m-auto">
<h2 class="text-3xl mb-4 text-center mt-4 font-averta"><?php echo $titulo ?></h2>
    <img class="w-full h-96" src='<?php echo $img ?>' alt="imagen" title="img"/>
    <p class="text-xl font-averta mt-3"><?php echo $parrafo ?></p>

</div>





<?php








include('include/footer.php');
?>