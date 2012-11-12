<?php
/**
 * This file is part of Collaboratory (https://github.com/nextphp/collaboratory)
 *
 * @link      https://github.com/nextphp/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 nextphp (https://github.com/nextphp)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabTeam\Form\Fieldset;

use CollabTeam\Entity\Team as TeamEntity;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Form\Fieldset;
use Zend\Form\Element\Collection;
use Zend\Form\Element\MultiCheckbox;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;

class TeamFieldset extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('team');

        $this->setHydrator(new ClassMethodsHydrator(false));

        $name = new Text('name');
        $name->setLabel('Team name');
        $this->add($name);

        $description = new Textarea();
        $description->setName('description');
        $description->setLabel('Description');
        $this->add($description);

        $permissions = new MultiCheckbox();
        $permissions->setName('permissions');
        $permissions->setValueOptions(array(
            'Can create teams',
            'Can delete teams',
            'Can create projects',
            'Can delete projects',
            'Can create issues',
            'Can delete issues',
        ));
        $this->add($permissions);

        $members = new Collection();
        $members->setName('members');
        $members->setLabel('Members');
        $members->setAllowAdd(true);
        $members->setShouldCreateTemplate(true);
        $members->setTargetElement(array(
            'type' => 'CollabTeam\Form\Fieldset\TeamMemberFieldset'
        ));
        $this->add($members);
    }

    public function getInputFilterSpecification()
    {
        return array(
            'name' => array(
                'required' => true,
            ),
            'description' => array(
                'required' => true,
            ),
            'permissions' => array(
                'required' => false,
            ),
            'members' => array(
                'required' => false,
            ),
        );
    }
}
