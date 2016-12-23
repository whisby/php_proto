

/**************************************************

        PHP Rapid Prototyping Setup

*************************************************/

/* System Requirements */

php : http://php.net/manual/en/install.php (No Need To Install Apache)
php-cli : linux sudo apt-get install php7.0-cli,  should already be installed on mac and windows if PHP is installed
nodejs : https://nodejs.org/en/


/******************************************
                 Setup 

*****************************************/

Once all the requirements are met you must install all the packages and setup a task runner if you plan on using Sass for CSS

Installing packages:

1) Open a terminal and make sure the directory is set to this project's root directory which contains the package.json file.
2) Type npm install  
3) Once npm is finished installing all the packages you will also need to install the php packages
4) Type php composer.phar update


npm start

Running the project type "npm start" in the terminal.  Once started open your browser and navigate to http://localhost:4020


*Running Sass

So Run Sass you will need to set up a task runner to run the default gulp task.  Here is how to do it in Visual Studio `text`


1)  Press F1 and type Task  and then select Configure Task runner
2)  Choose gulp
3)  Replace the contents of the  tasks.json file that was just created with this:

{    
    "version": "0.1.0",
    "command": "gulp",
    "isShellCommand": true,
    "args": ["--no-color"],
    "showOutput": "always",
"tasks": [
    {
    "taskName" : "default",
    "isBuildCommand" : true, 
    "showOutput" : "always",
    "isWatching": true
    },
    {
    "taskName" : "sass:default",
    "isBuildCommand" : false, 
    "showOutput" : "always"
    }
]

}


In Visual Studio Code
To start the task press CTRL + SHIFT + B



/******************************************
        Adding / Editing Content 
                                  
*****************************************/

Any HTML content to be written is found in the views folder.  

/* Layouts */

The layouts folder contains the global layouts . The markup in these files is intended to persist through every page.  For most prototypes it is unlikely you will need to create 
more than the the supplied site.layout.HTML

/* Pages */

Pages contain HTML for each URL.  Any page besides the initial index.html needs to go into a folder for the section that file belongs to.  For instance if someone navigates to the 
localhost:4020/info   then you will need to create a folder named info and place an index.html page in there.  For localhost:4020/info/owls  you will need to put an owls.html page in the info folder


/*  Partials */

Partials are HTML content that is meant to be injected into other HTML pages.  For instance you could make a _nav.html page that you could insert into other pages. 


This Prototyping Setup uses Twig for templating.  For information on how to use Twig visit here:

http://twig.sensiolabs.org/doc/templates.html