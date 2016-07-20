<?php /* Smarty version Smarty-3.1.19, created on 2016-07-13 01:15:56
         compiled from "C:\xampp\htdocs\tienda_virtual\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198915785dc9c12f764-45709986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5fe0d00f1bf731d9cfd5b696d42aeae2e3cd626' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda_virtual\\admin\\themes\\default\\template\\content.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198915785dc9c12f764-45709986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5785dc9c42d2a4_63806832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5785dc9c42d2a4_63806832')) {function content_5785dc9c42d2a4_63806832($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
