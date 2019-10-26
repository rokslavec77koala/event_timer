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
        $node = \Drupal::routeMatch()->getParameter('node');
        if ($node instanceof \Drupal\node\NodeInterface) {
            $type_name = $node->getType();
            if ($type_name == 'event') {
                $event_date_string = $node->get('field_event_date')->value;
        
                $service = \Drupal::service('event_timer.event_date');
                $event_timer_string = $service->getEventTimerString($event_date_string);

                return [
                    '#markup' => $event_timer_string,
                ];
            }
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function getCacheMaxAge() {
        return 0;
    }
}