<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabTeam\View\Helper;

use CollabTeam\Entity\Team;
use CollabUser\View\Helper\AbstractUserAccess;

class CanRemoveTeam extends AbstractUserAccess
{
    public function __invoke(Team $team)
    {
        return !$team->isRoot() && $this->isGranted('team_delete');
    }
}
