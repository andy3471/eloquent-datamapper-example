<?php

namespace App\Repositories;

use ProAI\Datamapper\EntityManager;

class UserRepository
{
    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    /**
     * @return array
     */
    public function all() {
        return $this->em->entity('App\Entities\User')->all();
    }
}
