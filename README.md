# Laravel Balde example

## Aim

To demonstrate a simple usage of Blade templates with Laravel.

## Created files

### Manually

The two Blade files must be created manually in the resources/views directory.
**layout.blade.php**

This layout will be the 'root' of all other layouts. It contains the page
structure. In this example, only a page title is given and the page content
is deligated to the 'content' section from the child layout.

**index.blade.layout**

This layout will extend the 'layout' layout by defining the 'content' section.
In this example, this layout display two informations :

1. The $title in a h1 markup,
2. The $message in a p markup.

### Using the Artisan console

The MainController was created using the command :

`php artisan make:controller MainController`

## Modifications

### The 'index' function in MainController

This function create two variables and pass them to the view.

### The route to MainController in the web.php file (routes)

The default route is replaced by a new one. This last points to the MainController index method.

## That's all

By running :

`php artisan serve`

You must see the contentof the two variables created in MainController displayed on the web page.