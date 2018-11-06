# Lucky Cat Noodle Company Website

This website was created for the Rasmussen College Fundamentals of Mobile Web Application Development class. It is a mockup of a fictional site about a company that provides an Asian noodle database. The website is simple and uses Bootstrap and CSS to help with mobile responsiveness. The website connects to an Asian noodle themed database. One page has the ability to list all the items in the database on a web page with php. Another page has the ability to add a noodle to the database. A person could use this site as a template to create a simple site like this of their own.

# Installation Instructions

1. Fork and clone this repository.
2. It can be run on a local web server or installed onto a host.
3. The website requires a MySql database to be created to use the two pages that depend on the database.
4. If the user is going to use the website with the database, there are a few variables that will need to be personalized with the information about the site where the website will be hosted. The database name, the table name, the user name and the user password variables will need to be exchanged with the hosts user name and password for whatever database they will be using. A user account will have to be created with the CREATE and SELECT priveledges.

# Usage

Browse to the site with a web browser. [Lucky Cat Noodle Company](https://www.unicornpoint.net/noodles)
To add a noodle: Enter the name of the noodle in the first text field. Enter what type of noodle you are entering (rice, wheat, egg, etc.). Give a brief description of how the noodle is used in recipes. Where is it from? What is the noodle like? Then click the "Add the Noodle" button. You can return to the Noodle Database page to view your entry.

# Credits

Author: Dawn Summerall

# License

MIT License

Copyright (c) [2018] [Dawn Summerall]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

# Timeline of Changes

A repository created for the Rasmussen class Fundamentals of Mobile Web Application Development.

This is an imaginary site done for class. Eventually it will connect to a database.

10/14/2018

Responsiveness added to the navbar and logo moved to the navbar. Jumbotron added at the top with just the company name in it. The make the jumbotron and the navbar go to the edge of the main wrapper div I had to put them in a row class div and add 100% width styling to the css file. I learned a ton about bootstrap and learned that there is a whole responsive system for padding and margins that can be used with a lot of the elements. The entire site should be working okay on a mobile device now.

10/21/2018

This week I got the database connected to Azure and formatted the noodles.php page to display the data received from Azure. The file noodles.html had to be changed to noodles.php to work correctly. I found that bootstrap classes worked within php and that made things a lot easier. I was able to display the data with very little problem. I also added a little javascript one page2.html to create a page that generates random facts about Asian noodles. I removed several .php files from the repository that I no longer need for this project. There is a file called main.html in the repository. That file is the index page for the root of my Azure school project. It is unrelated to the Noodle Company site. Next week we will be working with sitemaps.

10/25/2018

This week I changed a lot about the appearance of the site. The assignment this week was about sitemaps and navigation. I already had a navbar at the top so I worked on making it fancier. I learned how to add icons to the navigation buttons using font awesome's cdn. So now each button has a little descriptive icon next to the link. Our discussion post involved best practices for creating a UI that provides a good user experience. That is another reason I added the little images on the buttons. I also redid the color scheme a little. I tried to limit the palette to 5 colors wherever possible and all buttons outside of the navbar are black and the navbar hover color is black. I generated a color palette by taking a screen shot with the 3 bowls of noodles on the front page and extracting colors from it using Adobe Color/Kuler. I also moved the cat logo up to the header so there was nothing on the navbar except the links. The logo is set as a background that will disappear when the device viewing the site is below a certain size. That background cat is a clickable link back to the home page but, I'm not sure why. I thought I would be sacrificing that feature when using the image as a background but, somehow it still has a hyperlink. Going back again to good user experience. Some sites suggested it was good to add a little bit of animation to the site. The tone of the images used on the site sets the tone for the site. I want this site to be a little bit silly. I want it to be a happy site. I added an animated .gif to the Noodle Facts page. The database now loads two columns of noodle cards when viewed from a desktop and one column when viewed from a small device. 

11/03/2018

This week I created folders for each course module. Each module folder contains two folders. One folder is for activity assignments and one is for course project assignments. I had to figure out how to download older versions of the website by using the GitHub repository's history feature. I was able to download the website as it was the week I uploaded it. In this way you are able to view the evolution of the site.
