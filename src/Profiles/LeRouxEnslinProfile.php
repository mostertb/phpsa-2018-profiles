<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class LeRouxEnslinProfile extends AbstractProfile
{
    public function getName(): string
    {
        return 'Le-Roux Enslin';
    }

    public function getBiography(): string
    {
        return "Gamer since 8 bit, and never stopped. Dog person, loves the outdoor. Happiest when hining where there is no selphone reception.";
    }

    public function getGitHubUsername(): string
    {
        return "ViGouRCanberra";
    }

    public function getProfileImageURL(): string
    {
        return 'https://www.gravatar.com/avatar/c5934d3d9d850d55c6c26b7cc9ed958a';
    }

    public function getMaintainedProjects(): array
    {
        return [
            'Borderlands 2 Fitbit Watchface' => 'https://github.com/ViGouRCanberra/ionic-watchface-borderlands',
            'Tamafit Fitbit Tamagotchi' => 'https://github.com/ViGouRCanberra/Tamafit',
        ];
    }

    public function getTwitterUsername(): string
    {
        return '@VigourCanberra';
    }
}
