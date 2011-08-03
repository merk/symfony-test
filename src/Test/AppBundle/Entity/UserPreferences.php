<?php

namespace Test\AppBundle\Entity;

use merk\NotificationBundle\Entity\UserPreferences as BasePreferences;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test_notification_userprefs")
 * @author Tim Nagel <tim@nagel.com.au>
 */
class UserPreferences extends BasePreferences
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
     * The user this preference object belongs to.
     *
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     */
    protected $user;
}