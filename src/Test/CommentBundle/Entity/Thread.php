<?php

namespace Test\CommentBundle\Entity;

use FOS\CommentBundle\Entity\Thread as BaseThread;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test_thread")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 * @author Tim Nagel <tim@nagel.com.au>
 */
class Thread extends BaseThread
{

}
