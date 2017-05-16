<?php

/**
 * @file
 * Defines a simple 2-column grid layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Curriculum (3)'),
  'icon' => 'preview.png',
  'category' => t('Ken Stimpson Layouts'),
  'theme' => 'curriculum',
  'css' => 'css/layouts/curriculum/curriculum.layout.css',
  'regions' => array(
    'curriculum_first' => t('First'),
    'curriculum_second' => t('Second'),
    'curriculum_third' => t('Third'),
    'curriculum_fourth' => t('Fourth'),
    'curriculum_fifth' => t('Fifth'),
    'curriculum_sixth' => t('Sixth'),
  ),
);