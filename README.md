# PHP-WEB-SRIPTING
This php-Web-Scripting program takes url and fetch every images in that web page.

First- 
Give the website url to the variable named $the-site. It will assign the url to the variable. 

Second-
Give the tag associated with the image you want to fetch from the site. It will be asign it to a variable 

Third- 
Give the class name of the div tag. 


    $the_site = "https://www.amazon.com/ref=nav_logo"; //put the url of any website that containes images
    $the_tag = "a"; //a | div | span 
    $the_class = "a-link-normal aok-inline-block"; //the div class that contains the images
    
    
    IT will show like this after running the program.....
    
<img width="2048" alt="Screenshot 2021-03-25 at 3 53 27 PM" src="https://user-images.githubusercontent.com/80514731/112454077-84e81800-8d82-11eb-9aad-c58b61f5b188.png">
