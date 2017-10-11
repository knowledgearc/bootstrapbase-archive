<?php
/**
 * The DSpace template layout provides a DSpace-specific display of
 * communities.
 *
 * @package     JCar.Component
 * @subpackage  Site
 *
 * @copyright   Copyright (C) 2015-2016 KnowledgeArc Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>

<section id="jcarCategories">
    <?php if ($this->params->get('show_page_heading')) : ?>
    <header>
        <h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
    <header>
    <?php endif; ?>

    <?php echo $this->loadTemplate('communities'); ?>
</section>
