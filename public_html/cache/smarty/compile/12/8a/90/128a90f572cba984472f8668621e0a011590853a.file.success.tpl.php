<?php /* Smarty version Smarty-3.1.19, created on 2016-06-15 13:53:28
         compiled from "/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/front/success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175652646957619618984459-42750346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '128a90f572cba984472f8668621e0a011590853a' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/front/success.tpl',
      1 => 1465958601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175652646957619618984459-42750346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'toc_page' => 0,
    'order_history' => 0,
    'shop_name' => 0,
    'shop_url' => 0,
    'customer_name' => 0,
    'tbk_cart_id' => 0,
    'tbk_amount' => 0,
    'tbk_auth_code' => 0,
    'tbk_transaction_date' => 0,
    'tbk_transaction_time' => 0,
    'tbk_card_last_digit' => 0,
    'tbk_transaction_type' => 0,
    'tbk_payment_type' => 0,
    'tbk_installment_quantity' => 0,
    'tbk_installment_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57619618a28e76_22124220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57619618a28e76_22124220')) {function content_57619618a28e76_22124220($_smarty_tpl) {?><div style="text-align: center;">

  <img src='<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
' />
  <h1><?php echo smartyTranslate(array('s'=>'Compra Exitosa','mod'=>'webpaykcc'),$_smarty_tpl);?>
</h1>
  <a href='<?php echo $_smarty_tpl->tpl_vars['toc_page']->value;?>
' target="_blank"><?php echo smartyTranslate(array('s'=>'Ver La Política de Devoluciones y/o Reembolsos','mod'=>'webpaykcc'),$_smarty_tpl);?>
</a><br/>
  <a href='<?php echo $_smarty_tpl->tpl_vars['order_history']->value;?>
' target="_blank"><?php echo smartyTranslate(array('s'=>'Ver Detalles de la Compra','mod'=>'webpaykcc'),$_smarty_tpl);?>
</a>
  <hr />
  <table style="margin-left: auto; margin-right: auto; text-align: left;">
    <tr>
      <th colspan="2" style="text-align: center;"><?php echo smartyTranslate(array('s'=>'Datos de la compra','mod'=>'webpaykcc'),$_smarty_tpl);?>
</th>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Nombre del comercio','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'URL del comercio','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><a href='<?php echo $_smarty_tpl->tpl_vars['shop_url']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['shop_url']->value;?>
</a></td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Nombre del comprador','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Número del Pedido','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_cart_id']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Monto (pesos chilenos)','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td>$<?php echo $_smarty_tpl->tpl_vars['tbk_amount']->value;?>
</td>
    </tr>
    <tr>
      <th colspan="2" style="text-align: center;"><?php echo smartyTranslate(array('s'=>'Datos de la transacción','mod'=>'webpaykcc'),$_smarty_tpl);?>
</th>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Código de autorización','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_auth_code']->value;?>
</td>
    </tr>

    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Fecha de la transacción','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_transaction_date']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Hora de la transacción','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_transaction_time']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Número de Tarjeta','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_card_last_digit']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Tipo de transacción','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_transaction_type']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Tipo de pago','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_payment_type']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Número de cuotas','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_installment_quantity']->value;?>
</td>
    </tr>
    <tr>
      <td><?php echo smartyTranslate(array('s'=>'Tipo de cuotas','mod'=>'webpaykcc'),$_smarty_tpl);?>
:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tbk_installment_type']->value;?>
</td>
    </tr>
  </table>

  
 </div>
<?php }} ?>
