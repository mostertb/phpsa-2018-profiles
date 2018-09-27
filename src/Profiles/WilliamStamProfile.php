<?php

namespace mostertb\PHPSA2018Profiles\Profiles;


class BradMostertProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Brad Mostert';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Brad is a senior developer at Afrihost and a Design Patterns acolyte.<br>'.
            'He feeds exclusively on bandwidth and coffee, likes to herd servers (you know.. like cattle), does some Open Source '.
            'and helps organise the Johannesburg PHP Meetup. <br>'.
            'All user input submitted to him will be ‘> /dev/mull’ for consideration. <br>'.'
            Brad also likes long walks on the beach and craft beer.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/9ff2a97e7faf3529f1b78f1f737ebca0?s=80';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'mostertb';
    }

    /**
     * Optional function that should return an array of OpenSource projects maintained by this person.
     * The index should contain the name of the project and the value should be a url to the project's homepage (typically
     * a GitHub page)
     *
     * @return array
     */
    public function getMaintainedProjects()
    {
        return array(
            'Afrihost/BaseCommandBundle' => 'https://github.com/afrihost/BaseCommandBundle',
            'mostertb/phpsa-2017-profiles' => 'https://github.com/mostertb/phpsa-2017-profiles'
        );
    }

    /**
     * Optional function that should return an array of OpenSource projects to which this person has contributed (or at least
     * recommends). The index should contain the name of the project and the value should be a url to the project's
     * homepage (typically a GitHub page)
     *
     * @return array
     */
    public function getInvolvedProjects()
    {
        return array(
            'coduo/php-humanizer' => 'https://github.com/coduo/php-humanizer/tree/master/src/Coduo/PHPHumanizer',
            'daleattree/csvfilehandler' => 'https://github.com/daleattree/csvfilehandler',
            'afrihost/swarm-process' => 'https://github.com/afrihost/swarm-process'
        );
    }

    public function getTwitterUsername()
    {
        return '@bsinkwa';
    }
}