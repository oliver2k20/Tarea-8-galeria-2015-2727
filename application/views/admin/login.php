<?php
$mensaje="";
if($_POST) {

$sql = "select * from usuarios where correo = ? and clave = ?";

$correo = $_POST['email'];
$clave = md5($_POST['clave']);
$CI =& get_instance();
$rs = $CI->db->query($sql, array($correo, $clave));


$rs = $rs->result();

if(count($rs)>0) {
  $_SESSION['gale_user'] = $rs[0];
  redirect('admin');
}else {
  $mensaje = "Usuario o clave invalido";
}
}
plantilla::inicio();
 ?>

 <div class="row"

<div class="col col-sm-4 col-sm-offset4">
<form method="post" action="">
  <h3> Inicia seccion </h3>
  <div class="form-group input-group">


    <label class="input-group-addon" style="width:70px;"> Usuario </label>

    <input type="text" style="width:250px;" name="email" class="form-control"/>
</div>

<div class="form-group input-group">


  <label class="input-group-addon" style="width:70px;"> Clave </label>

  <input type="password" style="width:250px;" name="clave" class="form-control"/>


</div>

<div style="color:red">
<?php echo $mensaje; ?>
</div>
<div class="">
<button class="btn btn-primary"> Ingresar </button>
</div>
  </form>
</div>
 </div>
