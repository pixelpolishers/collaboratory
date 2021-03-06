<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabScmDoctrineORM\Mapper;

use CollabScm\Entity\Repository;
use CollabScm\Mapper\RepositoryMapperInterface;
use Doctrine\ORM\EntityManager;

class RepositoryMapper implements RepositoryMapperInterface
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findBy(array $criteria)
	{
        $repository = $this->entityManager->getRepository('CollabScm\Entity\Repository');

        return $repository->findBy($criteria);
	}

    public function findOneBy(array $criteria)
	{
        $repository = $this->entityManager->getRepository('CollabScm\Entity\Repository');

        return $repository->findOneBy($criteria);
	}

    public function persist(Repository $repository)
    {
        $this->entityManager->persist($repository);
        $this->entityManager->flush();

        return $this;
    }

    public function remove(Repository $repository)
    {
        $this->entityManager->remove($repository);
        $this->entityManager->flush();

        return $this;
    }
}
