## OGMA CMS DOCUMENTATION

This is a work in progress auto generated documentation system for OGMA CMS. 

**NOTE** you'll need to manually change config.php to install while I do an installer.

### Pages

Pages are stored in /pages/en 

Folders should be named:  

xx-Title 

Where xx is the order the folder will appear in the menu 

File should be named 

xx-Title.md

A file named **index.md** will be automatically loaded for a top level menu item. 

### Page Headers

A page header can be added before a block of Markdown 


    ---
    title: Main page title
    author: Author
    template: template.tpl
    ---
    
**title** is the main title displayed on the page/title bar  
**author** is the author of the page  
**template** defaults to index.tpl, allows you to override for different pages.  

### Creating a new Language

Copy the 'en' folder and rename for your new language. 

Prefix the language to the URL see that language version of the docs. 

i.e 
/en/Basics/introduction  
/ru/Basics/introduction  
/fr/Basics/introduction  
