<?php

namespace App\Subscribers;

use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Entity\OrderItem;
use Symfony\Component\Security\Core\Security;

class OrderItemSubscriber implements EventSubscriberInterface
{
    /**
     * @var Security
     */

    private $securtiy;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setUser']
        ];
    }

    public function setUser(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if ($entity instanceof OrderItem) {
            $entity->setUser($this->security->getUser());
        }
    }
}