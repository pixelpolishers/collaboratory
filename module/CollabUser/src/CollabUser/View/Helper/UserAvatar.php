<?php
/**
 * This file is part of Collaboratory (https://github.com/nextphp/collaboratory)
 *
 * @link      https://github.com/nextphp/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 nextphp (https://github.com/nextphp)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabUser\View\Helper;

use CollabUser\Entity\UserInterface;
use Zend\View\Helper\AbstractHelper;

class UserAvatar extends AbstractHelper
{
    public function __invoke(UserInterface $user = null)
    {
        $view = $this->getView();

        return $view->gravatar('w.tamboer@polderknowledge.nl')->setImgSize(16);
    }
}