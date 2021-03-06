<?php

namespace Knp\Bundle\KnpBundlesBundle\Detector;

class Project extends Detector
{
    public function __construct()
    {
        $criterion = new Criterion\Collection(
            Criterion\Collection::STRATEGY_ANY,
            array(
                new Criterion\SymfonyKernel(),
                new Criterion\SymfonySubmodule()
            )
        );

        parent::__construct($criterion);
    }
}
