<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>paginación</title>
</head>
<body>
    <div class="contenedor">
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
                <?php foreach($articulos as $articulo): ?>
                    <li><?php echo $articulo['id'] . '.- ' . $articulo['articulo']; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <div class="paginacion">
            <ul>
                <!-- botón de siguiente  -->
                <?php if($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?>
                <!-- paginación de la página -->
                <?php 
                
                    for($i = 1; $i <= $numeroPaginas; $i++){
                        if ($pagina === $i) {
                            echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        }else{
                            echo "<li><a href='?pagina=$i'>$i</a></li>";
                        }
                    }
                ?>
                
                <!-- botón de anterior -->
                <?php if($pagina == $numeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="?pagina = <?php echo $pagina + 1 ?>" >&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </div>

</body>
</html>