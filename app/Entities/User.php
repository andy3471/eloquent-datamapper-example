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
}
