<?php

namespace App\Entities;

use ProAI\Datamapper\Support\Entity;
use ProAI\Datamapper\Annotations as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comment extends Entity
{
    /**
     * @ORM\Id
     * @ORM\AutoIncrement
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Relation(type="belongsTo", relatedEntity="App\Entities\User")
     */
    protected $user;
}
