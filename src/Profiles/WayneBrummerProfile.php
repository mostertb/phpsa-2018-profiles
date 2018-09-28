<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class WilliamStamProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'William Stam';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'William managed to get a job as a senior PHP developer at Munsoft, Munsoft being the ,brbiggest FMS system in Southern Africa.<br>'.
            'He started his career with community publishers keeping them on track with the "big boys".<br>'.
            '2018 is Williams \'s first PHP confrence';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/'.md5('awstam@gmail.com').'?s=80';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'WilliamStam';
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
            'Newspaper Management Software' => 'https://github.com/Impreshin/Impreshin',
            'Updater Script' => 'https://github.com/WilliamStam/Updater',
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

        );
    }

    public function getTwitterUsername()
    {
        return '@awstam';
    }
}
