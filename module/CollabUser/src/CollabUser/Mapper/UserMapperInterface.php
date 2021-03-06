<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabUser\Mapper;

use CollabUser\Entity\User;

interface UserMapperInterface
{
    public function findAjax($query);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function persist(User $user);
    public function remove(User $user);
}
