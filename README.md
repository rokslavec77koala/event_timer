
# Event timer

A sidebar block for Drupal that displays how many days are left until an event.

## Prerequisites

Drupal 8.x

## Installing

1. Copy the code in your Drupal /modules directory
2. Enable the module in Drupal Admin -> Extend
3. If you're using a custom theme (not bartik theme) you need to add the block to the sidebar manually in Admin -> Structure -> Block layout

## Author

* **Rok Slavec**

## Future improvemets

* Add block to the sidebar of any theme automatically
* Restrict block configuration by content type (event)
* Add alternative (more secure) way to get node data in \Plugin\Block\Timer.php