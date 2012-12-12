<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabUser\Form;

use Zend\Form\Element\Password;
use Zend\Form\Element\Submit;
use Zend\Form\Element\Text;
use Zend\Form\Form;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;

class RequestPasswordForm extends Form
{
    public function __construct()
    {
        parent::__construct('requestPassword');

        $inputFilter = new InputFilter();

        $this->setAttribute('method', 'post')
             ->setHydrator(new ClassMethodsHydrator(false))
             ->setInputFilter($inputFilter);

        $identity = new Text('identity');
        $identity->setLabel('E-mail');
        $this->add($identity);

        $identityInput = new Input();
        $identityInput->setName($identity->getName());
        $identityInput->setRequired(true);
        $identityInput->getValidatorChain()->addByName('EmailAddress');
        $inputFilter->add($identityInput);

        $submitButton = new Submit();
        $submitButton->setName('request');
        $submitButton->setValue('Request');
        $this->add($submitButton);
    }
}
