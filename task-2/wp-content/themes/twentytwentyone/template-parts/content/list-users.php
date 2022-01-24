<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// Get all Users
$users = get_users()
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-content'); ?>>

    <h3>Users</h3>
    <ul>
        <?php 
        // Loop through all users returned by query
        foreach ($users as $user):
            $id = $user->ID;
            $login = $user->user_login;
            $user_data = get_userdata($user->ID);
            if ($user_data->display_name) {
                $name = $user_data->display_name;
            } ?>
    
            <li>
                <h4>User:</h4>
                <ul>
                    <li>ID: <?= $id; ?></li>
                    <li>Username: <?= $login; ?></li>
                    <li>Name: <strong><?= ucfirst($name); ?></strong></li>
                </ul>
            </li>
    
        <?php endforeach; ?>
    </ul>
	
</article><!-- #post-<?php the_ID(); ?> -->
