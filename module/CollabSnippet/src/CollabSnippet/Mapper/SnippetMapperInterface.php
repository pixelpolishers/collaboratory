<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabSnippet\Mapper;

use CollabSnippet\Entity\Snippet;

interface SnippetMapperInterface
{
    public function getAll();
    public function getById($id);
    public function persist(Snippet $team);
    public function remove(Snippet $team);
}
