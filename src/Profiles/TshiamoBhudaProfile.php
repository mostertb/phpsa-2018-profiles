<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class TshiamoBhudaProfile extends AbstractProfile
{

    /**
     * @return string
     */
    public function getName()
    {
        return 'Tshiamo Bhuda';
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return 'Tshiamo Bhuda is Junior Developer at MiWay. <br>'
            .'He is a fun person who likes solving problems and writing code. <br>'
            .'His days are usually filled with excessive coffee drinking and coding. <br>'
            .'He also loves music and tranquil places & enjoys sharing his skills to anyone willing to learn.';
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'tshiamobhuda';
    }

    /**
     * @return string
     */
    public function getTwitterUsername()
    {
        return 'tsitsideepbhuda';
    }

    /**
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/dd1ae5845026c61e6669b5a01aff2b54?s=80';
    }

    /**
     * @return array
     */
    public function getMaintainedProjects()
    {
        return ['tshiamobhuda/brickface' => 'https://github.com/tshiamobhuda/brickface'];
    }
}
