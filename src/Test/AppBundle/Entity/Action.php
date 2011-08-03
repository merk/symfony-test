<?php

namespace Test\AppBundle\Entity;

use merk\NotificationBundle\Entity\Action as BaseAction;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test_notification")
 * @author Tim Nagel <tim@nagel.com.au>
 */
class Action extends BaseAction
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
     * The target to be notified
     *
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     */
    protected $target;

    /**
     * The user who initiated this action.
     *
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     */
    protected $actor;
}