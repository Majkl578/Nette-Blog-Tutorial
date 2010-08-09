<?php //netteCache[01]000243a:2:{s:4:"time";s:21:"0.81538100 1281344835";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:73:"C:\wamp\www\blogtut\document_root/../app/templates/Homepage/default.phtml";i:2;i:1281344828;}}}?><?php
// file …/templates/Homepage/default.phtml
//

$_cb = Nette\Templates\LatteMacros::initRuntime($template, NULL, 'd79e16ec2e'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbed959b6517_content')) { function _cbbed959b6517_content($_args) { extract($_args)
?>
<h1>Můj blogísek</h1>
<div id="posts">
<?php foreach ($iterator = $_cb->its[] = new Nette\SmartCachingIterator($posts) as $post): ?>
    <div class="post">
        <h3><?php echo Nette\Templates\TemplateHelpers::escapeHtml($post['title']) ?></h3>
        <small>Přidáno <?php echo Nette\Templates\TemplateHelpers::escapeHtml($template->date($post['date'])) ?></small>
        <p><?php echo Nette\Templates\TemplateHelpers::escapeHtml($template->truncate($post['body'], 300)) ?></p>
        <a href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($presenter->link("single", array($post['id']))) ?>">Více...</a>
    </div>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
</div><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (Nette\Templates\SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); Nette\Templates\LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
