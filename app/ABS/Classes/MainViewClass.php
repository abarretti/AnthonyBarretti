<?php namespace ABS\Classes;

class MainViewClass
{
	private $model;

	public function __construct(ModelClass $model)
	{
		$this->model= $model;
	}

	public function output($page)
	{
		if ($page=="home")
		{
		return '<main class="home">
		<figure class="left">
			<img src= "imgs/headShot.jpg" 
			alt= "Head Shot">
    	</figure>
    	<div class="right">
			<h2>Hi, I&#39;m Anthony! Welcome and thank you for visiting my site.</h2>
			<p>I am a motivated, multi-skilled Data Analytics and Software Engineering professional who is currently employed as a Product Manager within Wayfair&#39;s Data Integration team. My primary functions are to provide support, offer analysis and drive innovation pertaining to Wayfair&#39;s Electronic Data Interchange (EDI) platform. I also possess six years of proven experience providing data analytics, business intelligence, accounting and financial services support in diverse industries with corporate clients.</p>
			<p>I received my BS in Accounting from Rutgers University earning honors as an inductee of both Beta Alpha Psi and the National Society of Collegiate Scholars. Outside of the classroom, I served as President and Treasurer of my fraternity (Alpha Chi Rho). Following the completion of my undergraduate degree, I immediately matriculated into the Rutgers Graduate Business School and earned my Masters in Financial Accounting the following year. After five years of professional development providing accounting and financial services support, I entered the University of Oxford&#39;s Data and Systems Analysis program to enhance my Software Engineering and Data Science skill set.</p>
		</div>
		</main>';
		}

		if ($page=="about")
		{
			return	'<main class="about">
		<aside class= "left">
			<img src= "imgs/albertHall.jpg" 
			alt= "Albert Hall">
			<img src= "imgs/reichstag.jpg" 
			alt= "Reichstag">
			<img src= "imgs/stonePony.jpg" 
			alt= "Manager Shot">
    	</aside class="right">
    	<div class="right">
			<h2>About Me</h2>
			<p>I first discovered my passion for IT in 2011 during my tenure as a Music Industry Manager. It was through this role that I received the opportunity to assist with web design and online promotion for three music projects. I was able to utilize my basic HTML and JavaScript skills in a professional capacity, which I had learned from Rutgers University’s Computer Applications course. I am proud to say that the online following of the music projects rose from 1,500 followers to over 20,000 during my time in this role. Furthermore, our efforts led to a production contract with a “Platinum Record Winning” Producer and also a record contract with Canadian-American Records. Similar to the composition of music itself, I greatly enjoyed the creative nature of these IT-routed tasks along with the opportunity to solve problems through the utilization of imperative knowledge.</p>
			<p>My interest in IT was later reaffirmed when I accepted employment as an Accountant for Covanta Energy. In this role, I utilized and gained competency with the company’s ERP system, Oracle PeopleSoft. Although my position was in Accountancy, my primary passion and interest during my tenure was learning about the functionality of PeopleSoft as an Accounting Information System. I was intrigued by the system’s comprehensible interfaces, which allowed users the ability to effortlessly interrogate the company’s data with ease. This provoked a desire to become more knowledgeable in IT in general. My employing Director granted me security clearance as a “power” user so I could provide the Accounts Receivable department with basic application support. My Manager also appointed me the primary staff tester for the UAT testing for the Corporation’s upgrade to PeopleSoft 9.2. This allowed me to work closely with IT Consultants as we collaborated on testing and together resolved issues with the new system. As my assignment progressed, I developed a closer relationship with Covanta’s Technical and Application Support Analysts. I began to strengthen my SQL skills so that I could better understand how to interrogate databases. I also began studying the concepts of object-oriented programming to further understand the back-end functionality of the applications offered by ERP Systems.</p>
			<p>After my assignment at Covanta, I chose to re-enroll at university to continue my IT education with the intention of eventually completing a full transition into an IT career. I began my studies in October 2015 as a part-time student of the Advanced Diploma in Data &amp; Systems Analysis program at the University of Oxford. It was through this program that I was first introduced formally to the software development lifecycle. The program also re-enforced my understanding of dataflow diagramming and database architecture, particularly as it relates to the Relational Model. The final element of the program focused on object-oriented programming in Java. The course culminated in a final project in which we designed a database and software system for a fictitious theater company. I am proud to say that I graduated from the program with a 98.20% course average and earned distinction.</p>
			<p>	After my studies, I accepted an internship in Business Intelligence at the Berlin start-up company, Move24. It was in this role that I first began to put my newly acquired skillset to use with advanced data modeling to assist the Sales, Marketing, Business Development and Operations departments. I also utilized SQL daily to query the company’s database as needed, and was introduced to Python to extract data as necessary from various sources.</p>
			<p>At the conclusion of my internship, I began full-time employment as a Senior Product Associate within the Data Integration team at Wayfair. In my current role, I assist with monitoring and troubleshooting data transfers with the company’s EU business partners. I also still utilize my business intelligence skillset to create, calculate and analyze KPI’s for presentation to Senior Management. The other aspect of the position is to continuously drive tech-related projects across multiple engineering departments to achieve data integration objectives.</p>
			<p>My IT journey thus far has been nothing short of amazing! I personally feel just as passionate today as when I started, and I am very excited to see what the future has in store as I continue my journey.</p>
			<p>Thank you again for taking the time to visit my website!</p>
		</div>
	</main>';
		}

		if ($page=="cv")
		{
			return '<main>
		<section>
			<div class="head" id="education">
				<h1>Education</h1>
			</div>
			<div class="left education">
				<img src= "imgs/oxford.png"
				alt= "Oxford">
    		</div>
    		<div class="right education">
    			<h2>University of Oxford</h2>
    			<p>Oxford, England, United Kingdom</p>
    			<p>Advanced Diploma in Data &amp; Systems Analysis, October 2016</p>
    		 	<ul> 
			 		<li>GPA: 1.0 (USA GPA Equivalent: 4.0)</li>
			    	<li>Distinction: 98.20% Course Average</li>
		    	</ul>
    		</div>
    		<div class="left education">
				<img src= "imgs/rutgers.png"
				alt= "Rutgers">
    		</div>
    		<div class="right education">
    			<h2>Rutgers University</h2>
    			<p>New Brunswick, New Jersey, United States of America</p>
    			<p>Masters of Accountancy in Financial Accounting, May 2011</p>
    			 <ul> 
			 		<li>GPA: 3.57 (EU GPA Equivalent: 1.43)</li>
		     	</ul>
    		</div>
    		<div class="left education">
				<img src= "imgs/rutgers.png"
				alt= "Rutgers">
    		</div>
    		<div class="right education">
    			<h2>Rutgers University</h2>
    			<p>New Brunswick, New Jersey, United States of America</p>
    			<p>Bachelor of Science &amp; Minor in Music, May 2010</p>
    			 <ul> 
			  		<li>GPA: 3.36 (EU GPA Equivalent: 1.64)</li>
			    	<li>Beta Alpha Psi– Accounting and Finance Honors Fraternity, inducted in April 2009</li>
			    	<li>National Society of Collegiate Scholars, inducted in December 2006</li>
		   		</ul>
    		</div>
    	</section>
    	<section>
			<div class="head" id="skills">
				<h1>Skills</h1>
				<a href="#top"><img src= "imgs/arrowUp.png"
				alt= "Arrow Up"></a>
			</div>
			<div class="left skills">
				<img src= "imgs/microsoftOffice.png"
				alt= "Microsoft Office">
				<img src= "imgs/microsoftSQLServer.png"
				alt= "Microsoft SQL Server">
				<img src= "imgs/hTML5_CSS_JavaScript.png"
				alt= "HTML5, CSS3, JavaScript">
				<img src= "imgs/phpElephant.png"
				alt= "PHP">
				<img src= "imgs/python.png"
				alt= "Python">
				<img src= "imgs/rLogo.png"
				alt= "R">
    		</div>
    		<div class="right skills">
    			<h2>Microsoft Office (Excel, Word, PowerPoint, Access)</h2>
    			<ul><li>10+ years of applicable experience</li></ul>
    			<h2>Structured Query Language (SQL)</h2>
				<ul><li>3 years of applicable experience and 1 year utilizing Microsoft SQL Server</li></ul>
				<h2>HTML, CSS3 &amp; JavaScript</h2>
				<ul><li>1.5 years of applicable experience and 2 Coursera Certifications earned</li></ul>
				<h2>PHP</h2>
				<ul><li>1 year of applicable experience and 1 Code Academy Certification earned</li></ul>
				<h2>Python</h2>
				<ul><li>1 year of applicable experience and 5 Coursera Certifications earned</li></ul>
				<h2>R</h2>
				<ul><li>3 months of applicable experience and 1 Coursera Certifications earned</li></ul>
				<h2>Extensible Markup Language (XML)</h2>	
				<ul><li>1 year of applicable experience creating documents in an Electronic Data Interchange setting</li></ul>
				<h2>File Transfer Protocol (FTP)</h2>
				<ul><li>1 year of applicable experience in an Electronic Data Interchange setting</li></ul>
				<h2>EDIFACT</h2>
				<ul><li>1 year of applicable experience creating EDI documents for file transfer</li></ul>
    		</div>
 		</section>   
    	<section>
			<div class="head" id="experience">
				<h1>Relevant Experience</h1>
				<a href="#top"><img src= "imgs/arrowUp.png"
				alt= "Arrow Up"></a>
			</div>
			<div class="left experience">
				<img src= "imgs/wayfair.png"
				alt= "Wayfair">
    		</div>
    		<div class="right experience">
    			<h2>Wayfair</h2>
    			<p>Berlin, Germany</p>
    			<p>Product Manager - Data Integration, August 2016 - present</p>
    			<ul> 
			  		<li>Supervise and troubleshoot operational and finance-related data transfers for EU business partners with aggregate volume of over 100K files daily.</li>
					<li>Create and develop requirements specifications for the implementation of new carrier and supplier data integrations to increase profitability through efficient and cost-effective EDI.</li>
					<li>Create, calculate and analyze EDI business metrics for presentation to Senior Management and other stakeholders while simultaneously offering proposals for KPI improvement and growth.</li>
					<li>Effectively manage projects across multiple engineering departments to achieve data integration objectives requiring substantial and diverse input.</li>
		   		</ul>
    		</div>
    		<div class="left experience">
				<img src= "imgs/move24.png"
				alt= "Move 24">
    		</div>
    		<div class="right experience">
    			<h2>Move24</h2>
    			<p>Berlin, Germany</p>
    			<p>Business Intelligence Intern, May 2016 - August 2016</p>
    			<ul> 
			  		<li>Construct “backend-pricing” tools through “Big Data” analysis to increase sales and improve profitability pertaining to international business transactions.</li>
					<li>Develop optimization models relating to operations management in order to maximize profit and reduce costs for all European divisions.</li>
					<li>Extract data from the company databases through SQL, and subsequently formulate statistical models to identify KPI’s for the Sales, Marketing, Business Development and Operations departments.</li>
					<li>Create automated reports for Senior Management using Excel to formulate data extracted from multiple sources, including the Company’s CRM systems, databases and other external sources.</li>
		   		</ul>
    		</div>
    			<div class="left experience covanta">
				<img src= "imgs/covanta.png"
				alt= "Covanta">
    		</div>
    		<div class="right experience covanta">
    			<h2>Covanta</h2>
    			<p>Morristown, New Jersey, United States of America</p>
    			<p>Accounting Consultant, August 2015 - May 2016</p>
    			<p>Billing Analyst, August 2014 - August 2015</p>
    			<p>Accounts Receivable Coordinator, March 2014 - August 2014</p>
    			<ul> 
			  		<li>Primary Billing Staff UAT tester for the corporation’s Oracle PeopleSoft 9.2 upgrade with security clearance as a system power user</li>
					<li>Process approximately $1 Billion of invoices comprising the corporation’s annual revenue, while assuming responsibility for manual invoice editing and the correction of billing interface errors.</li>
					<li>Supervise and train a team of 4 cash application coordinators and 2 billing administrators</li>
					<li>Construct work papers for annual and quarterly external audits for billing and accounts receivable functions.</li>
		   		</ul>
    		</div>
    		<div class="left experience eraz">
				<img src= "imgs/runningLate.jpg"
				alt= "Running Late">
				<img src= "imgs/circusAnimal.jpg"
				alt= "Circus Animal">
    		</div>
    		<div class="right experience eraz">
    			<h2>Erasmus, Running Late &amp; Circus Animal Music</h2>
    			<p>Madison, New Jersey, United States of America</p>
    			<p>Manager, May 2011 - March 2014</p>
    			<ul> 
			  		<li>Manager of promotion, marketing, operations, budgeting and finances of a music project with 20,000 registered followers world wide and over 100,000 website hits across all platforms</li>
					<li>Increased the groups online following from 1,200 followers to 20,000 followers during tenure as manager</li>
					<li>Record and budget expenses (travel, marketing) and revenues (from ticket and merchandise sales) for project totaling $40,000 in FY 2012</li>
					<li>Notable accomplishments include: booking of 40 performances in the greater New York area and management of the recording and release of an EP and full-length album with 3 singles, the filming of a music video and full-length live show, three professional photo shoots, and $5,000 of merchandise sales.</li>
		   		</ul>
    		</div>
    	</section>
    	<section>
			<div class="head">
				<h1>Pre-Graduate Experience</h1>
				<a href="#top"><img src= "imgs/arrowUp.png"
				alt= "Arrow Up"></a>
			</div>
			<div class="left experience mspc">
				<img src= "imgs/mspc.png"
				alt= "MSPC">
    		</div>
    		<div class="right experience mspc">
    			<h2>MSPC - Certified Public Accountants &amp; Advisors</h2>
    			<p>Cranford, New Jersey, United States of America</p>
    			<p>Staff Accountant, January 2011 - May 2011</p>
    			<ul> 
			  		<li>Member of four selected audit teams with clients ranging from small partnerships to corporations</li>
					<li>Managed the control of confirmations for annual audits pertaining to cash, accounts receivable, accounts payable, legal department, related parties, lease agreements, and insurance</li>
					<li>Conducted inventory counts on site for various merchandising and manufacturing clients</li>
					<li>Prepared work papers for multiple aspects of each audit including the audit of cash, the revenue cycle, and the expenditure cycle</li>
		   		</ul>
		   	</div>
			<div class="left experience mirra">
				<img src= "imgs/mirra.png"
				alt= "Mirra">
    		</div>
    		<div class="right experience mirra">
    			<h2>Mirra &amp; Associates, LLC</h2>
    			<p>Hillsborough, New Jersey, United States of America</p>
    			<p>Intern / Accountant, August 2008 - May 2009</p>
    			<ul> 
			  		<li>Assisted in the audit of approximately 250 condominium complexes operated by ten management companies throughout New Jersey.</li>
					<li>Prepared work papers pertaining to multiple aspects of each audit including revenue cycles, cash disbursements, and receivables.</li>
					<li>Drafted annual financial statements including the balance sheet, income statement, and statement of cash flows for approximately 250 companies.</li>
					<li>Member of a selected auditing team, partaking in multiple field visits at various clients.</li>
		   		</ul>
		   	</div>
		</section>
		<section>
			<div class="head" id="leadership">
				<h1>University Leadership</h1>
				<a href="#top"><img src= "imgs/arrowUp.png"
				alt= "Arrow Up"></a>
			</div>
			<div class="left experience axp">
				<img src= "imgs/aXP.jpg"
				alt= "Alpha Chi Rho">
    		</div>
    		<div class="right experience axp">
    			<h2>Alpha Chi Rho Fraternity - Beta Phi Chapter</h2>
    			<p>New Brunswick, New Jersey, United States of America</p>
    			<p>President, Fall Semester 2008</p>
    			<p>Treasurer, Spring &amp; Fall Semesters 2007</p>
    			<ul> 
			  		<li>CEO and official fraternity representative of internal and external affairs</li>
					<li>Managed cash receipts and expenditures for fraternity of over 50 active members.</li>
					<li>Managed annual cash flow of $175,000</li>
					<li>Reduced fraternity’s debt by $2,500 during term</li>
		   		</ul>
		   	</div>
		</section>
		<section>
			<div class= "head" id="coursework">
				<h1>Relevant Coursework</h1>
				<a href="#top"><img src= "imgs/arrowUp.png"
				alt= "Arrow Up"></a>
    		</div>
    		<div class="courseWork">
    			<ul>
    				<li>System Development Lifecycle &amp; Management</li>
    				<li>System Analysis &amp; Design - Data Driven &amp; Procedural Techniques</li>
    				<li>System Analysis &amp; Design - Data Organization</li>
    				<li>System Analysis &amp; Design - Objects &amp; Architecture</li>
    				<li>Computer Applications for Business</li>
    				<li>Accounting Information Systems</li>
    				<li>Advanced Accounting Information Systems</li>
    				<li>Management Information Systems</li>
    				<li>Statistical Methods of Business</li>
    			</ul>
    		</div>
    	</section>
	</main>';
		}

		if ($page=="contact")
		{
			return '<main class="contact">
		<figure class="left">
			<img src= "imgs/headShot.jpg" 
			alt= "Head Shot">
    	</figure>
    	<div class="right">
			<h2>Thank you again for visiting my site!</h2>
			<p>Please feel free to contact me at aebarretti87@gmail.com or send me a <a href="https://www.linkedin.com/in/anthony-barretti-95a57687/" target="_blank">LinkedIn</a> message!</p>
		</div>
		</main>';
		}
	}//function end

}//class end

?>