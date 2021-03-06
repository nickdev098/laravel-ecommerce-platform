<?php

namespace Corals\User\Communication\Facades;

use Corals\User\Communication\Models\NotificationTemplate;
use Illuminate\Support\Facades\Facade;


/**
 * @method static addEvent($name, $friendlyName, $notificationClass, $title = '', $body = [])
 * @method static getEventsList();
 * @method static insertNewEventsToDatabase();
 * @method static getEventByName($name);
 * @method static getNotificationParametersDescription(NotificationTemplate $notificationTemplate);
 *
 * Class CoralsNotification
 * @package Corals\User\Communication\Facades
 */
class CoralsNotification extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return \Corals\User\Communication\Classes\CoralsNotification::class;
    }
}