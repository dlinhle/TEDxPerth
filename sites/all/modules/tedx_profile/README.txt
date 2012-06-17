
Introduction to TEDx installation profile

Betawerk is founder partner of a TEDx called TEDxEutropolis. TED stands for
Technology Entertainment Design and is devoted to Ideas Worth Spreading.
At a TEDx event, TEDTalks video and live speakers combine to spark deep
discussion and connection in a small group. These local, self-organized
events are branded TEDx, where x = independently organized TED event.

On february the 4th the second edition of TEDxEutropolis took place in Hasselt
Belgium (here's an impression). Since we're planning future editions we thought
let's make it easier for ourselves and for fellow TEDx organizers.

The website of TEDxEutropolis is developed in Drupal 7. Since we're big fans
of Drupal we would like to contribute the installation profile of our TEDx
website to the TEDx and Drupal community. So it can be re-used by TEDx
organizations around the world..

_______________________________________________________________________________

Installation

- Download the profile from.
- Unpack and upload the files to the root of your server.
- Make a copy of default.settings.php and rename it to settings.php.
- Make sure the folder sites/all/default and its content have write permissions.
- (including settings.php)
- Create a database and run the drupal installer by going to your server.
- Make sure you select TEDx Installation Profile as your installation profile.
- Fill in the website information, and you're good to go!
- Notice that after a succesfull install settings.php needs to go back to read
- rights only.

________________________________________________________________________________

Dependencies

The TEDx installation profile comes with and depends on the following:

colorbox
ctools
field_group
jquery_update
features
pathauto
search_config
token
views
views_ui
libraries
superfish
