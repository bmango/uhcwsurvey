# uhcwsurvey

## Installation Instructions

1. Clone or download from https://github.com/bmango/uhcwsurvey.git into the webserver folder
2. Create an empty MySQL database and import the database import file (seperate from this repository)
3. Copy the file sites/default/default.settings.php to sites/default/settings.php
4. Edit lines 225 to 232 and enter in the database information and then uncomment them.
5. The site should now be up. 
6. You can login at domain.com/user - login details will have been sent seperately

## Application Instructions

1. For the 4 different survey modalities you should use the following urls:
   1. ?survey=web - (web)
   2. ?survey=kiosk - (kiosk)
   3. ?survey=mobile - (smartphone)
   4. ?survey=paper - (paper)
2. If you do not use one of the links above the website will show an error message

## Troubleshooting

1. If you get a 500 Internal Server Error, check the permissions on the root index.php file. They should be 604. 
2. For other errors check the root .htaccess file, on line 115. You may need to comment this line out or change the path to a subfolder if you have Drupal installed in a subfolder. Also, check the permissions on sites/default/settings.php which should be 404. 
3. This application has been checked to work with php 5.6 but not with other versions which may cause problems.
