<?php

namespace App\EventHandling;

use Ecotone\Modelling\Attribute\EventHandler;

/**
 * test 2
 */
class NotificationService
{
    #[EventHandler]
    public function notifyAboutNewOrder(OrderWasPlaced $event): void
    {
        echo $event->getProductName() . "\n";
    }
}
