<?php
/**
 * This file is part of Collaboratory (https://github.com/pixelpolishers/collaboratory)
 *
 * @link      https://github.com/pixelpolishers/collaboratory for the canonical source repository
 * @copyright Copyright (c) 2012 Pixel Polishers (https://github.com/pixelpolishers)
 * @license   For the full copyright and license information, view the LICENSE file.
 * @package   Collaboratory
 */

namespace CollabScm\Entity;

use CollabProject\Entity\Project;

class Repository
{
    /**
     * The id of the repository.
     *
     * @var int
     */
    private $id;

    /**
     * The name of the repository.
     *
     * @var string
     */
    private $name;

    /**
     * The previous name of the repository.
     *
     * @var string
     */
    private $previousName;

    /**
     * The description of the repository.
     *
     * @var string
     */
    private $description;

    /**
     * The type of the repository (e.g. subversion or git).
     *
     * @var string
     */
    private $type;

    /**
     * The project to which the repository belongs.
     *
     * @var Project
     */
    private $project;

    /**
     * Gets the id of the repository.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id of the repository.
     *
     * @param int $id The id of the repository.
     * @return Repository
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets the name of the repository.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the previous name of the repository.
     *
     * @return string
     */
    public function getPreviousName()
    {
        return $this->previousName;
    }

    /**
     * Sets the name of the repository.
     *
     * @param string $name The name of the repository.
     * @return Repository
     */
    public function setName($name)
    {
        $this->previousName = $this->name;
        $this->name = $name;
        return $this;
    }

    /**
     * Gets the description of the repository.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description of the repository.
     *
     * @param string $description The description of the repository.
     * @return Repository
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets the type of the repository.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type of the repository.
     *
     * @param string $type The type of the repository.
     * @return Repository
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets the project of the repository.
     *
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Sets the project of the repository.
     *
     * @param null|Project $project The project to set.
     * @return Repository
     */
    public function setProject(Project $project = null)
    {
        $this->project = $project;
        return $this;
    }
}
