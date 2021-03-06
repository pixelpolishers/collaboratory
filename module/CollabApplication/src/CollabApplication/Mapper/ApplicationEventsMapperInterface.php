<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabApplication\Mapper;

use CollabApplication\Entity\ApplicationEvent;

interface ApplicationEventsMapperInterface
{
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
    public function persist(ApplicationEvent $applicationEvent);
    public function remove(ApplicationEvent $applicationEvent);
}
