<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-cyan.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-cyan.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-metro-cyan" style="background-color:#ffffff;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#000000;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Intersección</h2></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>"><label class="title">SELECCIONE CAPA VECTORIAL DE ENTRADA</label>		<div class="column column1"><label><input type="radio" name="radio" value="Departamento" /><span>Departamento</span></label><label><input type="radio" name="radio" value="Localidad" /><span>Localidad</span></label><label><input type="radio" name="radio" value="Municipio" /><span>Municipio</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio<?php frmd_add_class("radio1"); ?>"><label class="title">SELECCIONE CAPA DE INSTERSECCIÓN</label>		<div class="column column1"><label><input type="radio" name="radio1" value="Departamento" /><span>Departamento</span></label><label><input type="radio" name="radio1" value="Localidad" /><span>Localidad</span></label><label><input type="radio" name="radio1" value="Municipio" /><span>Municipio</span></label><label><input type="radio" name="radio1" value="Variantes no cartografiadas" /><span>Variantes no cartografiadas</span></label><label><input type="radio" name="radio1" value="Variante cartografiada" /><span>Variante cartografiada</span></label></div><span class="clearfix"></span>
</div>
<div class="submit"><input type="submit" value="LISTO!"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-cyan.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>