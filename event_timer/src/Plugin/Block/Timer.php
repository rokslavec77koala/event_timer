<?php

/**
 * @file
 * Contains \Drupal\event_timer\Plugin\Block\Timer.
 */

namespace Drupal\event_timer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Timer Block
 *
 * @Block(
 *   id = "timer_block",
 *   admin_label = @Translation("Event timer"),
 *   category = @Translation("Custom block"),
 * )
 */
class Timer extends BlockBase
{
    /**
    * {@inheritdoc}
    */
    public function build()
    {
        return array(
            '#markup' => $this->t('Hello, World!'),
            );
    }
}