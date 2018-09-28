<?php

namespace mostertb\PHPSA2018Profiles\Profiles;


class MichaelGoodenProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Michael Gooden';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'bio goes here';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        throw new \Exception('Implement this!');
        return '';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'michaelgooden';
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
            'michaelgooden/mdg-money-doctrine' => 'https://github.com/MichaelGooden/mdg-money-doctrine',
            'michaelgooden/phpstan-zend-mvc' => 'https://github.com/MichaelGooden/phpstan-zend-mvc',
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
            'dasprid/formidable' => 'https://github.com/DASPRiD/Formidable',
        );
    }
}
