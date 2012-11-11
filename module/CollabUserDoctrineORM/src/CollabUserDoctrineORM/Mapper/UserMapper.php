<?php
/**
 * This file is part of Collaboratory (https://github.com/nextphp/collaboratory)
 *
 * @link      https://github.com/nextphp/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 nextphp (https://github.com/nextphp)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabUserDoctrineORM\Mapper;

use CollabUser\Entity\User;
use CollabUser\Mapper\UserMapperInterface;
use Doctrine\ORM\EntityManager;

class UserMapper implements UserMapperInterface
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findByEmail($email)
    {
        $repository = $this->entityManager->getRepository('CollabUser\Entity\User');

        return $repository->findOneBy(array(
            'identity' => $email
        ));
    }

    public function findById($id)
    {
        $repository = $this->entityManager->getRepository('CollabUser\Entity\User');

        return $repository->find($id);
    }

    public function persist(User $user)
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function remove(User $user)
    {
        $this->entityManager->remove($user);
        $this->entityManager->flush();
    }
}