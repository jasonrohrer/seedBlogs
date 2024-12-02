</CENTER>
</TD></TR>
</TABLE>

</TD>
<TD BGCOLOR=#DDDDDD WIDTH=198 VALIGN=TOP>

<TABLE WIDTH=100% HEIGHT=100% CELLPADDING=5 CELLSPACING=0>
<TR><TD BGCOLOR=#DDDDDD VALIGN=TOP>


<?php
seedBlogs_showSearchBox(
    // 10 characters wide
    10,
    // show the Search button
    true );
?>


<BR>

<!-- Hard-code internal links -->
[<A HREF="index.php">Home</A>] [<A HREF="login.php">Account</A>]<BR><BR>


<B>News:</B><BR>

<?php
seedBlogFormatted(
    // name of this seed blog in the database
    "News",
    // 1 = show intro text below headlines
    // 0 = show only headlines
    1,
    // 1 = show author for each post
    // 0 = hide author
    0,
    // 1 = show creation date for each post
    // 0 = hide dates
    0,
    // 2 = allow custom order tweaking with up/down widgets
    // 1 = order by creation date (newest first)
    // 0 = order by expiration date (oldest first)
    1,
    // show at most 1 news items
    1,
    // skip none of them (start with first post)
    0,
    // show the archive link
    1,
    // hide the submission link from public
    0,
    // opening tags for each story block
    "<TABLE WIDTH=100% CELLSPACING=0 CELLPADDING=1>
     <TR><TD BGCOLOR=#000000>
     <TABLE WIDTH=100% CELLSPACING=0 CELLPADDING=6>
     <TR><TD BGCOLOR=#FFFFFF>",
    // closing tags for each story block
    "</TD></TR></TABLE></TD></TR></TABLE>",
    // opening tags for headlines
    "<B>",
    // closing tags for headlines
    "</B>",
    // opening tags for each text block
    "",
    // closing tags for each text block
    "",
    // story separator
    "<BR><BR>" );
?>

<BR>

<B>External Links:</B><BR>

<?php
// use a seedBlog to manage external links
seedBlog(
    // name of this seed blog in the database
    "external_links",
    // 1 = show intro text below headlines
    // 0 = show only headlines
    0,
    // 1 = show author for each post
    // 0 = hide author
    0,
    // 1 = show creation date for each post
    // 0 = hide dates
    0,
    // 2 = allow custom order tweaking with up/down widgets
    // 1 = order by creation date (newest first)
    // 0 = order by expiration date (oldest first)
    2,
    // show an unlimited number of links
    -1,
    // skip none of them (start with first post)
    0,
    // hide the archive link
    0,
    // hide the submission link from public
    0 );
?>

<BR>
<BR>
<BR>

<CENTER>
<A HREF="http://hcsoftware.sf.net/seedBlogs">
<IMG SRC="madeWithButton_dddddd.png" BORDER=0 WIDTH=96 HEIGHT=28></A>
</CENTER>

</TR>
</TABLE>


</TD></TR>
</TABLE>


</TR>
</TABLE>

</CENTER>



<?php
// compute current timestamp and last restoration time
connectToDatabase();

$result = queryDatabase( "SELECT CURRENT_TIMESTAMP;" );
$sqlTimestamp = mysql_result( $result, 0, 0 );

$unixTimestamp = strtotime( $sqlTimestamp );
// format as in    July 7, 2005 [4:52 pm]
$currentDateString = date( "F j, Y [g:i a]", $unixTimestamp );

global $tableNamePrefix;
$tableName = $tableNamePrefix . "refresh";

$result = queryDatabase( "SELECT last_refresh_date FROM $tableName;" );
$sqlTimestamp = mysql_result( $result, 0, 0 );

$unixTimestamp = strtotime( $sqlTimestamp );
// format as in    July 7, 2005 [4:52 pm]
$refreshDateString = date( "F j, Y [g:i a]", $unixTimestamp );

closeDatabase();
?>

<CENTER>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=3>

<TR><TD COLSPAN=2 ALIGN=CENTER>
[<A HREF="refresh_demo_tables.php">Restore Data Now</A>]
</TD></TR>

<TR>
<TD>Current time:</TD>
<TD><EM><?php echo $currentDateString; ?></EM></TD>
</TR>

<TR>
<TD>Last Restore:</TD>
<TD><EM><?php echo $refreshDateString; ?></EM></TD>
</TR>

</TABLE>
</CENTER>



</BODY>
</HTML>

