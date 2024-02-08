<h1 class="display-2 text-center titulo">Carta de Platos por Secciones</h1>

<div class="container">
  <?php
  //Obtenemos todas las categorias
  $categorias = obtener_categorias_seccion_carta();

  //Iteramos sobre cada categoria
  foreach ($categorias as $categoria) :
  ?>
    <div class="row g-5 mt-1">  <!-- mt: espacio por arriba  -->
      <div class="col-lg-12">  <!-- lg-12: ocupara todo el ancho en dispositivos grande  -->
        <h2 class="text-center"><?php echo $categoria->name; ?></h2>
      </div>
    </div>

    <div class="row g-5 mb-3"> <!-- mb: espacio por abajo  -->
      <?php
      // Obtenemos todos los platos de la categoría actual
      $platos = obtener_platos_por_categoria($categoria);

      // Iteraramos sobre cada plato de la categoría actual
      foreach ($platos as $plato) :
      ?>
        <div class="col-lg-6">
          <div class="d-flex flex-column">
            <div class="d-flex align-items-center">
              <div class="flex">
                <p class="card-title font-weight-bold text-truncate text-sm subtitulo">
                  <strong><?php echo strtoupper($plato->post_title); ?></strong>
                </p>
              </div>
              <div class="flex-fill linea px-2"></div>
              <div class="precio">
                <?php echo get_field('price', $plato->ID). '$'; ?>
              </div>
            </div>
            <div class="descripcion">
              <p><?php echo get_field('description', $plato->ID); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>


<?php
//Función para obtener todas las categorías de sección de carta
function obtener_categorias_seccion_carta() {
    return get_terms(array(
        'taxonomy' => 'seccion-carta',
    ));
}


//Función para obtener todos los platos de una categoría específica
function obtener_platos_por_categoria($categoria) {
    return get_posts(array(
        'post_type'      => 'platos',
        'posts_per_page' => -1,
        'tax_query'      => array(
            array(
                'taxonomy' => 'seccion-carta',
                'field'    => 'term_id',
                'terms'    => $categoria->term_id,
            ),
        ),
    ));
}
?>
