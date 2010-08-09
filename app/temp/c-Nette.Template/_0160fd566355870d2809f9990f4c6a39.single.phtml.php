<?php //netteCache[01]000242a:2:{s:4:"time";s:21:"0.35634100 1281344910";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:72:"C:\wamp\www\blogtut\document_root/../app/templates/Homepage/single.phtml";i:2;i:1281344902;}}}?><?php
// file …/templates/Homepage/single.phtml
//

$_cb = Nette\Templates\LatteMacros::initRuntime($template, NULL, 'f2bb1a5208'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbb3523f9600_content')) { function _cbbb3523f9600_content($_args) { extract($_args)
?>
<a href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($presenter->link("default")) ?>">&lt;&lt; home </a>
<div class="post">
    <h1><?php echo Nette\Templates\TemplateHelpers::escapeHtml($post['title']) ?></h1>
    <small>Přidáno <?php echo Nette\Templates\TemplateHelpers::escapeHtml($template->date($post['date'])) ?></small>
    <p><?php echo Nette\Templates\TemplateHelpers::escapeHtml($post['body']) ?></p>
</div>

<h3>Komentáře:</h3>
<div id="comments">
<?php foreach ($iterator = $_cb->its[] = new Nette\SmartCachingIterator($comments) as $comment): ?>
    <div class="commment">
        <p><?php echo Nette\Templates\TemplateHelpers::escapeHtml($comment['body']) ?></p>
        <small><?php echo Nette\Templates\TemplateHelpers::escapeHtml($comment['author']) ?>, <?php echo Nette\Templates\TemplateHelpers::escapeHtml($template->date($comment['date'])) ?></small>
        <hr>
    </div>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
</div>
<?php $control->getWidget("commentForm")->render() ;
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (Nette\Templates\SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); Nette\Templates\LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
