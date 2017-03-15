<?php
if ($_POST) {

 $CI =& get_instance();
 $f = new stdClass();
  $f->nombre = $_POST['nombre'];
  $f->comentario= $_POST['comentario'];
  $f->fecha =time();

  $CI->db->insert('imagenes',$f);


  $cod = $this->db->insert_id();

  $foto = $_FILES['foto'];

  if($foto['error'] == 0) {
    $tmp = "fotos/{$cod}.jpg";
    move_uploaded_file($foto['tmp_name'], $tmp);
  }
}
plantilla::inicio();

?>

<div class="text-right">

  <a class="btn btn-default" href="<?php echo base_url('admin/salir')?>">Salir </a>

</div>

<fieldset>

  <legend>
Agregar imagen
  </legend>

  <form enctype="multipart/form-data" method="post" action="">

    <div class="col col-sm-4">

    <div class="form-group input-group">


      <label class="input-group-addon"  style="width:120px;">Nombre </label>

      <input type="text" required style="width:250px;" name="nombre" class="form-control"/>
  </div>

  <div class="form-group input-group">


    <label class="input-group-addon"> Comentario </label>

    <textarea class="form-control" name="comentario"> </textarea>
</div>


<div class="form-group input-group">


  <label class="input-group-addon" style="width:120px;">Imagen </label>

  <input type="file" required style="width:250px;" name="foto" class="form-control"/>
</div>

<div class="guardar">
<button type="submit"class="btn btn-primary"> Guardar </button>

<br>
</div>
  </form>

</fieldset>

<fieldset>
  <legend>
    <br>
Imagenes agregadas
<hr>
    <table class="table">
      <thead>
        <tr>

          <th>Img </th>
          <th>Cod <th>
          <th>Nombre </th>
          <th>Comentario </th>
        </tr>

      </thead>

      <tbody>
<?php

$imagenes= cargar_imagenes();

foreach($imagenes as $imagen) {

  echo "<tr>
<td><img src='fotos/{$imagen->id}.jpg' height='50'/> </td>
<td>{$imagen->id} </td>
<td>{$imagen->nombre} </td>

<td>{$imagen->comentario} </td>

<td> </td>

  </tr>";
}

?>

      </tbody>

    </table>

  </legend>

</fieldset>
