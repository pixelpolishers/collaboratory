<?php
/**
 * This file is part of Collaboratory (https://github.com/nextphp/collaboratory)
 *
 * @link      https://github.com/nextphp/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 nextphp (https://github.com/nextphp)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace Application\Entity;

class SshKey
{
    private $id;
    private $userId;
    private $title;
    private $content;
    private $createdOn;
    private $expiresOn;
}