---
title: Blogging
author: Mike
---
To retrieve data from a table and use it in your theme you need to first connect to the Query engine

### Create a new Query
Create a new  

    $table = new Query('pages');

### Retrieving the Cache 
To return an array of all the entries in the cache  

    $records = $table->getCache();

### Returning the results
to return an array of results use get()

    $records = $table->get();  

### Finding Records
Use find() to search the records, the following operators are supported, =, !=, >, >=, <, <= and like. 

e.g. to retrieve all pages Authored by Mike. 

    $records = $table->getCache()->find("author = Mike")->get(); 

Operators can be combined. 

    $table = new Query('blogs');
    $records = $table->getCache()->find("author = Mike, tags = docs")->get();

will return all Blog entries authored by Mike and tagged docs


### Order your results
You can order your result by a particular field and sort 'asc' or 'desc'

    $records = $table->getCache()->order('pubdate','desc')->get(); 

### Retrieve x number of records 
To retrieve x number of records use top() 

    $records = $table->getCache()->order('pubdate','desc')->top(5)->get();

Will get the top 5 pages ordered by pubdate and sorted newest first.  


