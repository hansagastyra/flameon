<?php

/* 
 * To change readmore text
 */

function new_excerpt_more($more) {
   global $post;
   return ' <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');