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
    'first' => t('First'),
    'second' => t('Second'),
    'third' => t('Third'),
    'fourth' => t('Fourth'),
    'fifth' => t('Fifth'),
    'sixth' => t('Sixth'),
  ),
);