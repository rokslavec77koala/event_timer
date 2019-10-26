<?php

namespace Drupal\event_timer\Services;

class EventTime
{
    public function __construct()
    {
        
    }
    
    public function getEventTimerString($event_date_string)
    {
        $now_time = time();
        $event_time = strtotime($event_date_string);
        
        $date_diff = $event_time - $now_time;
        $date_diff_days = round($date_diff / (60*60*24));
        
        if ($date_diff_days > 0) { // Event in future
            return $date_diff_days.' days left until event starts';
        } elseif ($date_diff_days == 0) {
            return 'This event is happening today';
        } else {
            return 'This event already passed';
        }
    }
}