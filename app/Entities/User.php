<?php

namespace App\Entities;

use ProAI\Datamapper\Support\Entity;
use ProAI\Datamapper\Annotations as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends Entity
{
    /**
     * @ORM\Id
     * @ORM\AutoIncrement
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Relation(type="hasMany", relatedEntity="App\Entities\Comment")
     */
    protected $comments;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments): void
    {
        $this->comments = $comments;
    }


}
