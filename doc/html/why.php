<?php include_once( "header.php" ); ?>


<H1>Why seedBlogs?</H1>

<FONT SIZE=5><B>The Problem</B></FONT>
You need to build a website for a small organization, say a community action
group or some other type of non-governmental organization.
The website is mostly filled with static content (essentially an online brochure), but the organization wants to update its website periodically with new information (for example, meeting minutes, upcoming events, or news items).
Furthermore, the organization is largely populated with non-technical people (you, the web master, may be the only one capable of updating a website "the old fashioned way" using FTP or SCP).
Did I mention that you are a volunteer web master?<BR>
<BR>
Most of these organizations are currently using static websites:  updates are funneled through one person (the web master) and posted manually by editing HTML files.
Web masters burn out quickly under such a tedious workload.
There must be a better solution, maybe something from the "pushbutton publishing" revolution.<BR>
<BR>
<B>What about generic blogging software?</B>  
Blogs make it easy for non-techs to post updates, but they are quite rigid in terms of presentation (a single list of posts).
Integrating a generic blog into an existing, mostly-static brochure in a clean way would require a lot of software customization.
With most blogging software, the blog <EM>is</EM> the website, not just part of the website.<BR>
<BR>       
<B>What about monolithic community portals?</B>
CMS/portal packages like <A HREF="http://www.drupal.org">Drupal</A>, <A HREF="http://www.civicspacelabs.org">CivicSpace</A>, and <A HREF="http://www.mamboserver.com">Mambo</A> are generally more flexible and customizable than blogs, but they are also quite complicated.
You may not need to know HTML to post content, but wading through the various configuration and administration screens (hey---even the front-page screen) can be overwhelming and frustrating.
Furthermore, these systems are too big and feature-rich for your organization, and their focus on many-user communities (with prominent log-in forms, etc.) is simply overkill.
As with generic blog packages, the CMS <EM>is</EM> the website and is difficult to integrate as a subordinate part of an existing brochure site.
The irony here is that these monolithic portals are <EM>designed</EM> with your kind of organization in mind.
The problem, perhaps, is that these portals try to be all things to all organizations, thus becoming overly complicated.
<BR>
<BR>       

<FONT SIZE=5><B>The Solution</B></FONT> 
What we need is a simple, modular building block that we can use to add dynamic content to any website.
Not a blog-centric website or a gigantic CMS, but a kind of <EM>mini-blog</EM> that we can "plug in" wherever we need it.<BR>
<BR>
<B>seedBlogs</B> is exactly this kind of website-building primitive.
After setting up a single <A HREF="http://mysql.org">MySQL</A> database and installing two PHP files (seedBlogs.php and settings.php), you can plug new seedBlogs into your website as you need them.
You are free to design your website however you want, inserting dynamic, updatable sections where they make sense, and hand-coding static content wherever is appropriate.
After you set up a few seedBlogs on your site, posting and editing dynamic content becomes just as easy as using webmail.
In other words, your non-technical organization members will be able to maintain the website on their own with very little help from you.<BR>
<BR>   
For example, you might have a "features" section on your front page with a list of recent stories or updates---you could use a seedBlog for this.
You might also have a "news" box in a sidebar with recent headlines---seedBlogs can handle this as well.
On a completely separate sub-page, you might have another features-type section, but this time with updates about one particular sub-project that your organization is running---seedBlogs can do this too.<BR>
<BR>
How much coding does it take to insert a seedBlog into your website?
Almost none.
The following PHP block is all that is needed to create and display a seedBlog that is named "news" in the database:
<CENTER><TABLE BORDER=0><TR><TD>
<PRE>
&lt;?php
 include_once( "seedBlogs.php" );
 seedBlog( "news", 0 );
?&gt;
</PRE>
</TD></TR></TABLE></CENTER>

The first line in the block includes the <TT>seedBlogs.php</TT> file so that the various seedBlogs functions are available.
The second line contains a <TT>seedBlog</TT> function call, which displays a seedBlog.
The argument <TT>0</TT> after "news" tells seedBlogs to show only headlines and hide the blocks of intro text for each post.
A slightly more complex function call, <TT>seedBlogFormatted</TT>, can be used to control exactly how a given seedBlog is presented.
Two additional functions, <TT>seedBlogs_showLoginBox</TT> and <TT>seedBlogs_showSearchBox</TT>, can be used to display login and search forms wherever you want them.
These four simple function calls allow you to sculpt dynamic content into your website, leaving the rest of your site's design and structure up to you.<BR>
<BR>

<FONT SIZE=5><B>Flexibility from Simplicity</B></FONT> Despite its simple design, <B>seedBlogs</B> is an amazingly flexible and powerful tool for dynamizing websites.
Several advanced features are included.
For example, all posts in your seedBlogs system are fully searchable, and RSS 2.0 feeds can be generated automatically.<BR>
<BR>  

The real zinger is that seedBlogs can be used to do almost everything that blog and CMS packages can do, but with more design freedom and less headache.
For example, if you want to build a standard-issue blog site, you can simply display a single seedBlog as the centerpiece of your main page.
If you want a community-driven portal site featuring user-submitted content, you can do that too:  simply display the seedBlogs login box in a prominent location to give your site the feel of a login-centric CMS.<BR>
<BR>



<FONT SIZE=5><B>A Focus on Security</B></FONT> seedBlogs was implemented using secure coding practices, and several factors contribute to the security of a seedBlogs installation.
First, seedBlogs is completely database-driven, and the code never manipulates the file system or runs shell commands.
This implementation style eliminates a large number of potential security holes.
Second, all user-submitted data that is passed into SQL queries is filtered to remove characters that might break the query.
Thus, malicious users cannot manipulate the database in unexpected ways by submitting specially-formatted data to seedBlogs.
More generally, seedBlogs development conforms to the best security practices suggested by a number of sources.
For more information, see:
<CENTER><TABLE BORDER=0><TR><TD>
--<A HREF="http://www.php.net/manual/en/security.php">Security (PHP Manual)</A><BR>
--<A HREF="http://www.sklar.com/page/article/owasp-top-ten">OWASP Top Ten Vulnerabilities</A><BR>
--<A HREF="http://www.devshed.com/c/a/PHP/PHP-Security-Mistakes/">PHP Security Mistakes</A><BR>
</TD></TR></TABLE></CENTER> 
<BR>


<?php include_once( "footer.php" ); ?>
