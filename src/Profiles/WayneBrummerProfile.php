<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class WayneBrummerProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Wayne Brummer';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Wayne Brummer is a software engineer for Qlink Holdings and Wants to bring Open Source 
to his company. :) He needs this to happend ofr all the smiles.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://avatars3.githubusercontent.com/u/4981767?s=460&v=4';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'WayneBrummer';
    }

    /**
     * @return string
     */
    public function getTwitterUsername()
    {
        return '@WayneBrummer';
    }
}
