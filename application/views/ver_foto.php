<?php

plantilla::inicio();

$CI =& get_instance();

$sql = "select * from imagenes where id = ?";

$rs = $CI->db->query($sql, array($cod));

$rs = $rs -> result();

if(count($rs) ==0) {
  redirect('web');
}

$imagen = $rs[0];
 ?>
<div clas="text-center">



 <h1><?php echo $imagen->nombre ?> </h1>

 <img src="<?php echo base_url("fotos/{$imagen->id}.jpg");?>" />
</div>
