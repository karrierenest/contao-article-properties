<?php

$GLOBALS['TL_DCA']['tl_article']['fields']['container'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['container'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => System::getContainer()->getParameter('article.containers'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['container'],
    'eval' => array(
        'includeBlankOption' => false,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['section_padding'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['section_padding'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => System::getContainer()->getParameter('article.paddings'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['section_padding'],
    'eval' => array(
        'includeBlankOption' => false,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_color'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_color'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => System::getContainer()->getParameter('article.background-colors'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['lcolors'],
    'eval' => array(
        'includeBlankOption' => false,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['background_picture'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_picture'],
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => array(
        'fieldType' => 'radio',
        'files' => true,
        'filesOnly' => true,
        'extensions' => $GLOBALS['TL_CONFIG']['validImageTypes'],
        'tl_class' => 'w50'
    ),
    'sql' => (version_compare(VERSION, '3.2', '<')) ? "varchar(255) NOT NULL default ''" : "binary(16) NULL"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['background_size'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['background_size'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => System::getContainer()->getParameter('article.background-sizes'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['lcolors'],
    'eval' => array(
        'includeBlankOption' => false,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['text_color'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['text_color'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => System::getContainer()->getParameter('article.text-colors'),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['styles'],
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'] = array('protected', 'published');
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace(
    'keywords;',
    'keywords;{article_properties:hide},container,section_padding,background_color,background_picture,background_size,text_color;',
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);
