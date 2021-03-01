<?php
//====  Laravel-8  Installation & Authentication  ====//
//==============================================================================
# Installation Via Composer
#**************************

# If your computer already has PHP and Composer installed, you may create a new Laravel project by using Composer directly
composer create-project laravel/laravel [app_name]
               # OR
composer create-project --prefer-dist laravel/laravel [app_name]

#----------------------------
     #----  OR  -----
#----------------------------

# The Laravel Installer
#  you may install the Laravel Installer as a global Composer dependency:

# step-1-------------->>>
composer global require laravel/installer

# step-2-------------->>>
laravel new [app_name]

//==============================================================================
composer require laravel/ui --dev  //install ui(vue-js) package for development
php artisan ui vue --auth          //make a Authentication Register and Login form & link frontend

//==============================================================================
# now need to install node.js in computer from "https://nodejs.org" for one time
# CMD--this command will install "node_module" in root folder
npm install

# CMD - it will make css & js folder & file in public path for design & development
# it will make beautiful design for login & Register page by Bootstrap
npm run dev
# otherwise this "css & js" file you can copy from other project

//==============================================================================
# Now Migration for set basic table in Database & it will create table for User Authentication
php artisan migrate

//==============================================================================
#===  END  ===#
?>
