<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity **/
class Post
{
    /** @Id @GeneratedValue @Column(type="integer") **/
    protected $id;
    /** @Column(type="string") **/
    protected $title;
    /** @Column(type="text") **/
    protected $body;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }


	public function getBody()
    {
        return $this->title;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }


	/**
     * @ManyToOne(targetEntity="User")
     **/
    protected $author;

    /**
     * @OneToMany(targetEntity="Comment", mappedBy="post", cascade={"persist"})
     **/
    protected $comments;

    public function __construct(User $author)
    {
        $this->author = $author;
        $this->posts = new ArrayCollection();
    }

    public function addComment($text)
    {
        $this->comments[] = new Comment($this, $text);
    }

}