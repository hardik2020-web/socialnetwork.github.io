<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-12 14:55:20
  from 'C:\xampp\htdocs\Social\content\themes\default\templates\__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5ce158edaad4_39686664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd8b1d95b248a8799b9f00a7dd513586151fd9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Social\\content\\themes\\default\\templates\\__reaction_emojis.tpl',
      1 => 1593872022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ce158edaad4_39686664 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_reaction']->value == "like") {?>

	<!-- like -->
	<div class="emoji emoji--like">
        <div class="emoji__hand">
            <div class="emoji__thumb"></div>
        </div>
    </div>
    <!-- like -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "love") {?>

	<!-- love -->
	<div class="emoji emoji--love">
        <div class="emoji__heart"></div>
    </div>
	<!-- love -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "haha") {?>

	<!-- haha -->
	<div class="emoji emoji--haha">
        <div class="emoji__face">
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth">
                <div class="emoji__tongue"></div>
            </div>
        </div>  
    </div>
	<!-- haha -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "yay") {?>

	<!-- yay -->
	<div class="emoji emoji--yay">
        <div class="emoji__face">
            <div class="emoji__eyebrows"></div>
            <div class="emoji__mouth"></div>
        </div>
    </div>
	<!-- yay -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "wow") {?>

	<!-- wow -->
    <div class="emoji emoji--wow">
        <div class="emoji__face">
            <div class="emoji__eyebrows"></div>
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth"></div>
        </div>
    </div>
    <!-- wow -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "sad") {?>

	<!-- sad -->
    <div class="emoji emoji--sad">
        <div class="emoji__face">
            <div class="emoji__eyebrows"></div>
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth"></div>
        </div>
    </div>
    <!-- sad -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "angry") {?>

	<!-- angry -->
    <div class="emoji emoji--angry">
        <div class="emoji__face">
            <div class="emoji__eyebrows"></div>
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth"></div>
        </div>
    </div>
    <!-- angry -->

<?php }
}
}
