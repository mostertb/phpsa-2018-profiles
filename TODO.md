# To Dos

The base version of this project is very basic. If you're excited to get more involved than just submitting a profile,  
here a a bunch of ideas for things that this project needs.

Pull Request for these idea's will qualify you for a in the competition for the Jetbrains License

Before you start to work on one of these, please open a Issue on this project to tell everyone that you are working on it
so that we don't duplicate work.

- [ ] **Tests and CI**  
We need some basic test coverage to make merging PRs easier. Once this is done, we'll add Travis CI integration.

This will probably involve:
 
 * Adding PHPUnit to the project
 * A basic 'functional test' to ensure that the project doesnt fatal error
 * Possibly test that all of the required fields of all of the Profiles are not empty strings (A provider that uses `Kernel::getProfiles()`
   would work well here)
   
- [ ] Autoload Profiles
Manually instantiating profiles in the kernel constructor is a step that many contributors miss. It is also prone to 
merge conflict. It would be nice detect all the classes in the `Profiles` directory and automatically instantiate them in
the kernel
   
- [ ] **Default Profile Pic**
Show some default image for Profiles which return an empty string or `null` from `AbstractProfile::getProfileImageURL()

- [ ] **Templating Engine** 
Typing out a long biography for `AbstractProfile::getBiography()` is tedious. It would be nice to allow this information to
be provided with via a templating engine such as TWIG

If your feeling adventurous, the same is true for the index.php page
   
- [ ] **Local Profile Pics**
It would be nice to add the option for profiles to commit their images to the project and have them served out of
`/public/media/images` so that the is less reliant on external services

This would need to be done so that it is a non-breaking change

- [ ] **Load Each Profile on its own page**
Speaks for itself. Bonus points for SEO urls...

- [ ] **Theme** 
Make the whole site prettier

# Completed TODOs

- [x] **Tests and CI**  
We need some basic test coverage to make merging PRs easier. Once this is done, we'll add Travis CI integration.

This will probably involve:
 
 * Adding PHPUnit to the project
 * A basic 'functional test' to ensure that the project doesnt fatal error
 * Possibly test that all of the required fields of all of the Profiles are not empty strings (A provider that uses `Kernel::getProfiles()`
   would work well here)
   
   
- [x] **Twitter Integration**
Profiles this year optionally include Twitter Usernames. We should add this to the display.
Bonus marks for facilitating tweeting at and following