<?php 
use \Magento\Framework\Component\ComponentRegistrar; 
ComponentRegistrar::register(
    ComponentRegistrar::THEME,
    'frontend/Outside/new_theme',
    __DIR__
); 