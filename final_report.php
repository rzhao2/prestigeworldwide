<!DOCTYPE html>
<html>
    <head>
    	<title>About</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
			<?php
				include 'banner.php';
				//include 'navbar.php';
			?>
	
			<div id="content">
				<h1>PRESTIGE WORLDWIDE - FINAL REPORT</h1>

				<ul>
					<li><a href="final_report.php#team">The Team</a></li>
					<li><a href="final_report.php#mentor">Our Mentor</a></li>
					<li><a href="final_report.php#proposal">Proposal</a></li>
					<ul>
						<li><a href="final_report.php#definition">Definition</a></li>
						<li><a href="final_report.php#requirements">Requirements</a></li>
						<li><a href="final_report.php#extra">Extra Features</a></li>
						<li><a href="final_report.php#system">System</a></li>
						<li><a href="final_report.php#evaluation">Evaluation</a></li>
						<li><a href="final_report.php#act">Act</a></li>
					</ul>
					<li><a href="final_report.php#needfinding">Need-finding</a></li>
					<li><a href="final_report.php#prototypes">Prototypes</a></li>
					<li><a href="final_report.php#video">Video Demo</a></li>
					<li><a href="final_report.php#presentation">Presentation</a></li>
					<li><a href="final_report.php#poster">Poster</a></li>
					<li><a href="final_report.php#evaluations">Evaluations</a></li>
					<li><a href="final_report.php#future">The Future of the Project</a></li>
				</ul>
				</br>
				</br>
				
				<h2 id="team"> The Team (<a href="mailto:f13-csc412-prestige-worldwide@googlegroups.com">f13-csc412-prestige-worldwide@googlegroups.com</a>) </h2>
				<table table border="1" bordercolor="#FFFFFF" width="100%">
				<tr>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" width="120px"; height="160px"; src="images/MattDeMartino.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>MATT DEMARTINO</h3>
						<b>Class Year:</b> Senior</br>
						<b>Major:</b> Computer Science</br>
						<b>Title:</b> Account Executive</br>
						<b>Contribution:</b> Corporate relations, front-end development
						</span>
					</td>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" width="120px"; height="160px"; src="images/YunpingShao.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>YUNPING SHAO</h3>
						<b>Class Year:</b> MS First Year</br>
						<b>Major:</b> Computer Science</br>
						<b>Title:</b> Analyst</br>
						<b>Contribution:</b> Prototyping, need-finding, evaluations, menu images,</br>statistical analysis, filming, poster
						</span>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" width="120px"; height="160px"; src="images/CarolynSohmer.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>CAROLYN SOHMER</h3>
						<b>Class Year:</b> Sophomore</br>
						<b>Major:</b> Computer Science &amp; Digital Media</br>
						<b>Title:</b> Operations Manager</br>
						<b>Contribution:</b> Prototyping, design, HTML/CSS, interviews, </br>filming/video-editing, poster, presentation, quality assurance
						</span>
					</td>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" src="images/ZachTaylor.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>ZACH TAYLOR</h3>
						<b>Class Year:</b> Junior </br>
						<b>Major:</b> Computer Science, Economics, &amp; International Relations</br>
						<b>Title:</b> Junior Account Executive</br>
						<b>Contribution:</b> Corporate relations, data entry, student interviews, </br>evaluations, statistical analysis
						</span>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<img style="display: inline-block; vertical-align: middle; margin-right: 10px;" src="images/TedTeumer.jpg">
						<span style="display: inline-block; vertical-align: middle;">
						<h3>TED TEUMER</h3>
						<b>Class Year:</b> Senior </br>
						<b>Major:</b> Computer Science &amp; Statistics</br>
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
						<b>Contribution:</b> Back-end development, database designand </br>implementation, geo-location
						</span>
					</td>
				</tr>
			</table>
			<h2 id="mentor">Mentor</h2>
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
			<h2 id="proposal">Project Proposal</h2>
				<h3 id = "definition">Definition</h3>
					<p>
					There is a cafe on campus near the IT Center called "Connections" from which we like to get food, but we've found that it is often too busy between 
					classes and at meal times. These are key times for students to eat around their classes and meetings, but since everyone tries to visit Connections 
					around the same times, the long lines can deter a lot of business and make staying well-nourished throughout the day difficult.<br>
                    We already know of many chain restaurants, such as Five Guys and Chipotle, that allow customers to order online so that food will be ready 
					when customers arrive, eliminating a waiting period. Since college students are generally busy and on-the-go, such a system should facilitate 
					better opportunities to get food at precise times in their days, preventing malnutrition and tardiness to class as well as profiting campus cafes by 
					decreasing stress during busy periods and increasing business.

					</p>
				<h3 id = "requirements">Requirements</h3>
					<p>
					<ul>
					<li>Need-finding survey</li>
						<ul>
						<li type=circle>Online survey</li>
						<li type=circle>Video interviews</li>
						</ul>
					<li>Evaluations</li>
						<ul>
						<li type=circle>Customer evaluations - online survey</li>
						<li type=circle>Staff evaluations - interviews</li>
						</ul>
					<li>Prototype</li>
						<ul>
						<li type=circle>User-end of website</li>
							<ul>
							<li type=square>Homepage</li>
							<li type=square>User log-in</li>
							<li type=square>Menu (involves back-end database)</li>
							<li type=square>Order placement (edits the order queue back-end, which edits the employee-side order queue page)</li>
							</ul>
						</ul>
						<ul>
						<li type=circle>Employee-end of website</li>
							<ul>
							<li type=square>Homepage</li>
							<li type=square>Employee log-in</li>
							<li type=square>Inventory edit (accesses same back-end database that displays the items on the food information and order placement pages)</li>
							<li type=square>Order queue (back-end database keeps track of orders and sends them to order queue page; must also be able to edit queue database)</li>
							</ul>
						</ul>
						</ul>
					</p>
					
				<h3 id = "extra">Extra Features</h3>
					<p>
						<ul>
						<li>Orderqueue with Long Polling</li> 
							<ul>
								<li> To make it convenient for employees to keep track of the orderqueue, we made the ajax connection to the mysql tables order and order_info using long polling, a process that keeps an open connection to the mysql database and  monitor any changes make to it. </li>
							</ul>
						</ul>
						<ul>
						<li> 3 Options for 3 Types of Users </li>
						
							<ul>
							In our HCI class, we learned that there are many types of users. There are those that opt to use the only the basic features and those who are expert users. Using that principle, we decided to implement multiple ways for the user to signal the employees at Connection when they are picking up their food. 
							</ul>
							<ul>
								<li type=circle>Select a Pick-up Time</li>
							
									<ul>The user request a time for the food to be ready, then he/she can pick it up at the requested time.</ul>

								<li type=circle>Geolocation with Time Algorithm</li>

									<ul>The user might be in a hurry, or doesn't know how long it might take to get there. He or she can choose this option and get an estimated arrival time. The time algorithm is created using location tracking from the geolocation feature of html5, google map API's walking routes, and average human walking speed. If the user is not satisfied with the estimated time given, it's very easy to modify it by just clicking on the box, a date/timer picker (similar to the one in option 1) will popup.</ul>

								<li type=circle>Real Time Location Tracking</li>
									<ul>
									The user can grant permission to us to track their location, then the employees at connection can get a real-time feedback on their location. What makes this substantially different from the previous approaches is that the user doesn't get an absolute time for when to pick up the food, but a dynamic time that heavily depends on the user's location and rate at which he gets there. If a user stays at the same location, the request time of completion that the employees see does not change, if however, the user is running there, the request time of completion may be earlier than the previous calculated time. This allows the users that opt for this option to be able to jump in front of the line or fall behind in a line. What makes this works and is fair to the other users is that even though the user can jump in front of the line, he may fall behind in a line as well. Additionally, it doesn't change the fact that the other users have a predetermined request time of pick-up. The only time that the other users will be affected is that if the line is incredibly long and the waiting time due to the users that opt for this option makes a significant difference, but since the employees can get a much more concrete evidence that they can get here at the requested time, they should then deserve the advantage. The user can also stop the tracking and "go off the grid" from the employee, the requested completed time seen by the user will be the one calculated from the same algorithm used in the previous option and the user's last seen location. We believe that this is a very convenient option for those people walking between class and needs to quickly grab their food. To accomplish the functionality of this feature, we used the geolocation feature of html5, google map api, average human walking speed, and an incredible amount of AJAX that communicates between the database, the map at the admin page, the user's location tracking page, and a very clever of way of making it work with the long polling (w/jquery) used in the admin page by printing out html hidden fields echoed out from the php during the production of the virtual orderqueue.</ul>
									
								</ul>
		
								<li type=square> *notes* </li>
								
									To see these features on the website, you need to open up an admin page and a user page. Make your order through the user page, and you can see the automatic updates on the admin page without refresh as well as the markers that indicate your location if you decide to use the third option. There is a max 5 second delay for your changes to show up because we made a delay on the queue as it was lagging to press the buttons on that page.
									
								</li>
						</ul>
					</p>
				<h3 id = "system">System</h3>
					<p>
					We propose a website that lets University of Rochester users log-in and place orders with declining (by paying online, further time is saved by eliminating
					the step of swiping an ID card at the cafe site upon pick-up), indicating a pick-up time to expedite the process. Cafe employees can view the order queue to
 					estimate when to start preparing orders based on their scheduled pick-up. This should shorten lines, space out the work of employees, and provide students
					with their food more quickly and at a specified time.
					</p>
					<p>
					Reality of Declining integration
					</p>
					<p>
					There has to be a way for users to pay online, since without the deposit upon ordering, there would be no way to ensure that customers will pay for the food 
					cafe employees spent time preparing. Our website is intended for use alongside UR Declining and student Net ID system. For obvious security reasons, we do 
					not have access to these systems, so they would only be implemented if the university and dining services decide to use the website we have created. Since
					that is unlikely to happen until after our working prototype is complete, we will implement log-in and payment features on an inconsequential level. In other
					words, until the website is integrated with university systems, orders placed on the website will not reach Connections. 
					</p>
					<p>
					Plan for future cafe use of the website
					<ul>
					<li>The cafe employees can pull orders from a database, which will display the time the order is scheduled for pick-up and then prepare it accordingly to be 
					ready when the customer arrives. Customers would order hot items at the risk of temperature having cooled by the time of pick-up.</li>
					<li>The orders would be placed on a separate table or counter in bags with the customers' names written on them and/or receipts attached. When 
					customers come to retrieve their orders, they could get in an express line to simply give their name or find the bag with their receipt. This is no 
					different from the operations at popular cafes like Starbucks where customers pay first and then claim their order (other than that wait-time will be significantly
					shorter).</li>
						<ol>
						<li>If identity fraud became an issue, students would merely show their student IDs instead of finding their own order.</li>
						</ol>
					<li>We will communicate these ideas with the Connections managers and get their feedback, but this is not essential to the building of the prototype and would
					probably be left to the cafe employees to decide anyway.
					</ul>
					<p>
					Logistics of website/app
					</p>
					<ul>
					<li>Ideally, this project would be an application for release on Android/iOS as well as a website because students are always on-the-go. However, due to our
					time constraints and the skill-sets of our team members, our time would be best spent focusing on the website and implementing the mobile application at a later
					time.</li>
						<ol>
						<li>We will buy a domain name for the website and discuss the possibility of turning the website over to dining services with the appropriate individuals.</li>
						<li>We will research the process of making an Android/iOS app for future reference.</li>
						</ol>
					</ul>
					<p>
					Employee-end of website
					</p>
					<ul>
					<li>How will Connections keep track what food is and is not available?</li>
						<ul>
						<li>Most people Connections employees do not know how to manually edit source code to update the cafe's inventory, nor should they have to. There 
						should be a way for Connections to have full control of the website but via a tailored user-interface of drop-down menus and a log-in that allows 
						only authorized employees to update what food is and is not available.</li>
						<li>This should be achievable because the vast majority of the cafe's menu is standardized (i.e., they sell the same baked goods every day) or 
						semi-standardized (they rotate types of coffee and soup).</li>
						<li>We will use a MySQL database to store the available food.</li>
						</ul>
					<li>How does Connections see the orders that have been placed online and prepare them?</li>
						<ul>
						<li>There will be an order queue page that allows employees to see customers' scheduled pick-up times. Employees will know from experience how
						much time to leave to prepare the specific items. If the customer is late to retrieve an order, employees will not be responsible for any undesired 
						changes in temperature/quality.</li>
						<li>There will be a way for employees to mark an order as complete to remove it from the queue.</li>
						</ul>
					</ul>
					
				<h3 id = "evaluation">Evaluation</h3>
				<p>We will test early iterations of the website ourselves, and after all the functions listed in our requirements are successfully implemented, we will evaluate 
				the website by sharing it with at least 20 students who are customers at Connections and in conjunction with the Connections staff. A user survey will collect 
				feedback from students and Connections employees. The survey will ask for quantified scores as well open-ended suggestions.
                </p>
				<h3 id = "act">Act</h3>
					<iframe width="960" height="569" src="//www.youtube.com/embed/h_XQG22bP_U?list=PL5aTD63kf1EBNeGyZYlX2N2F4QF61YQW9" frameborder="0" allowfullscreen></iframe>
			<h2 id = "needfinding">Need-finding</h2>
				<p>
				We distributed a survey to UR students, and received nearly 200 responses. Our findings indicate that Connections and Pura Vida are the least visited dining locations 
				on the campus. This confirms our hypothesis that these two cafes would benefit the most from an online-ordering system, and thus they are our priority locations
				to integrate with the website. 
				</br>
				<img style="display: inline-block; margin-left: 10px;" width="500px"; height="90px"; src="images/SurveyResult4.png">
				<br>
                Out of 175 students, 9 reported that they visit Connections daily and 21 reported that they visit 2-3 times per week, while the majority 83 students 
				reported that they only visit Connections monthly or less. Similar numbers were recorded for students' frequency of visits to Pura Vida. 79% of students 
				reported that they often choose not to get food on campus because they don't have time and 85% of students reported that waiting time has a moderate 
				to primary impact on their decision of where to get food. Over 71% of students said that they would go to Connections more if they could order food online 
				that would be ready when they arrive. 
				<br>
                <img style="display: inline-block; margin-left: 10px;" width="760px"; height="200px"; src="images/SurveyResult.png">
				<br>
				These findings provide statistical support to our initial claim that an online food ordering system through which students can order their food ahead of time
				and pick it up at their convenience will save them time, increase daily visits to Connections, and positively impact students' overall UR dining experience.
				</p>
				<iframe width="960" height="569" src="//www.youtube.com/embed/Ks-xu5HaZ7A" frameborder="0" allowfullscreen></iframe>
				<p>
				Assistant Food Service Director Andi Van Pelt confirms that the campus cafes Connections and Pura Vida get really busy between classes and at meal times and 
				that there is indeed a need for some solution to the speed of service issue. She gives us a lot of suggestions and raises some concerns, which made us rethink
				some functionality to make features more realistic and convenient to cafe employees.
				</p>
				<p>
				Dining Services Marketing Manager Kevin Aubrey describes Aramark's goals for improving customer satisfaction with university dining locations. He explains the
				importance of technology in these aims for improving and affirms that a system like ours could be adopted at the University of Rochester and easily integrated
				with Declining e-commerce. Kevin tells us about an existing app that Aramark is piloting called <a href="http://nyunews.com/2013/09/30/tap/">Tapingo</a> that 
				works essentially the same way that the Connections Connection would, confirming the validity and real-world application of our project.
				</p>

			<h2 id="prototypes"> Prototypes </h2>
				<h3>Prototype #1</h3>
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0133.jpg">
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0134.jpg">
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0135.jpg">
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0137.jpg">
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0138.jpg">
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0139.jpg">
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0140.jpg">
					<img style="vertical-align:middle;" width="40%" src="images/IMG_0141.jpg">
				<h3>Prototype #2</h3>
					<img width="40%" src="images/connections-homepage copy.png">
					<img width="40%" src="images/connections-page1 copy.png">
					<img width="40%" src="images/connections-page2 copy.png">
					<img width="40%" src="images/connections-page3 copy.png">
				<h3>Prototype #3</h3>
					<img width="100%" src="images/flowchart.png">
				<h3>Stages of Working Prototype</h3>
					<img src="images/Screenshot (11).png">
					<img src="images/Screenshot (12).png">
					<img src="images/Screenshot (13).png">
					<img src="images/orderqueueprototype.png">
					<img src="images/Screenshot (18).png">
					<img src="images/Screenshot (20).png">
					<img src="images/Screenshot (21).png">
					<img src="images/Screenshot (22).png">
			<h2 id="video">Video Demo</h2>	
				<iframe width="960" height="569" src="//www.youtube.com/embed/5Zn7_YaG7V4" frameborder="0" allowfullscreen></iframe>
				
			<h2 id="presentation">Presentation</h2>
				<iframe src="https://docs.google.com/a/u.rochester.edu/presentation/d/11YNfIcZHKcGPNM5SBhJ6WWlNanESStdbjZi3V1RS_8s/embed?start=false&loop=false&delayms=5000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
			
			<h2 id="poster">Poster</h2>
				<img src="images/PrestigeWorldwidePoster copy.png" width="960" height="720">
				
			<h2 id="evaluations">Evaluation</h2>
				<img src="images/evalpic.png">
				<p>
				We distributed the link to our website along with a survey (to ensure participation and avoid confusion, at the top of the survey was the link to the website and if 
				someone went through the motions of placing a test order on our website, they would be prompted to take the survey). The average rating of the website on a scale of 
				0-10 was 6 and the median was 7 (N=58). Some irrelevant "trolling" comments indicated that some participants were not taking the survey entirely seriously, which 
				explains the left-tailed distribution. 76% of participants like our pick-up time feature and 56% liked the menu options. We are happy to receive this positive endorsement 
				of what we think to be key elements of the website. The most common feedback we received was that participants would have liked to be able to use their UR net ID and
				pay online with declining because it is not waiting for the food to be prepared but rather waiting to pay that is most frustrating to students. What we can take away 
				from this, given that we fully intend to implement the net ID and declining systems and the feedback suggested other functionality we indeed have or indicated future 
				implementation of, is that we need to better communicate the purposes and features of our product so that users know about and can utilize them. The good news is that 
				once we have these systems fully implemented and more effectively advertise them, we fully expect our website's ratings to improve. 
				</p>
			
			<h2 id="future">The Future of the Project</h2>
            <ul>
				<li type=circle>Mobile application for Android/iOS</li>
				<ul>
					<li type=square>As previously mentioned, we understand the practicality of a mobile application for college students to place orders on-the-go, so this is 
					something we are working on now.</li>
				</ul>
				<li type=circle>Integrate more campus dining locations</li>
				<ul>
					<li type=square>Pura Vida</li>
					<li type=square>Starbucks</li>
					<li type=square>The Mel's Grab&Go </li>
				</ul>
				<li type=circle>Access to Declining and Net ID systems</li>
				<ul>
					<li type=square>As we described in our proposal, integration of the declining and net ID systems is dependent upon the university's and dining services' willingness
					to implement our product. We have had preliminary conversations with them and now that our prototype is more functional, we will follow up with them, but it is
					our understanding that Aramark is already looking to adopt a similar pre-existing product, which only goes to support our initial idea and need-finding.</li>
				</ul>
				<li type=circle>Recurring orders for frequent customers</li>
				<ul>
					<li type=square>Suppose a frequent customer always wants a bagel with cream cheese and a small coffee between 1:45 and 2:00 on Tuesday and Thursday afternoons. We want
					to provide an option for users to save past orders to order again as well as establish a way to automatically transact the same order on specified weeks of the
					semester. We will have to adjust the system to accommodate school breaks and to send reminders to the students, allowing them an opportunity to cancel the recurring
					order for that day if necessary.</li>
				</ul>
				<li type=circle>Paying online with flex/URos</li>
				<ul>
					<li>Campus cafes accept both declining and flex/URos at the register, so students should be able to opt to pay with flex/URos online, like they would with declining. 
					The same obstacles that exist for immediately implementing payment with declining apply here as well.</li>
				</ul>
				<li type=circle>Paying online with credit/debit card</li>
				<ul>
					<li type=square>Some students don't have declining or flex/URos and many students deplete their account balances before the end of each semester. For this reason, we want to
					provide the option for students to pay online with a credit or debit card. We are looking into the best ways to ensure secure transactions.</li>
				</ul>
			</ul>
			
			</div><!-- end content -->
</html>
</body>
