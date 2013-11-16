<!DOCTYPE html>
<html>
    <head>
    	<title>About</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
			<?php
				include 'banner.php';
			?>
            
			<nav id="nav_bar">
                <a href="">Home</a> | <a href="final_report.php">About Us</a> | <a href="">Menus</a> | <a href="">Nutritional Info</a>
            </nav><!-- end nav_bar -->
	
			<div id="content">
				<h1>PRESTIGE WORLDWIDE - FINAL REPORT</h1>
				
				<table id=table border="1" bordercolor="#FFFFFF" style="background-color:#FFFFFF" width="100%">
				<tr>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" width="120px"; height="160px"; src="images/MattDeMartino.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>MATT DEMARTINO</h3>
						<b>Class Year:</b> Senior</br>
						<b>Major:</b> Computer Science</br>
						<b>Title:</b> Account Executive</br>
						<b>Contribution:</b> Corporate Relations, front-end development
						</span>
					</td>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" width="120px"; height="160px"; src="images/YunpingShao.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>YUNPING SHAO</h3>
						<b>Class Year:</b> MS First Year</br>
						<b>Major:</b> Computer Science</br>
						<b>Title:</b> Analyst</br>
						<b>Contribution:</b> Writing, statistical analysis
						</span>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" width="120px"; height="160px"; src="images/CarolynSohmer.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>CAROLYN SOHMER</h3>
						<b>Class Year:</b> Sophomore</br>
						<b>Major:</b> Computer Science & Digital Media</br>
						<b>Title:</b> Operations Manager</br>
						<b>Contribution:</b> Design, writing, quality assurance
						</span>
					</td>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" src="images/ZachTaylor.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>ZACH TAYLOR</h3>
						<b>Class Year:</b> Junior </br>
						<b>Major:</b> Computer Science, Economics, & International Relations</br>
						<b>Title:</b> Junior Account Executive</br>
						<b>Contribution:</b> Corporate Relations, front-end development</br>
						</span>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" src="images/TedTeumer.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>TED TEUMER</h3>
						<b>Class Year:</b> Senior </br>
						<b>Major:</b> Computer Science & Statistics</br>
						<b>Title:</b> Business Intelligence Developer</br>
						<b>Contribution:</b> Development, data integrity</br>
						</span>
					</td>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" src="images/RuZhao.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>RU ZHAO</h3>
						<b>Class Year:</b> Senior </br>
						<b>Major:</b> Computer Science</br>
						<b>Title:</b> Back-end Developer</br>
						<b>Contribution:</b> Back-end development, database design/implementation
						</span>
					</td>
				</tr>
			</table>
			<h2>Mentor</h2>
			<table id="table" border="1" bordercolor="#FFFFFF" style="background-color:#FFFFFF" width="100%">
				<tr>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 5px;" src="images/MichelleFung.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>MICHELLE FUNG</h3>
						Likes origami
						</span>
					</td>
				</tr>
			</table>
			<h2>Project Proposal</h2>
				<h3>Definition</h3>
					<p>
					On campus there's a restaurant located near the IT center called "Connections" that sells mainly breakfast-type food items. 
					We like to go there a lot but find that the time many students want to go is in between classes and often they don't have the 
					time to go, because the line is too long.
					</p>
				<h3>Requirements</h3>
					<p>
					<ul>
					<li>Needfinding survey</li>
						<ul>
						<li type=circle>Online survey</li>
						<li type=circle>Video interviews</li>
						</ul>
					<li>Evaluations</li>
						<ul>
						<li type=circle>Student evaluations</li>
						<li type=circleConnections>Staff evaluations</li>
						</ul>
					<li>Prototype</li>
						<ul>
						<li type=circle>User-end website</li>
							<ul>
							<li type=square>Homepage</li>
							<li type=square>User log-in</li>
							<li type=square>Food information (involves back-end database)</li>
							<li type=square>Order placement (edits the order queue back-end, which edits the employee-side order queue page)</li>
							</ul>
						</ul>
						<ul>
						<li type=circle>Connections employee website</li>
							<ul>
							<li type=square>Homepage</li>
							<li type=square>Employee log-in</li>
							<li type=square>Inventory edit (accesses same back-end database that displays the items on the food information and order placement pages)</li>
							<li type=square>Order queue (back-end database keeps track of orders and sends them to order queue page; must also be able to edit queue database)</li>
							</ul>
						</ul>
					</ul>
					</p>
				<h3>System</h3>
					<p>
					We propose a website that lets UofR users login and place an order with declining (the payment is online, no swiping if possible)
					along with a time for pickup that expedites the process so users can get their food more quickly between classes. If time allows, 
					we will propose an app for Android/iOS as well.
					</p>
					<p>
					Finding a way to pay with declining online.
					</p>
					<p>
					How do users pay for the food online?
					<ul>
					<li>If users cannot pay for the food online, then thereâ€™s no insurance that the customer will actually pay for the food that the restaurant has prepared. So there HAS to be a way for users to pay online. (Otherwise the food is prepared only once the customer has shown up and the app is pointless).</li>
					<li>Flex should definitely be possible but declining (while the ideal case) is uncertain.</li>
					<li>We can find out how feasible paying for food online with declining is and the sort of system/back-end that would be used by discussing the possibility with dining services.</li>
					<li>If Connections cannot work with us until the prototype is finished, we will not implement this part.</li>
					</ul>
					</p>
					<p>
					Coordinating with Connections
					<p>
					How do we figure out how Connections will interact with this application and the feasibility of it on their end?
					<ul>
					<li>The cashiers/workers can pull orders from a database which will display the time the order is expected to be done and then make it so that the order can be picked up when the customer arrives.</li>
					<li>The orders could be placed in bags with the customerâ€™s name on it. When they come to pick it up, they could get in an â€œexpress lineâ€� (which should be empty for the most part) to simply give their name and get their food right away.</li>
						<ol>
						<li>Maybe they have to swipe their card to verify identity?</li>
						</ol>
					<li>We can talk to the general manager of Connections who can discuss how it would be implemented on his end and share these ideas with him. This part is not essential to the prototype.</li>
					</ul>
					<p>
					Designing and releasing the app
					</p>
					<ul>
					<li>Ideally this would be an actual application for release on Android/iOS as well as a website that users could use but our prototype will just be the website first and the Android/iOS if we have time.</li>
						<ol>
						<li>We need to figure out how to get a domain for this website (and pay for it?). We can talk to dining services to see if theyâ€™d be willing to fund the website if this goes live.</li>
						<li>We need to figure out how to release this app for Android/iOS. Research this on our own or talk to someone in class with experience here.</li>
						</ol>
					</ul>
					<p>
					Back-end side for Connections taking orders, editing website, etc.
					</p>
					<ul>
					<li>How does Connections maintain what food is and is not available?</li>
						<ul>
						<li>Most people working at Connections do not know how to manually edit source code online that displays what food is and is not available.</li>
						<li>A worker from Connections should not HAVE to edit this code. There should be a way for Connections to have full control of the website but through drop-down menus and a log-in that allows (only) them to update what food is and is not available.</li>
						<li>This should be achievable, because the vast majority of connectionâ€™s menu is standardized (ie, they sell the same baked goods every day) or semi-standardized (they rotate types of coffee and soup).</li>
						<li>We will use a MySQL database to store the available food.</li>
						</ul>
					<li>How does Connections get orders online and prepare them?</li>
						<ul>
						<li>There should be a cashier interface that allows the workers to see when the customer is expecting to pick up the food so they can prepare it on time.</li>
						<li>There should be a way for a cashier to â€œcompleteâ€� the order and remove it from the queue.</li>
						</ul>
					</ul>
					<p>
					Possible Features?
					</p>
					<ul>
					<li>Recurring orders for customers</li>
						<ul>
						<li>Suppose I always want a bagel with cream-cheese between my 1:45 and 2:00 class. I should be able to save past orders and order it again through just a few clicks/screen taps</li>
						<li>Even better, a way to AUTOMATICALLY order the same order many times over a semester.</li>
						</ul>
					<li>Far-in-advance orders?</li>
						<ul>
						<li>U of R would not like it if students were able to pay for a meal next semester with declining that is only available for this semester so there has to be at least that limit in advance orders.</li>
						<li>Can we make orders days, weeks, or months in advance? Talk about this with Connections/Dining Services</li>
						</ul>
					<li>Orders for other people</li>
						<ul>
						<li>An issue is that this process might possibly allow someone to make an order for food with another studentâ€™s declining, simply using their log-in and password but not their physical card.</li>
						<li>If Connections sees this as a not-allowable issue, it might require that users must swipe to pick up their food.</li>
						<li>Otherwise, this is a feature and users can place an order with their card for someone else and this would also have to be coordinated with Connections.</li>
						<li>Perhaps, on the order placement screen, have a check-box that says â€œthis order is for someone elseâ€� and then all of that info put in by the user.</li>
						</ul>
					<li>Orders with flex</li>
						<ul>
						<li>Users should be able to pay with flex online as well as with declining. This possibility could also be discussed with dining services.</li>
						</ul>
					<li>Orders with Credit Card</li>
						<ul>
						<li>Users should be able to pay with a credit card online. This possibility could also be discussed with dining services
						</ul>
					</li>
					</ul>
				</p>
				<h3>Evaluation</h3>
				<h3>Act</h3>
					<iframe width="560" height="315" src="//www.youtube.com/embed/h_XQG22bP_U?list=PL5aTD63kf1EBNeGyZYlX2N2F4QF61YQW9" frameborder="0" allowfullscreen></iframe>
			<h2>Needfinding</h2>
				<p>
				We distributed a survey to UR students, and the result is analyzed. 175 students participated in this survey. Connections and Pura Vida 
				are the least visited cafes around the campus. (show data in table) 9 out of 175 students visited Connections daily, 21 visited Connections 
				2-3 times per week, while 83 students visited Connections monthly or less. Similar result was collected for Pura Vida. In this survey, 79% 
				students reported that they had to choose not to get food on campus because they donâ€™t have time. 
				<img src="images/"> 
				85% student reported that waiting time has a moderate to primary impact on their decision of where to get food. 
				<img src="images/">
				Over 71% students replied that if they would go to Connections more if they could order food online that would be ready when they arrive. 
				<img src="images/">
				Therefore, in order to increase the daily visit of Connection, we propose a online food ordering system, through which students can order 
				their food ahead of time, and pick up their food at their scheduled time, to skip the line and save the waiting time.
				</p>
			<h2>Prototype #1</h2>
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0133.jpg">
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0134.jpg">
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0135.jpg">
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0137.jpg">
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0138.jpg">
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0139.jpg">
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0140.jpg">
				<img style="vertical-align:middle;" width="40%" src="images/IMG_0141.jpg">
			<h2>Prototype #2</h2>
				<img width="40%" src="images/connections-homepage copy.png">
				<img width="40%" src="images/connections-page1 copy.png">
				<img width="40%" src="images/connections-page2 copy.png">
				<img width="40%" src="images/connections-page3 copy.png">
			<h2>Prototype #3</h2>
				<img width="100%" src="images/flowchart.png">
			<h2>Stages of Working Prototype</h2>
				<img src="images/Screenshot (11).png">
				<img src="images/Screenshot (12).png">
				<img src="images/Screenshot (13).png">
			<h2>Video Demo</h2>	
			<h2>Evaluation</h2>

			</div><!-- end content -->
</html>
</body>
