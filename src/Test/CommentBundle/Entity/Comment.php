<?php

namespace Test\CommentBundle\Entity;

use FOS\CommentBundle\Entity\Comment as BaseComment;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test_comment")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 * @author Tim Nagel <tim@nagel.com.au>
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="Test\CommentBundle\Entity\Thread")
     * @ORM\JoinColumn(name="thread_identifier", referencedColumnName="identifier")
     */
    protected $thread;

    /**
     * @return Thread
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * @param Thread $thread
     * @return null
     */
    public function setThread(Thread $thread)
    {
        $this->thread = $thread;
    }
}