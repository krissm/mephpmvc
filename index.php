<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Me-page with HTML5Boilerplate";
$data['meta_description'] = "My me-page, created with the help of HTML5Boilerplate during the course phpmvc.";
$data['main'] = <<<EOD
<article class="home">
	<h1>About Me</h1>
		
	<figure class="right shadow">
		<img id="Kriss" src="img/memirror1.png" alt="Image of Kristoffer Magnusson">
	</figure>
	
	<p>			
		Hi, <br /> 
		My name is Kriss. Here are a few facts that might help you understand what I'm about:<br /> <br />
		I'm 33. Have been living as a global nomad for the last 12 years. Meaning 'I see the whole world as my home and I go wherever the grass seems greener'. Intellectual pursuit is what makes me tick. Like Google, I want to organize the world's information :) but with a focus on what goes on inside of people's minds rather than what goes on inside servers.
	</p> 
		
	<p>
		Having a great intellect is definitely the new cool; stupidity and ignorance is slowly going out of fashion. Every partical you are likely to ever encounter will soon have been metataged in some	way or another. Enabling you to undestand the environment you interact with to such an extend that (with the help of scientific models) you are able to predict what environments you are likely to interact with tomorrow and base actions on future value rather than on reactional habits. Being a part of enabling this development is my rather ambitious reason for doing this course. 
	</p>

	<p>
		I'm very exited about the opportunities that has come with today's information technology. I believe we live in the most hospitable time humans have ever seen and that we probably haven't even begun to understand how amazing the fruits of tomorrow will taste. 
	</p>
</article>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");