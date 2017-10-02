<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:14:22
         compiled from "/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/front/failure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4302368675838392e8310c6-76609956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7300f8f72a1c9674e7a147bbf2606d90704f6d5a' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/front/failure.tpl',
      1 => 1480078795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4302368675838392e8310c6-76609956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'cart_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5838392e854f88_05492931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838392e854f88_05492931')) {function content_5838392e854f88_05492931($_smarty_tpl) {?><div style="text-align: center;">

  <img src='<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
' />

  <table style="margin-left: auto; margin-right: auto; text-align: left;">
    <tr>
      <th colspan="2" style="text-align: center;"><?php echo smartyTranslate(array('s'=>'Transacción Rechazada','mod'=>'webpaykcc'),$_smarty_tpl);?>
</th>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Número de la Compra','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['cart_id']->value;?>
</td>
    </tr>
    <tr>
    	<td colspan="2">
    		<?php echo smartyTranslate(array('s'=>'Las posibles causas de este rechazo son','mod'=>'webpaykcc'),$_smarty_tpl);?>
:
    		<ul>
    		  <li><?php echo smartyTranslate(array('s'=>'Error en el ingreso de los datos de su tarjeta de crédito o débito (fecha y/o código de seguridad).','mod'=>'webpaykcc'),$_smarty_tpl);?>
</li>
				  <li><?php echo smartyTranslate(array('s'=>'Su tarjeta de crédito o débito no cuenta con el cupo necesario para pagar la compra.','mod'=>'webpaykcc'),$_smarty_tpl);?>
</li>
				  <li><?php echo smartyTranslate(array('s'=>'Tarjeta aún no habilitada en el sistema financiero.','mod'=>'webpaykcc'),$_smarty_tpl);?>
</li>
			   </ul>
    	</td>
    </tr>
  </table>

  </div><?php }} ?>
