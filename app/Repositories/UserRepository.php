<?php

namespace App\Repositories;

use ProAI\Datamapper\EntityManager;
use ProAI\Datamapper\Repositories\EntityRepository;

class UserRepository extends EntityRepository
{
    public function __construct(EntityManager $em, $class)
    {
        parent::__construct($em, $class);
    }
}
