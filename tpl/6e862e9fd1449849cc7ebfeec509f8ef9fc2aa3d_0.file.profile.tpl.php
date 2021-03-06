<?php
/* Smarty version 3.1.33, created on 2019-04-07 13:51:09
  from 'C:\xampp\htdocs\IT bootcamp\FinalVersion\CookBook\views\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca9e42d5d58e8_20552407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e862e9fd1449849cc7ebfeec509f8ef9fc2aa3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\IT bootcamp\\FinalVersion\\CookBook\\views\\profile.tpl',
      1 => 1554637828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca9e42d5d58e8_20552407 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/cookSpoon.png" type="image/x-icon">
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body class="bodyclass">
	<header id="header1">
			<a href="dashboard.php"><img src="images/cookbook_logo_white.png" alt="cookBook logo image" class="logo"></a>
			<div class="userset">
				<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['usernameLog']->value;?>
'>
				<?php if (!empty($_smarty_tpl->tpl_vars['userimg']->value)) {?>
				<img src="userimg/<?php echo $_smarty_tpl->tpl_vars['userimg']->value;?>
"></a>
				<?php } else { ?>
				<img src="images/user1.jpg"></a>
				<?php }?>
				<p class="imekorisnika"><?php echo $_smarty_tpl->tpl_vars['fullNameLog']->value;?>
</p>
				</a>
				<a href="logout.php"><input type="submit" name="logout" value="logout"></a>
			</div>
	</header>
	<div class="loggedHead">
		<?php if (!empty($_smarty_tpl->tpl_vars['userimg']->value)) {?>
				<img src="userimg/<?php echo $_smarty_tpl->tpl_vars['userimg']->value;?>
"></a>
				<?php } else { ?>
				<img src="images/user1.jpg"></a>
				<?php }?>
		<h1 id="userHeading"><?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
</h1>
		<?php if ($_smarty_tpl->tpl_vars['username']->value == $_smarty_tpl->tpl_vars['usernameLog']->value) {?>
		<a class="editProfile" href='editProfile.php?username=<?php echo $_smarty_tpl->tpl_vars['usernameLog']->value;?>
'>Edit profile</a>
		<?php }?>
	</div>
	
	<main id="main2">
		<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['userData']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<div class='userpost'>
				<p class="content"><?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</p>
				<?php if (!empty($_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'])) {?>
			<img src="uploaded/<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'];?>
" alt="post slika" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['username']->value == $_smarty_tpl->tpl_vars['usernameLog']->value) {?>
			<div class="edContainer">
				<a class='delete' href="deletePost.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" onclick="return confirm('Potvrdite brisanje posta')"><i class="fas fa-trash-alt"></i></a>
				<a class="edit" href='editPost.php?postText=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
&userId=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['userId'];?>
&postId=<?php echo $_smarty_tpl->tpl_vars['userData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
'>Edit post</a>
			</div>
			<?php }?>
			</div>
		<?php
}
}
?>
	</main>
    <!--java script code for preventing resubmission when refreshing the page-->
        <?php echo '<script'; ?>
>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        <?php echo '</script'; ?>
>
</body>
</html><?php }
}
