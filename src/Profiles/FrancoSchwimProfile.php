<?php

namespace mostertb\PHPSA2018Profiles\Profiles;


class FrancoSchwimProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Franco Schwim';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return "I'm a guy that doesn't talk a lot.<br />" .
                "I listen and observe.<br />" .
                "This is the first PHP I have ever written. <br />" ;
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'http://images6.fanpop.com/image/photos/38000000/Commander-Shepard-mass-effect-3-38073002-1100-750.jpg';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'Technaur';
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
        return array();
    }

    public function getTwitterUsername()
    {
        return '@FrancoSchwim';
    }
}