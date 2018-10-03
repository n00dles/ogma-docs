## File Structure

### PAGES Folder 

The folder '/pages' contains all the language variations of your documentation or site.  

On installation you will have a single 'en' for english folder.  

#### Create a translation of existing documentation

If you wish to provide a translation of existing documentation just create a new folder in the '/pages/' folder and copy/paste the contents of your original documentation. 

Now edit those files and folders into your desired language. 

#### Setting the default language

If you wish user to see a default language other than english. Chnage the 'config.php' on the root of the site to specify the default language. 


### File Structure

[code]
├── images
├── lib
│   ├── helpers
│   └── shortcodes
├── pages
│   └── en
│       ├── 01-Header_1
│       ├── 02-Header_2
│       └── 04-Header_3
└── theme
    └── default
        ├── css
        ├── fonts
        └── js
[/code]

- **images**, base folder for images 
- **lib**, internal library folder
- **pages**, base folder for your documentation
- **theme**, theme folder for site 

### Pages Folder 

[code]
├── pages
│   └── en
│       ├── 01-Header_1
│       ├── 02-Header_2
│       └── 04-Header_3
[/code]

Main headers for the menu system are generated form the top level folders created in this directory.  

Folder names should be in the following format: 

[code]xx-name_with_underscores_for_spaces[/code]

Where 
- xx is a 2 digit number, this will control the order in which the item is shown in the menu. 
- name_with_underscores_for_spaces, will be displayed as "Name With Underscores For Spaces" in the menu 

