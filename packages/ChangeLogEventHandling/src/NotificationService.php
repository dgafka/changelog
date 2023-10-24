<?php

namespace App\EventHandling;

use Ecotone\Modelling\Attribute\EventHandler;

/**
 * test 0.10.0-rc.9
 */
class NotificationService
{
    #[EventHandler]
    public function notifyAboutNewOrder(OrderWasPlaced $event): void
    {
        echo $event->getProductName() . "\n";
    }
}
