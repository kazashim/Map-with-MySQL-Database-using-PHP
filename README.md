# Map with MySQL Database using PHP
 Display Google Map with MySQL Database using PHP

This shows you how to display information from a MySQL database on a Google Map using the Maps JavaScript API. It suits people with intermediate knowledge of MySQL, PHP and XML.

The map in this tutorial displays two kinds of markers to differentiate between the location of restaurants and bars respectively. A database in MySQL stores information about the individual marker locations like the type of place (whether it’s a restaurant or a bar), its name, address and geographic coordinates. The map retrieves this information from the database, through an XML file that acts as an intermediary between the database and the map. You can use PHP statements to export marker information from the database to an XML file.

The mark icon here is the starting point where it is the first row in the table and the flag icon is the ending point.

I am using google map to create a dynamic google map that take locations such as longitude and latitude stored in the database using PHP and MySQL and display the selected locations by markers on the map.