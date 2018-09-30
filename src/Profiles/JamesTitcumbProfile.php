<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class JamesTitcumbProfile extends AbstractProfile
{

    /**
     * @return string
     */
    public function getName() : string
    {
        return 'James Titcumb';
    }

    /**
     * @return string
     */
    public function getBiography() : string
    {
        return 'James is a consultant, trainer and developer at Roave. He is a prolific contributor to various open ' .
            'source projects and is a Zend Certified Engineer. He also founded the UK based PHP Hampshire user group ' .
            'and PHP South Coast conference.';
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function getGitHubUsername() : string
    {
        return 'asgrim';
    }

    /**
     * @return string
     */
    public function getTwitterUsername() : string
    {
        return 'asgrim';
    }

    /**
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://en.gravatar.com/userimage/3971450/c7e8b0783276b2390ab4109bb13cbaf7.png?size=80';
    }

    /**
     * @return array
     */
    public function getMaintainedProjects()
    {
        return [
            'Zend Framework' => 'https://github.com/zendframework/zendframework',
            'Zend Expressive' => 'https://github.com/zendframework/zend-expressive',
            'Browser Capabilities Project' => 'https://github.com/browscap/browscap',
            'Roave Better Reflection' => 'https://github.com/roave/BetterReflection',
            'Roave Backward Compatibility Checker' => 'https://github.com/roave/BackwardCompatibilityCheck',
            'Roave Security Advisories' => 'https://github.com/roave/security-advisories',
            'Year as a service' => 'https://github.com/asgrim/year',
            'OFX Parser' => 'https://github.com/asgrim/ofxparser',
            'container-interop-doctrine' => 'https://github.com/dasprid/container-interop-doctrine',
        ];
    }
}
