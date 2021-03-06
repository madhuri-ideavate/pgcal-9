<?php

namespace Drupal\commerce_migrate_ubercart\Plugin\migrate\source\uc7;

use Drupal\field\Plugin\migrate\source\d7\FieldInstance;
use Drupal\field\Plugin\migrate\source\d7\ViewMode as CoreViewMode;

/**
 * The view mode source class.
 *
 * @MigrateSource(
 *   id = "uc7_view_mode",
 *   source_module = "field"
 * )
 */
class ViewMode extends CoreViewMode {

  use ProductTypeTrait;

  /**
   * {@inheritdoc}
   */
  protected function initializeIterator() {
    $instances = FieldInstance::initializeIterator();
    $this->productTypes = $this->getProductTypes();
    $rows = [];

    foreach ($instances->getArrayCopy() as $instance) {
      $data = unserialize($instance['data']);
      foreach (array_keys($data['display']) as $view_mode) {
        $key = $instance['entity_type'] . '.' . $view_mode;
        if (in_array($instance['bundle'], $this->productTypes)) {
          $key = 'commerce_product .' . $view_mode;
          $instance['entity_type'] = 'commerce_product';
        }
        $rows[$key] = array_merge($instance, [
          'view_mode' => $view_mode,
        ]);
      }
    }

    return new \ArrayIterator($rows);
  }

}
