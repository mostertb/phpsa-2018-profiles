<?php
namespace mostertb\PHPSA2018Profiles\Profiles;

class SarelvdWaltProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the profile is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Sarel "Seemonster" van der Walt';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return "Dev Lead at Afrihost.com. Started coding when I was in grade 5. Fell in love with it from Turbo Pascal's days! (yes, yes I'm that old!) 
Proud dad of 3 kids, among them a Girl Coder!";
    }

    public function getGitHubUsername()
    {
        return 'sarelvdwalt';
    }

    public function getMaintainedProjects()
    {
        return [
            'Afrihost/swarm-process' => 'https://github.com/afrihost/swarm-process'
        ];
    }

    public function getInvolvedProjects()
    {
        return [
            'Afrihost/BaseCommandBundle' => 'https://github.com/afrihost/BaseCommandBundle'
        ];
    }

    public function getProfileImageURL()
    {
        return 'https://avatars1.githubusercontent.com/u/2071493?s=460&v=4';
    }

    public function getTwitterUsername()
    {
        return '@sfvdwalt';
    }
}