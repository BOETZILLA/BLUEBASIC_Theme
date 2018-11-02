# BLUEBASIC_Theme

This is a variation of the Hubzilla standard theme "Redbasic". It is heavily inspired by Sean Tilley's work and his "Suckerberg" theme which you can finde here: https://github.com/DeadSuperHero/hubzilla-themes. 

The theme makes use of all available theme settings and is colour configurable.

These files need to be saved in the /view/theme/ directory of your Hubzilla. You can just ftp the files onto your hub or SSH into that directory and git clone this repo.

You can as well use the add_theme_repo and update_theme_repo utility scripts of Hubzilla. Just SSH into your server and then run this command: 

util/add_theme_repo git@github.com:BOETZILLA/BLUEBASIC_Theme.git boetzilla

To update your Hubzilla theme, simply type this on your terminal:

util/update_theme_repo boetzilla

or run:

util/udall

which will update all your git files on your hub.
