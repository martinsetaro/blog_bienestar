<?php
include('include/header.php');

$noticias = array(
    [
        "titulo" => "Reducir el colesterol consumiendo frutos secos",
        "parrafo" => "
        ¿Sabías que los frutos secos pueden ayudarte a reducir el colesterol? Las nueces, las almendras y otros frutos secos pueden ayudarte a reducir el colesterol cuando los consumes como parte…",
        "imagen" => "https://www.atida.com/es-es/blog/wp-content/uploads/2021/12/31-nuevo-blog-560x321.jpg"

    ],
    [
        "titulo" => "¿Qué es la aterosclerosis?",
        "parrafo" => "La aterosclerosis es un proceso progresivo que tarda varias décadas en desarrollarse, el cual consiste en la obstrucción de las arterias de varias regiones del organismo.",
        "imagen" => "https://www.emergency-live.com/wp-content/uploads/2022/11/aterosclerosi-arterie-sangue-1-750x430.jpg"

    ],
    [
        "titulo" => "17 de mayo: Día Mundial de la Hipertensión Arterial",
        "parrafo" => "La hipertensión arterial es la principal causa de las enfermedades cardiovasculares. En el mundo, alrededor de 17 millones de personas mueren por eventos cardíacos. De ese total, 9,4 millones de muertes son consecuencia directa de la hipertensión. ¿De qué se trata?",
        "imagen" => "https://statics-cuidateplus.marca.com/cms/styles/natural/azblob/tension-arterial.jpg.webp?itok=zHFXEjIC"

    ],
    [
        "titulo" => "¿Estar en buen estado físico es más importante que estar delgado?",
        "parrafo" => "Si bien tanto lograr un peso saludable como hacer ejercicio de forma regular son objetivos importantes, tu prioridad n.º 1 debería ser mejorar tu estado cardiovascular para aumentar tus posibilidades de llevar una vida sana y prolongada.",
        "imagen" => "https://www.semana.com/resizer/8c15g0t-oEVHo6n09TIRtqSGIMQ=/1280x720/smart/filters:format(jpg):quality(80)/cloudfront-us-east-1.images.arcpublishing.com/semana/2SVE4JQ7TNDDLDTTUY3PNZX6Y4.jpg"

    ]
);





?>

<div class="w-full h-auto flex flex-wrap p-4 justify-around mt-14">
    <div class="w-80 h-auto flex flex-col shadow-md bg-white pb-4 ">
        <img class="w-full h-64" src="public/img/dormir.jpg" alt="img" title="buen dormir"/>
        <h2 class="font-averta text-center mt-2 mb-2">Los beneficios del descanso</h2>
        <p class="text-sm text-center mt-2">El descanso es esencial para el bienestar y la salud tanto física como mental. Aquí te presento algunos de los principales beneficios del descanso.</p>
        <button class="bg-amber-400 p-2 rounded-lg mt-4 w-1/2 m-auto hover:bg-red-400 hover:text-white ">+ Info</button>
    </div>
    <div class="w-80 h-auto flex flex-col shadow-md bg-white pb-4 ">
        <img class="w-full h-64" src="public/img/ejercicio.jpg" alt="img" title="buen dormir"/>
        <h2 class="font-averta text-center mt-2 mb-2">La clave de una rutina deportiva.</h2>
        <p class="text-sm text-center mt-2">El descanso es esencial para el bienestar y la salud tanto física como mental. Aquí te presento algunos de los principales beneficios del descanso.</p>
        <button class="bg-amber-400 p-2 rounded-lg mt-4 w-1/2 m-auto hover:bg-red-400 hover:text-white">+ Info</button>
    </div>
    <div class="w-80 h-auto flex flex-col shadow-md bg-white pb-4 ">
        <img class="w-full h-64" src="public/img/alimento.jpg" alt="img" title="buen dormir"/>
        <h2 class="font-averta text-center mt-2 mb-2">Los alimentos y el descanso.</h2>
        <p class="text-sm text-center mt-2">El descanso es esencial para el bienestar y la salud tanto física como mental. Aquí te presento algunos de los principales beneficios del descanso.</p>
        <button class="bg-amber-400 p-2 rounded-lg mt-4 w-1/2 m-auto hover:bg-red-400 hover:text-white ">+ Info</button>
    </div>

</div>
<div class="w-full h-auto pt-12 pb-12">
<h2 class="text-3xl text-white bg-cyan-700 font-averta p-3">Últimas noticias sobre temas de salud y bienestar</h2>
<div class="flex flex-wrap justify-around w-full h-auto p-4">
<?php 
foreach ($noticias as $noticia) { ?>
    
<div class="w-60 h-auto p-3 flex flex-col">
    <img src="<?php echo $noticia["imagen"];?>" alt="img" title="img"/>
    <h2 class="text-center text-2xl font-averta"><?php echo $noticia["titulo"];?></h2>
    <p><?php echo $noticia["parrafo"];?></p>
    <button class="bg-amber-400 p-2 rounded-lg mt-4 w-1/2 m-auto hover:bg-red-400 hover:text-white ">+ info</button>
</div>
<?php
}



?>
</div>
</div>


<?php
include('include/footer.php');
?>
