
<h1 class="display-2 text-center titulo mb-4">Carta de Platos</h1>

<div class="container">
  <div class="row g-5">  <!-- FILA -->
    <?php foreach (encontrar_todos_platos() as $plato) : ?>
      <div class="col-lg-6"> <!-- COLUMNA (Se crean 2 columnas porque el total es 12, y hay 2 de 6)-->
        <div class="d-flex flex-column">    <!-- flex-column: los elementos se apilaran verticalmente uno encima de otro -->
          <div class="d-flex align-items-center">       <!-- ITEMS PRIMERA LINEA -->
            <div class="flex">                          <!-- titulo -->
              <p class="card-title font-weight-bold text-truncate text-sm subtitulo">
                <strong><?php echo strtoupper($plato->post_title); ?></strong>
              </p>
            </div>
            <div class="flex-fill linea px-2"></div>    <!-- ralla -->
            <div class="precio">                        <!-- precio -->
              <?php echo get_field('price', $plato->ID) . '$'; ?>
            </div>
          </div>
          <div class="descripcion">                     <!-- ITEMS SEGUNDA LINEA -->
            <p><?php echo get_field('description', $plato->ID); ?></p>     <!-- descripcion -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>




<?php
function encontrar_todos_platos() {
    // Mete todos los CPT con Post_Type "platos" en un array
    $platos = get_posts(array(
        'post_type'      => 'platos',
        'posts_per_page' => -1,
    ));
    return $platos;
}
?>
