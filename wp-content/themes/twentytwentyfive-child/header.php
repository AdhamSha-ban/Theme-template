<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50'); ?>>

    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4">
            <!-- Flex container to center the menu horizontally -->
            <div class="flex justify-center">
                <?php
                wp_nav_menu([
                    'theme_location'  => 'primary',
                    'container'       => false,
                    'menu_class'      => 'flex space-x-6', // Horizontal spacing
                    'fallback_cb'     => false
                ]);
                ?>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">