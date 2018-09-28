<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class GerhardNiemandProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Gerhard Niemand';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Gerhard is a junior PHP developer at Afrihost, mainly responsible for adding bugs into a well established application';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://en.gravatar.com/userimage/131157854/9f56b500d6df50216cd950243993b871.jpeg';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'gerhardniemand';
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
        return array();
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
            'daleattree/csvfilehandler' => 'https://github.com/daleattree/csvfilehandler',
            'Afrihost/BaseCommandBundle' => 'https://github.com/afrihost/BaseCommandBundle',
            'afrihost/swarm-process' => 'https://github.com/afrihost/swarm-process'
        );
    }

    public function getTwitterUsername()
    {
        return '@NiemandG';
    }
}
