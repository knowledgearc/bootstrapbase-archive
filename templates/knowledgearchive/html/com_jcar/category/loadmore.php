<?php
/**
 * @package     JCar.Component
 * @subpackage  Site
 *
 * @copyright   Copyright (C) 2015-2016 KnowledgeArc Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

JHtml::_('bootstrap.framework');
JHtml::script('jui/mustache.min.js', false, true);
JHtml::script('jui/jcar.js', false, true);

$LOADING_BUTTON = JText::_('TPL_KNOWLEDGEARCHIVE_LOADING_BUTTON');

JFactory::getDocument()->addScriptDeclaration(
<<<JS
(function ($) {
$.translations = {'LOADING_BUTTON':"{$LOADING_BUTTON}"};
})(jQuery);
JS
);

$nextPage = $this->item->pagination->getData()->next->link;
if ($nextPage) :
    $url = new JUri($nextPage);
    $url->setVar("format", "json");
    $nextPage = (string)$url;
endif;
?>

<section id="jcarCategory">
    <header>
        <h1><?php echo $this->item->name; ?></h1>
        <div><?php echo $this->item->description; ?></div>
    </header>

    <articles id="jcar-lists">

        <?php foreach ($this->item->items as $item) : ?>

        <h2>
            <a href="<?php echo JCarHelperRoute::getItemRoute($item->id); ?>">
                <?php echo $item->name; ?></a></h2>

        <?php endforeach; ?>

        <!--Mustache Template Starts-->
        <template id="jcarListTemplate" style="backround:yellow;">
             {{#items}}
            <h2><a href="{{link}}">{{name}}</a></h2>
             {{/items}}
        </template>
        <!--Mustache Template Ends-->
        <!--Insert Mustache template into html page-->
        <div id="jcarListWrapper"></div>

    </articles>
    <footer>

        <?php if ($nextPage) : ?>

        <button
            class="jcar-load-more"
            data-url="<?php echo $nextPage; ?>">
            <?php echo JText::_('TPL_KNOWLEDGEARCHIVE_LOADMORE_BUTTON'); ?>
        </button>
        <?php endif; ?>

    </footer>
</section>
