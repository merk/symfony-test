<?php

namespace Test\AppBundle\Entity;

use FOS\CommentBundle\Entity\Comment as BaseComment;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test_comment")
 * @author Tim Nagel <tim@nagel.com.au>
 */
class Comment extends BaseComment
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
     * The comments parent.
     *
     * @orm:ManyToOne(targetEntity="Comment", inversedBy="children")
     * @var Comment
     */
    protected $parent;

    /**
     * The comment children.
     *
     * @orm:OneToMany(targetEntity="Comment", mappedBy="parent")
     * @var array of Comment
     */
    protected $children;
}