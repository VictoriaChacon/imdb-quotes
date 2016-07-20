<!DOCTYPE html>
	<html>
	<head>
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
		<title>Data Design</title>
	</head>
	<body>
		<h1>Persona</h1>
		<img class="profile-image" src="images/victoriavector.jpg"/>
		<p><strong>Name</strong>:Victoria Point</p>
		<br>
		<p><strong>Age</strong>:24</p>
		<br>
		<p><strong>Profession</strong>:Victoria is a student and a part-time worker. She spends a lot of her time dealing with people who know a lot about movies. As a student she is always catching up with friends about the latest movies. </p>
		<br>
		<p><strong>Technology</strong>:Victoria is a Mac user but also uses her phone, which is an android device. She spends most of her time on her phone only using her computer when her phone is dead or misplaced. She has limited data connection with her phone because her service only allows high speeds for a period of time.</p>
		<br>
		<p><strong>Attitudes and Behaviors</strong>:Victoria is very busy, she does to shcool full time and works in-between her school hours. When she wants information, she wants it fast and to the point. She will spend no more than three minutes looking through a page before she moves on to another source. She is a big fan of social media and likes to share her findings with friends who share her interest.</p>
		<br>
		<p><strong>Frustrations and Needs</strong>:Victoria has a big interest in films, however, with her limited amount of time she needs to get information about a film without having to watch it in its entirety.</p>
		<br>
		<p><strong>Goals</strong>:It 11:00pm on a Friday night, Victoria is at work. Victoria finally has an hour to do some research before she continues working. She would like to find a couple of facts about the movie she is researching and also have some interesting points to bring up with her coworker. With only an hour Victoria would like to find at least two points to write about within 15 minutes so she can spend the majority of her time writing.
		</p>
		<br>
		<h1>Use Case</h1>
		<br>
		<p>Victoria has decided that she ants to work with a particular movie for her film project. She looks through her list of resources and wants quick information that does not require too many clicks. Right now she just needs tidbits of character information to expand upon.
		Knowing which film she wants to work on Victoria goes to IMDB a site that she frequents for movie information.
		Its 11:00pm on  a Friday night, Victoria is at work, but finally has an hour break in order to do some researching. She would like to find a couple of character quotes and expand on them and their actors as well as get some writing done. She only wants to spend maybe fifteen minutes researching and the rest of her time writing.</p>
		<br>
		<h1>Interaction Flow</h1>
		<p><strong>User Story</strong>: I want to be able to find a quote from the movie im researching and find out information about that quote. Lke the character and the actor.</p>
		<ol>
			<li>user will access the imdb site</li>
			<li>User will use the search bar to find their movie</li>
			<li>user will scroll down and find the quotes section</li>
			<li>user will click the "see more" link</li>
			<li>user can scroll and find the quote</li>
			<li>user can click on character name to be taken to the actors profile</li>
		</ol>
		<br>
		<h1>Conceptual Model</h1>
		<!--weak entities: quoteActor, actorMovie-->
		<!--entities: quote, actor, movie-->
		<ul>
			<li><strong>many</strong> quotes can have <strong>many</strong>   actors</li>
			<li><strong>many</strong> movies can have <strong>many</strong> actors</li>
			<li><strong>one</strong> movie can have <strong>many</strong> quotes</li>
		</ul>
		<img src="images/imdb-quotes-ERD.svg"/>

	</body>
</html>

