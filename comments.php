<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Ne pas t&eacute;l&eacute;charger cette page directement, merci !');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Prot&eacute;g&eacute; par mot de passe'); ?></h2>
<p><?php _e('Entrer le mot de passe pour voir les commentaires'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<!--<div class="col-md-12 comment">
	<h4>Maxime Sanmartin</h4>
	<div>
		<img src="img/max.jpg" class="img-circle">
		<p>Très bon article ! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>-->

<div class="col-md-12 comment">
<?php if ($comments) : ?>

<?php foreach ($comments as $comment) : ?>

<div class="commentmetadata">
<strong><?php comment_author_link() ?></strong>, <?php _e('le'); ?> <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('j F, Y') ?> <?php _e('&agrave;');?> <?php comment_time() ?></a> <?php edit_comment_link('Modifier le commentaire','',''); ?>
 		<?php if ($comment->comment_approved == '0') : ?>
			<b style="color : red"><?php _e('En cours de mod&eacute;ration'); ?></b>
 		<?php endif; ?>
</div>
<div>
<?php 
	echo get_avatar(get_comment_author_email(), auto, null, null, $args=array('class' => 'img-circle'));
	comment_text();
 ?>
</div>

<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Les commentaires sont fermŽs !</p>

	<?php endif; ?>
<?php endif; ?>
</div>

<?php if ('open' == $post->comment_status) : ?>

		<h3>Votre commentaire</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Vous devez être <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">connect&eacute;</a> pour laisser un commentaire.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="D&eacute;connex&eacute; de ce compte">D&eacute;connexion &raquo;</a></p>

<?php else : ?>

<input class="input" type="text" name="author" id="author" placeholder="Nom" value="<?php echo $comment_author; ?>"></input>
<label for="author"><small><?php if ($req) echo "*"; ?></small></label>

<input class="input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" placeholder="email (ne sera pas publi&eacute;)"></input>
<label for="email"><small> <?php if ($req) echo "*"; ?></small></label>

<input class="input" type="text" name="url" id="url" placeholder="Site Web" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />

<?php endif; ?>

<textarea class="input" name="comment" id="comment" cols="60" rows="10" tabindex="4" placeholder="Votre commentaire ici (Supporte le balisage HTML)"></textarea>
<button class="btn btn-primary" name="submit" type="submit" id="submit" tabindex="5">Envoyer</button>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>