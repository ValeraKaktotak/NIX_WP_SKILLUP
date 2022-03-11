<?php

$name = get_field('name');
$secondName = get_field('second_name');
$link = get_field('link');
$photo = get_field('photo');


echo '<div class="person-item">';

if (!empty($name))
    echo '<h3 class="person-title">' . $name . '</h3>';
if (!empty($secondName))
    echo '<h3 class="person-title">' . $secondName . '</h3>';
if (!empty($link))
    echo '<div class="person-title pb20">' . $link . '</div>';
if (!empty($photo))
    echo '<div class ="w100 pb20"; >';
    echo wp_get_attachment_image($photo['ID'], 'thumbnail', null, array('class' => 'portfolio-logo aligncenter'));
    echo '</div>';
echo '</div>';

