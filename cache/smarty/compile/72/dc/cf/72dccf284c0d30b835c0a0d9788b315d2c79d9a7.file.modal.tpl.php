<?php /* Smarty version Smarty-3.1.19, created on 2016-07-13 01:30:13
         compiled from "C:\xampp\htdocs\tienda_virtual\admin449pfdnvu\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174405785dff5a52a13-20724634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72dccf284c0d30b835c0a0d9788b315d2c79d9a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda_virtual\\admin449pfdnvu\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174405785dff5a52a13-20724634',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5785dff5a5fbf6_82872116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5785dff5a5fbf6_82872116')) {function content_5785dff5a5fbf6_82872116($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
