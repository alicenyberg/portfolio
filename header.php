<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.x/dist/typography.min.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="container prose">
    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
      <div class="mb-2 sm:mb-0">
        <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
      </div>
      <div>
        <?php $menuItems =  wp_get_nav_menu_items('menu'); ?>
        <?php foreach ($menuItems as $item) : ?>
          <a href="<?= $item->url ?>" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2"><?= $item->title ?></a>
        <?php endforeach; ?>
      </div>
    </nav>