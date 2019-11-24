<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>fotogaleria</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="row">
        <div class="large-12 columns">
            <h1>foto<span style="color:#c60f13;">galeria</span></h1>
        </div>
    </div>

    <div class="row">
        <div class="large-4 medium-4 columns">
            <div class="panel">
                <p>Este es un proyecto de ejemplo para el curso de Git.</p>
            </div>
        </div>
        <div class="large-8 medium-8 columns">
          <ul class="large-block-grid-5 medium-block-grid-5 small-block-grid-3 clearing-thumbs" data-clearing>
              <?php
              define('IMAGENES', 'fotos');

              if (is_dir(IMAGENES)) {
                  $handle = opendir(IMAGENES);

                  foreach (glob(IMAGENES . '/*.jpg') as $filename) {
                      echo '<li><a class="th" href="fotos/' . basename($filename) . '"><img alt="" src="miniaturas/' . basename($filename) . '" /></a></li>';
                  }

                  closedir($handle);
              } else {
                  echo '<p>ERROR: No hay imágenes.</p>';
              }
              ?>
          </ul>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <hr />
            <p style="font-size:80%; text-align: center;">&copy; 2015 Ion Jaureguialzo Sarasola</p>
        </div>
    </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
