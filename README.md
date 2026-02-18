# Drupal 7 Demo Table Module

A simple **Drupal 7** demonstration module that:

- Creates a custom database table during installation (`demo_items`)
- Populates the table with data
- Provides a page (`/demo-data`) showing all records in a HTML table
- Uses a custom theme hook + `.tpl.php` template for rendering
- Demonstrates basic usage of `db_select()`, `theme('table')`, `hook_menu()`, `hook_theme()`, etc.

## Requirements

- Drupal 7.x
- PHP 5.3+ (as required by Drupal 7)

## Installation

1. Download or clone this repository
2. Place the folder in:
   - `sites/all/modules/custom`  

3. Enable the module at `/admin/modules`

