<?php

// Modified Walker Class to Output Clean Menu Structure (No Bootstrap)
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_Menu
{
  private $current_item;

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu\">\n";
  }

  function end_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    // Add "menu-item-has-children" if it has submenus
    if ($args->walker->has_children) {
      $classes[] = 'menu-item-has-children';
    }

    $class_names = join(' ', array_filter($classes));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

    $id_attr = 'menu-item-' . $item->ID;
    $id_attr = strlen($id_attr) ? ' id="' . esc_attr($id_attr) . '"' : '';

    $output .= $indent . '<li' . $id_attr . $class_names . '>';

    $attributes  = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn)        ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url)        ? ' href="' . esc_attr($item->url) . '"' : '';

    $item_output  = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }

  function end_el(&$output, $item, $depth = 0, $args = null)
  {
    $output .= "</li>\n";
  }
}
