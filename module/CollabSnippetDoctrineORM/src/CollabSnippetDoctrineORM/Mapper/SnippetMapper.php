<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabSnippetDoctrineORM\Mapper;

use CollabSnippet\Entity\Snippet;
use CollabSnippet\Mapper\SnippetMapperInterface;
use Doctrine\ORM\EntityManager;

class SnippetMapper implements SnippetMapperInterface
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAll()
    {
        $repository = $this->entityManager->getRepository('CollabSnippet\Entity\Snippet');

        return $repository->findAll();
    }

    public function getById($id)
    {
        $repository = $this->entityManager->getRepository('CollabSnippet\Entity\Snippet');

        return $repository->find($id);
    }

    public function persist(Snippet $snippet)
    {
        $this->entityManager->persist($snippet);
        $this->entityManager->flush();

        return $this;
    }

    public function remove(Snippet $snippet)
    {
        $this->entityManager->remove($snippet);
        $this->entityManager->flush();

        return $this;
    }
}
