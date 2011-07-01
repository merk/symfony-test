<?php

namespace Test\AppBundle\Entity;

use merk\NotificationBundle\Entity\Notification as BaseNotification;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test_notification")
 * @author Tim Nagel <tim@nagel.com.au>
 */
class Notification extends BaseNotification
{
    /**
     * Comment id.
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * The user this notification belongs to.
     *
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     */
    protected $user;
}