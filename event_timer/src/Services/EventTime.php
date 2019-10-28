<?php

namespace Drupal\event_timer\Services;

use Drupal\Core\Datetime\DrupalDateTime;

class EventTime
{
    public function __construct()
    {
        
    }
    
    public function getEventTimerString($event_datetime_string)
    {
        $event_datetime_timezone = new DrupalDateTime($event_datetime_string, 'UTC');
        $event_datetime_timezone->setTimezone(new \DateTimeZone(drupal_get_user_timezone()));
        
        $today = strtotime(date('Y-m-d'));
        $event_date = strtotime($event_datetime_timezone);
        
        $date_diff = $event_date - $today;
        $date_diff_days = floor($date_diff / (60*60*24));
        
        if ($date_diff_days > 1) {
            return $date_diff_days.' days left until event starts';
        } elseif ($date_diff_days == 1) {
            return '1 day left until event starts';
        } elseif ($date_diff_days == 0) {
            return 'This event is happening today';
        } else {
            return 'This event already passed';
        }
    }
}