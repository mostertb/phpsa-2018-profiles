<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class LiamNormanProfile extends AbstractProfile
{
    public function getName(): string
    {
        return 'Liam Norman';
    }

    public function getBiography(): string
    {
        return "Liam Norman is a software engineer at superbalist.com and organiser of the PHP Cape Town user group. With experience working on monolithic systems, smaller SPA systems as well as API's. He has a passion for TDD, Laravel, CI/CD, and API Development. When not coding late into the night, he can be seen hiking table mountain or dabbling with anything PHP related.";
    }

    public function getGitHubUsername(): string
    {
        return "LiamNorman";
    }

    public function getProfileImageURL(): string
    {
        return 'https://avatars0.githubusercontent.com/u/16098643?s=460&v=4';
    }

    public function getTwitterUsername(): string
    {
        return '@liamjnorman';
    }
}
