<?php

// this script silently restores the demo database and then redirects
// to the main index page

include( "seedBlogs.php" );


global $tableNamePrefix;

connectToDatabase();



// first, drop all three tables
$tableName = $tableNamePrefix . "order_map";
queryDatabase( "drop TABLE $tableName" );


$tableName = $tableNamePrefix . "posts";
queryDatabase( "drop TABLE $tableName" );


$tableName = $tableNamePrefix . "users";
queryDatabase( "drop TABLE $tableName" );

// extra table for refresh date
$tableName = $tableNamePrefix . "refresh";
queryDatabase( "drop TABLE $tableName" );



// now re-create tables and re-insert all demo data


$tableName = $tableNamePrefix . "order_map";

queryDatabase(
 "CREATE TABLE $tableName (
  blog_name varchar(255) NOT NULL default '',
  map longtext NOT NULL,
  PRIMARY KEY  (blog_name) )" );


queryDatabase(
"INSERT INTO $tableName VALUES ('news','test_1125602552_0\ntest_1123013343_0');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('external_links','test_1125601531_0\ntest_1125601590_0\ntest_1123183225_0\n');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('static_blocks','test_1123183350_0');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('features','test_1125602090_0\ntest_1123184521_0');" );





$tableName = $tableNamePrefix . "posts";

queryDatabase(
 "CREATE TABLE $tableName (
  post_id varchar(255) NOT NULL default '',
  blog_name varchar(255) NOT NULL default '',
  user_id varchar(20) NOT NULL default '',
  creation_date datetime NOT NULL default '0000-00-00 00:00:00',
  change_date datetime NOT NULL default '0000-00-00 00:00:00',
  expiration_date datetime default NULL,
  allow_comments tinyint(4) NOT NULL default '0',
  show_permalink tinyint(4) NOT NULL default '0',
  approved tinyint(4) NOT NULL default '0',
  removed tinyint(4) NOT NULL default '0',
  subject_line varchar(60) NOT NULL default '',
  intro_text longtext,
  body_text longtext,
  PRIMARY KEY  (post_id) );" );



queryDatabase(
"INSERT INTO $tableName VALUES ('test_1123013343_0','news','test','2005-08-02 16:09:03','2005-09-01 15:17:55',NULL,0,0,1,1,'test','test','test');" );

queryDatabase( "INSERT INTO $tableName VALUES
('test_1123183225_0','external_links','test','2005-08-04 15:20:25','2005-08-04 15:20:25',NULL,0,0,1,0,'Google Search','http://www.google.com','');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('test_1123183350_0','static_blocks','test','2005-08-04 15:22:30','2005-09-01 15:09:00',NULL,0,0,1,0,'Welcome to seedBlogs','This site demonstrates the power of [urls=http://hcsoftware.sf.net/seedBlogs]seedBlogs[/urls], a tool for crafting dynamic websites.  Unlike monolithic content management systems (CMSs) or blogging packages, seedBlogs does not hand you a rigid, working website \"right out of the box.\"  Instead, seedBlogs lets you build your website however you like and using whatever design techniques or tools you like.  You simply plug seedBlogs into your design wherever you need dynamic, end-user editable content.  You can even dynamize an existing, static website using seedBlogs---possibly with less than an hour of work.\r\n\r\nThough this particular site might look rather blog- or CMS-like, do not let this demo limit your appreciation of how flexible seedBlogs is.  A CMS-like site just happens to be the best way to demonstrate seedBlogs\' spectrum of features.  \r\n\r\nIn fact, the text block you are reading right now is being managed by seedBlogs and can be edited from a web browser.  If you want to build a customized website that is editable by end-users, no matter what the format, seedBlogs can help you do it.','');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('test_1123184521_0','features','test','2005-08-04 15:42:01','2005-09-01 15:01:32',NULL,1,1,1,0,'Seedcorn Website','The [urls=http://www.seedcorn.org]Seedcorn[/urls] website is another example of what can be done with seedBlogs.  The needs of this particular organization (along with several unsuccessful attempts to wrestle the [urls=http://drupal.org]Drupal[/urls]-based [urls=http://civicspacelabs.org]CivicSpace[/urls] into submission) inspired the development of seedBlogs in the first place.','This dynamic, organization-editable site was built from scratch in less than three days of part-time work. The Seedcorn site uses seven seedBlogs, with the three most visibly obvious seedBlogs being used to display Announcements, Upcoming Events, and Meeting Minutes. The four additional seedBlogs are used to control the \"features\" centerpiece on the main page and the three lists in the sidebar (Organization, Programs, and Issues).');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('test_1125601531_0','external_links','test','2005-09-01 15:05:31','2005-09-01 15:05:31',NULL,0,0,1,0,'seedBlogs Homepage','http://hcsoftware.sf.net/seedBlogs','');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('test_1125601590_0','external_links','test','2005-09-01 15:06:30','2005-09-01 15:06:30',NULL,0,0,1,0,'Jason Rohrer\'s Homepage','http://jasonrohrer.n3.net','');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('test_1125602090_0','features','test','2005-09-01 15:14:51','2005-09-01 15:14:51',NULL,1,1,1,0,'seedBlogs supports BBCode','seedBlogs supports BBCode mark-up in all posts.  This mark-up style was introduced by the [urls=http://phpbb.com]phpBB project[/urls].  For more information about the kinds of mark-up tags that BBCode supports, see [urls=http://www.phpbb.com/phpBB/faq.php?mode=bbcode]this document[/urls].','');" );

queryDatabase(
"INSERT INTO $tableName VALUES ('test_1125602552_0','News','test','2005-09-01 15:22:32','2005-09-01 15:29:09',NULL,0,0,1,0,'Blogging and Driving','Searching Google for the word \"blog\" returns 163 million results.  To understand just how popular blogging is, consider the fact that searching for the word \"car\" returns only 192 million results.','');" );





$tableName = $tableNamePrefix . "users";

queryDatabase( 
 "CREATE TABLE $tableName (
  user_id varchar(20) NOT NULL default '',
  password_md5 varchar(32) NOT NULL default '',
  email varchar(255) default NULL,
  session_id varchar(32) default NULL,
  approved tinyint(4) NOT NULL default '0',
  administrator tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (user_id) );" );


queryDatabase( 
"INSERT INTO $tableName VALUES ('test','7377cd6255cd1b3985f59a8f84625a3e','test@test.com',NULL,1,1);" );



// extra table in demo site to track last refresh date
$tableName = $tableNamePrefix . "refresh";

queryDatabase(
 "CREATE TABLE $tableName (
  last_refresh_date datetime NOT NULL default '0000-00-00 00:00:00' );" );

queryDatabase( 
"INSERT INTO $tableName VALUES ( CURRENT_TIMESTAMP );" );

 
closeDatabase();


// show main page
global $mainSiteURL;
// redirect
header( "Location: $mainSiteURL" );

?>