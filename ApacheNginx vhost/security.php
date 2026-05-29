<?php

$allowedFiles = [
    'index.php',
    'wp-blog-header.php',
    'wp-config-sample.php',
    'wp-links-opml.php',
    'wp-login.php',
    'wp-settings.php',
    'wp-trackback.php',
    'wp-activate.php',
    'wp-comments-post.php',
    'wp-cron.php',
    'wp-load.php',
    'wp-mail.php',
    'wp-signup.php',
    'xmlrpc.php',
    'admin-ajax.php',
    'admin-footer.php',
    'admin-functions.php',
    'admin-header.php',
    'admin-post.php',
    'admin.php',
    'async-upload.php',
    'custom-background.php',
    'custom-header.php',
    'customize.php',
    'edit-comments.php',
    'edit-form-advanced.php',
    'edit-form-comment.php',
    'edit-link-form.php',
    'edit-tag-form.php',
    'edit-tags.php',
    'edit.php',
    'export.php',
    'link-add.php',
    'link-manager.php',
    'link-parse-opml.php',
    'link.php',
    'load-scripts.php',
    'load-styles.php',
    'media-new.php',
    'media-upload.php',
    'media.php',
    'menu-header.php',
    'menu.php',
    'moderation.php',
    'ms-admin.php',
    'ms-delete-site.php',
    'ms-edit.php',
    'ms-options.php',
    'ms-sites.php',
    'ms-themes.php',
    'ms-upgrade-network.php',
    'ms-users.php',
    'my-sites.php',
    'nav-menus.php',
    'network.php',
    'options-discussion.php',
    'options-general.php',
    'options-head.php',
    'options-media.php',
    'options-permalink.php',
    'options-reading.php',
    'options-writing.php',
    'options.php',
    'plugin-editor.php',
    'plugins.php',
    'post-new.php',
    'post.php',
    'press-this.php',
    'privacy.php',
    'profile.php',
    'revision.php',
    'setup-config.php',
    'term.php',
    'themes.php',
    'upload.php',
    'user-edit.php',
    'user-new.php',
    'users.php',
    'widgets.php',
    'gatesnew.php'
];

$blockedExtensions = [
    'php',
    'php5',
    'phtml',
    'phar',
    'py',
    'exe',
    'suspected'
];

$script = strtolower($_SERVER['SCRIPT_NAME']);
$file   = basename($script);
$ext    = pathinfo($file, PATHINFO_EXTENSION);

if (
    in_array($ext, $blockedExtensions, true) &&
    !in_array($file, $allowedFiles, true)
) {
    http_response_code(403);
    exit('403 Forbidden');
}
?>