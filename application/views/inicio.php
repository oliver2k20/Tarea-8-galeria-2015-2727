



    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->


<!-- Page Content -->
<div class="container">
<?php

plantilla::inicio();

 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Imagenes

        </h1>
    </div>
</div>
<div class="row">
<!-- /.row -->

<?php
$url = base_url('');
$imagenes = cargar_imagenes();

foreach($imagenes as $imagen) {
  echo <<<FOTO
  <div class="col-md-3 portfolio-item">
      <a href="{$url}/web/ver_foto/{$imagen->id}">
          <img class="img-responsive" src="{$url}/fotos/{$imagen->id}.jpg" alt="">
      </a>
  </div>

FOTO;

}
 ?>

 </div>

<!-- Projects Row -->
<div class="row">
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
    <div class="col-md-3 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
        </a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="#">&laquo;</a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">&raquo;</a>
            </li>
        </ul>
    </div>
</div>
<!-- /.row -->
