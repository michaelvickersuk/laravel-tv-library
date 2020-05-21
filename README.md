# PlanHappy TV 📺
PlanHappy TV is a web app which allows users to track which TV show episodes they've watched and add shows to their watchlist.

## Functionality overview
- A User should be able to:
  - Mark Episodes as watched/unwatched
  - Add/Remove Shows to/from their Watchlist
  - Set their Watchlist to private to prevent access by other users    
  - Be notified about upcoming airing Episodes

## Page Structure
The following page structure will be required:

- [Home Page](#home-page)
- [Show](#show)
- [Season](#season)
- [Episode](#episode)
- [User Profile](#user-profile)

### Home Page
#### Content to include
- Most watched Episodes
- Upcoming Episodes

### Show
#### Content to include
- Watchlists that include the Show
  - Only watchlists that are visible to the logged in user
- Seasons belonging to the Show
- The next airing Episode, if there is one
#### Actions that can be performed
- Add/Remove Show to/from Watchlist

### Season
#### Content to include
- Episode list, ordered by air date

### Episode
#### Content to Include
- List of Users who have watched
#### Actions that can be performed
- Mark as watched/unwatch
  - Only if the Episode has aired

### User Profile
#### Content to include
- The User's Watchlist with a list of Shows
- Recently watched Episodes
#### Actions that can be performed
- Toggle visibility of the Watchlist

## Additional Tasks
### Upcoming Show Notification
Send out a basic email notification to a User 1 hour before an Episode airs if the user has the Show on their Watchlist.
### Testing
Please write some [HTTP Tests](https://laravel.com/docs/7.x/http-tests) to test various functionality.

Some initial tests have been added to `tests/Feature/HttpTest`. 
There are a handful of incomplete tests in here which will need implementing.

Feel free to write additional tests for any other functionality that may require it.

Don't worry about hitting 100% test coverage.

You can run the PHPUnit test suite with `composer test`  

## Development
### Requirements
This project assumes you have developed a Laravel app locally before using a solution such as Homestead or Valet.
### Instructions
- Clone this repository to your local machine
- Create a new branch to complete your work
- Copy the `.env.example` file to `.env`
- Run `composer install`
- Run `php artisan key:generate`
- Run `npm install`
- Run `npm run dev`
- Update the database values in the `.env` file
- Run `php artisan migrate:fresh --seed`
- Commit changes as you go and don't forget to push changes to the repository
- Create Pull Request on GitHub to merge your branch back into `master`
- You can use this Pull Request to ask for any help that may be required from us.
- When finished assign the Pull Request to [@seanmtaylor](https://github.com/seanmtaylor) 

### Coding Standards/Guidelines
- Please follow [PSR-12](https://www.php-fig.org/psr/psr-12/)
- Add parameter type hints where possible
- Add method return types where possible
- Use [Form Requests](https://laravel.com/docs/7.x/validation#form-request-validation) for validation
- Use [Policies](https://laravel.com/docs/7.x/authorization#creating-policies) for Authorization
- Reuse blade views where possible
- Ensure [eager loading](https://laravel.com/docs/7.x/eloquent-relationships#eager-loading) is used where possible to avoid any N + 1 issues

### Tips
- Don't worry too much about how things look from a design perspective
- Some code has already been written for you, this may contain mistakes or things that can be optimised
- Feel free to refactor anything

### Tools
The following tools have been added to help you with your development
- [Telescope](https://laravel.com/docs/7.x/telescope) - accessible at `yourappurl.test/telescope`
- [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) - `composer style` - This will follow PSR-2 as well as some additional rules
- [PHPStan](https://phpstan.org/) - `composer analyse` - This will analyse your code for any potential errors
- [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper) - `composer ide-helper` - Generates helper files that enable your IDE to provide accurate autocompletion
