<?php

namespace Knp\Bundle\KnpBundlesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * An Open Source Bundle living on GitHub
 *
 * @ORM\Entity(repositoryClass="Knp\Bundle\KnpBundlesBundle\Entity\BundleRepository")
 */
class Bundle extends Repo
{
    /**
     * Get the first part of the name, without Bundle
     *
     * @return string
     */
    public function getShortName()
    {
        return preg_replace('/^(.+)Bundle$/', '$1', $this->getName());
    }
}
