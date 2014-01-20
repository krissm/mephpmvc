<?php
/**
 * A page to show all the kmom reports.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Reports";
$data['meta_description'] = "All reports colloected on one page.";
$data['main'] = <<<EOD
<h1>Reports</h1>
<div>
	<img class="right" id="boilerplateimg" src="img/boilerplate.png" alt="Image of a html5 boilerplate logo">
	<article class="report">
		<h2>Kmom01: HTML5 Boilerplate</h2>

		<p>
		In the beginning I had no idea where to start. So I began by copying code that was not in my boilerplate and try to follow the ‘include()’ statements to get an overview of how the code was connected. After some time I realized that the ‘index.php’ file was connected to all the files under ‘theme’ and how they together made one big page. I still didn’t understand were all the variables came from until I eventually looked up ‘extract()’ in the php manual and realized that all key values in the \$data variable are turned into variables themselves. 
		</p>
		<p>
		I kept most other code from the example because I want to create good habits rather then inventing my own. At first I thought that the ‘html’ declarations had to be recreated for each new page I created but I later realized that this was a third structure to organize html code (we used one in the phphtml course and a different one in the oopphp course) which set php variables differently for each new page. This method seems to be a mix between the first two methods we have used. It felt a bit bad to copy so much code because I could have done it by myself but in order to learn this new way I had to copy and start playing around with it. 
		</p>
		<p>
		It took a while to realize that the example had put together the two CSS files into one. I wondered for quite some time why the ‘normalize’ style sheet was not being used. I copied the example code that had both in one file instead because I thought it would be easier to use, but I left the other two for future use in case I realize that I want to disable one. I moved the ‘style.css’ under ‘theme’ to the style folder because the boilerplate documentation recommended to keep all CSS in this folder. 
		</p>
		<p>
		I’m using sublime text editor, firefox (with firebug), wampserver and filezilla. The boilerplate concept is great because it cuts out all the repetitive things and lets you focus on creating new things for each project instead.  
		</p>
	</article>
</div>

<article class="report">
	<h1>Kmom02: The base of a MVC-framework</h1>
	<p>
		I named my framework Movic as in mo-del, vi-ew, c-ontroller. I followed the mysterious steps closely and got lost often. For example, how can you pass a value by reference in the constructor of the same object you are creating? I guess I just have to assume this is some singleton magic. The workings of the ‘config.php’ files also confused me for a while but now when I finally understand how they work I’m very excited because I feel like I finally understand how simple the logic behind config files (and other files that allow you to set things for the operating system and other software) might be; settings are just ‘normal’ text/code which allows you to run different code. The use of arrays -one dimensional arrays, two dimensional arrays, tree, four and I think I even saw five or six dimensional array in one place- really gave my brain an proper workout. I guess there is not much to say about it since it all make sense, but I think your brain needs some training before it is comfortable navigating and reading these data structures. The reflection object was interesting and I think I understand what is happening, but I’m far from feeling like I will build anything with it and feeling confident it will work as expected. The themeengine made sense because it is similar to how the boiler plate was set up. The base url and the use of various url reshapers and creaters was hard to follow; especially since you can do it in endless different ways; but no doubt experience will make it clear. Github also takes more time than I want it to but it works and I love it. I think the cheer amount of new technology, techniques, methods and concepts makes my brain suspicious of abuse; will the push beyond my comfort levels lead to growth or destruction of my poor brain cells?
	</p>

	<p>
		The basic structure of movic is good because I understand it. I find clear and useful theoretical tutorials on MVC frameworks but as soon as I start looking at code and the folders and file systems in which it is structured I quickly find it very hard to follow. I have heard myself think many times over the last couple of days that “working with frameworks is some serious rocket science”. But I’m not giving up…. If other people can get their head around it, so can I. 
	</p>
	<div>
		<a href="http://www.student.bth.se/~krmc12/phpmvc/kmom2/movic/developer">Movic/Developer</a>
	</div>
</article>

<article class="report">
	<h1>Kmom03: A Guestbook</h1>
	<p>
		I had problems getting the logo image to show. I couldn’t figure out where the ‘src=’ address should start from? First I thought it would be from the folder where the ‘function.php’ file lives, but then I realized that the ‘function’ file as well as the default.tpl.php is included under the ‘ThemeEngineRender()’ method in the Cmovic object. Since the Cmovic object is a singleton and has references all over the place I got really confused. Do all references refer to the place where the ‘Cmovic’ class is written or do they refer to the place where the object is created? I tried to create the path relative to the Cmovic class file, but this didn’t work. So I tried creating the image reference relative to where the first Cmovic object was created (i.e. straight in the ‘index.php’ file) and it worked. After much confusion I conclude that the reason the link to the image has to be referenced from the ‘index.php’ location rather than from the file in which it is written (i.e. function.php under core) must be because this is the actual script file being executed. (Am I getting it ?) Does this mean all references should always be relative to the ‘index.php’ file? Is it because this is where the Cmovic object was created or because this is the ‘base’?  
	</p>

	<p>
		I was finally sure that actual member variables of the Cmovic was (silently) created by just setting \$this->X. Being unsure about this has made it really hard to follow code and it still does because you don’t have one place where you can see what variables exist, instead you have to go through the whole code to see what variables have been created. I remember it was mentioned at some point earlier on but it took me until now to really get it. “Better late than never”. So now I know that Cmovic ‘has a’ db and can call all methods from CMDatabase, but not the db’s member variables since they are declared ‘private’. CCGuestbook and CMGuestbook extend the CObject and therefore you have access to the db and all other silent member variables of Cmovic since they are copied over to the CObject at construction. I also finally understood that the Cmovic is setting the CObject’s variables ‘by reference’ and so any changes to the object’s variables will also change the Cmovic object (I really struggled tying it all together before I understood this).  
	</p>

	<p>
		I also struggled at first to understand how \$this->db->rowcount() could return the number of rows since the rowcount() method have to be called on the PDOStetement object which is returned when calling the prepare method. But I realized that I wasn’t calling the PDO method but the CMDatabase’s method Rowcount(). I was confused how rowcount() could work at first, since I assumed it should be a capital R. But I looked it up and learned that method calls are case insensitive in PHP (which I must have read before but now I will remember it). 
	</p>

	<p>
		When I ’pulled’ the final result of ’kmom3’ to the bth server I remembered to change the permissions to 777 on the database catalogue and file, but I forgot to change the rewrite base on the ‘.htaccess’ file at first. It only took me 5 minutes of going through the code before I was convinced that nothing was wrong with it and that it had to be some settings which cause the error message. By now I have had enough problems with the .htaccess file for my brain to blame it in case of any unexpected errors.  
	</p>

	<p>
		I actually started out this course moment by exploring many different frameworks because I wanted to find out which one I want to master. I started by building <a href="http://www.student.bth.se/~krmc12/Myzend/public/album/">an application that handles record albums with Zend Framwork 2</a>. By my surprise it worked straight away when I uploaded it to the bth server. But it took a good 2-3 days to build it due to all kinds of complex problems I don’t have space to go into. However, I did like how they separate modules and how everything is services. It feels like it is good to learn how to think in these terms since this is likely to enable users me to get quick access to all kinds of information from other parties. 
	</p>
	
	<p>
		When I later came to building <a href="http://www.student.bth.se/~krmc12/CodeIgniter/index.php/guestbook/">the codeIgniter guestbook</a> I was surprised over how simple and straight forward everything was. I felt like I could master codeIgniter in a week or two. However, when I uploaded my project which worked locally it didn’t work on the server. I have a thread going in the forum and I hope to still be able to fix it, but since I’m only on the kmom3 and have already spent a month on this course I have to move on. (The <a href="http://www.student.bth.se/~krmc12/CodeIgniter/index.php">index.php link</a> works but not the guestbook.) 
	</p>

	<p>
		Other frameworks I read about were Symphony which seemed as complicated as Zend2 without too many advantages and Yii which I liked the most. However, ‘Yii’ is waiting for an update at the moment and is expected to change drastically so I’ll be waiting to learn this until the next release is out. 
	</p>
	<div>
		<a href="http://www.student.bth.se/~krmc12/phpmvc/kmom3/movic/guestbook">Movic Guestbook</a>
	</div>
</article>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 