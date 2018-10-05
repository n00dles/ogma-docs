---
title: OGMA Docs - The Basics
author: n00dles
---
[jumbotron]
#Shortcode - bootstrap
[/jumbotron]

Boostrap shortcodes include the following:  
**Note** Spaces should be removed from example tags before use. 


# jumbotron 
[code] [ jumbotron ]content[ /jumbotron ] [/code]
#### Parameters
None  
#### Description 
Displays a jumbotron as seen on the top of each of these pages. Use in conjunction with *lead*  
#### Example 
[code]
[jumbotron]
#Jumbotron Example
[/jumbotron]
[/code]

[jumbotron]
#Jumbotron Example
[/jumbotron]

# lead 
[code] [ lead ]content[ /lead ] [/code]
#### Parameters
None  
#### Description 
Displays a subheading, usually within a *jumbotron*
#### Example 
[code]
[jumbotron]
#Jumbotron Example
[lead]With a lead subtitle[/lead]
[/jumbotron]
[/code]

[jumbotron]
#Jumbotron Example
[lead]With a lead subtitle[/lead]
[/jumbotron]



# button 
#### Description 
Displays a Button. 


[code] [ button size="" type="" value="" icon="" href="" ] [/code]

#### Parameters
- **size** (lg, md, sm, xs)
- **type** (success, warning)
- **value**, display text
- **icon**, class of icon
- **href**, link href  

#### Example
[code] [button size="sm" type="success" value="Test Button" icon="" href="#" ] 
  [/code]
[button size="sm" type="success" value="Test Button" icon="" href="#" ] 



## code 
[code] [ code mode=""]content[ /code ] [/code]
