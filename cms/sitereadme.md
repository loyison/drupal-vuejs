# Decoupled Drupal 8 and Vuejs site

This site will have a drupal cms backend and vue js front. this will be used as a template for apps where it will be cloned and new site/apps can be built from it.

## Purpose of the site
1.  Have a drupal cms connected and called to the app js via api call. Will also allow for multiple users logins, like a restaurant app where admins(restuarant users) can add content (meals). 
2.  Authentication: user registration and login
3.  Payments options
4.  import csv to content types to create restaurants

## Site structure 
root (vue js in root)
-- cms (drupal site install)

#drupal cms details
database: drupalapp
username: root
password: mysql

#CMS details
username: Drupal@piAdmin
password: DruPal@PI98900
#urls
http://drupalapp.local/cms/ - cms
http://drupalapp.local/ -  app 

# Tutorial
https://opensenselabs.com/blog/tech/how-build-single-page-application-drupal-8-and-vue-js
