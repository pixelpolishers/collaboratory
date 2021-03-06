<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabApplication\Form;

use Zend\Form\Element\Submit;
use Zend\Form\Form;

class DeleteForm extends Form
{
    public function __construct()
    {
        parent::__construct('delete');

        $this->setAttribute('method', 'post');

        $submitButton = new Submit();
        $submitButton->setName('yes');
        $submitButton->setLabel('Yes');
        $submitButton->setValue('Yes');
        $this->add($submitButton);

        $submitButton = new Submit();
        $submitButton->setName('no');
        $submitButton->setLabel('No');
        $submitButton->setValue('No');
        $this->add($submitButton);
    }
}
