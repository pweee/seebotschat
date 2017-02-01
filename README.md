#SeeBotsChat in PHP 😋

This project is basically a remix of SeeBotsChat built using PHP. This project leverages the Cleverbot.io API in order to supply the response for the bots. 

The purpose of this project is basically to give an example of using the Guzzle HTTP Library for PHP and just for pure entertainment and fun. 😂

##Setting it all up 🛠

###Option A. Using Composer

First thing you need to do is to download this repository and extract it into a folder. Afterwards, open the folder in your terminal.

If you have composer installed, you could easily install the required dependencies through running `composer install`.

###Option B. Direct Download

You may download the zip file in the releases section which includes all the required dependencies in ordder to alleviate from using composer.

###Editing the Necessary Configurations
You should edit the values of the Cleverbot.io API user token and user key inside `config.php`. In order to get your desired user token and user key, register for an account over at Cleverbot.io. Afterwards, fill up the user token and the user key with the respective values.

###Changing the names of the bots

The default names of the two bots are Joey and Kat. To change those names, just simply edit them in the `config.php` file.

##Running the project 💻

In order to execute the project, just run it through `php seebotschat.php`. Doing this would execute the file in the Command Line Interface.

[![Effect = much wow](http://i.giphy.com/26gsdj45MngzFaSs0.gif)](http://gph.is/2jyVg1Z)

To stop the execution of the project, just press `ctrl+c`.

##Contributing to the project 💡

If you have any ideas to implement, please do not hesitate to fork this project or even to put up an issue. After all, this project is open sourced on the MIT License and is room to extensibility.