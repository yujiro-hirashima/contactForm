<?php
/* Smarty version 3.1.39, created on 2021-05-05 15:47:07
  from 'C:\xampp\htdocs\selfphp\practice\templates\smarty_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60923f6bb8eee1_18041199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387d20dc1b37308c34d95c544e9fbb6933856d58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\selfphp\\practice\\templates\\smarty_list.tpl',
      1 => 1620197223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60923f6bb8eee1_18041199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\selfphp\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset"UTF-8"/>
<title>Smarty</title>
</head>
<body>
  <p><?php echo mb_convert_encoding(htmlspecialchars(mb_strtoupper("abcdefg", 'UTF-8'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
    <li <?php if ($_smarty_tpl->tpl_vars['book']->value['price'] > 3500) {?> style="color:red;"<?php }?>>
      <a href="http://www.wings.msn.to/index.php/-/A-03/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['isbn'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
      (<?php echo mb_convert_encoding(htmlspecialchars(number_format($_smarty_tpl->tpl_vars['book']->value['price'],0), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
円／
        <?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value['published'],'%Y/%m/%d'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
刊行)
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html>
  <?php }
}
