<?php include_once( "functions.php" ); ?>


</TD></TR></TABLE>


</TD>

<TD WIDTH=30% VALIGN=TOP BGCOLOR=#FFFFFF>

<?php openMiniModule( "seedBlogs Features" )?>

<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=0>


<?php 

function bulletRow( $inText ) {

?>

<TR><TD COLSPAN=3><IMG SRC="images/gray_1pixel.png" WIDTH=1 HEIGHT=15></TD></TR>
<TR><TD VALIGN=TOP WIDTH=10><IMG SRC="images/gray_1pixel.png" WIDTH=1 HEIGHT=5><BR><IMG SRC="images/bullet.png" WIDTH=10 HEIGHT=5 ALIGN=MIDDLE BORDER=0></TD>
    <TD WIDTH=2><IMG SRC="images/gray_1pixel.png" WIDTH=2 HEIGHT=1></TD>
    <TD><?php echo $inText; ?></TD></TR>

<?php
    }

bulletRow( "Modular PHP / MySQL building block" );

bulletRow( "Add dynamic content to any website" );

bulletRow( "Build your website <EM>your</EM> way" );

bulletRow( "Entire post database is searchable" );

bulletRow( "Simple and effective user management system" );

bulletRow( "RSS 2.0 feed support" );
?>



<TR><TD COLSPAN=3><IMG SRC="images/gray_1pixel.png" WIDTH=1 HEIGHT=15></TD></TR>
</TABLE>

<?php closeMiniModule()?>
<BR>


<?php openMiniModule( "seedBlogs in Action" )?>


<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=0>


<?php 

function bulletLinkRow( $inText, $inURL ) {
	bulletRow( "<A HREF=\"$inURL\">$inText</A>" );
    }

bulletLinkRow( "seedBlogs Demo", 
               "http://northcountrynotes.org/seedBlogs_demo/");

bulletLinkRow( "My Worklog",
               "http://northcountrynotes.org/jason-rohrer/worklog/" );

bulletLinkRow( "Seedcorn Website",
               "http://www.seedcorn.org/index.php" );
?>

<TR><TD COLSPAN=3><IMG SRC="images/gray_1pixel.png" WIDTH=1 HEIGHT=15></TD></TR>
</TABLE>

<?php closeMiniModule()?>


<BR>



<?php openMiniModule( "Project Links" )?>


<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=0>


<?php 

bulletLinkRow( "Support My Work", 
               "http://hcsoftware.sourceforge.net/jason-rohrer/supportMyWork.php");


bulletLinkRow( "Suggest Features", 
               "http://sourceforge.net/tracker/?group_id=17004&atid=367004");

bulletLinkRow( "Report Bugs", 
               "http://sourceforge.net/tracker/?group_id=17004&atid=117004");
?>

<TR><TD COLSPAN=3><IMG SRC="images/gray_1pixel.png" WIDTH=1 HEIGHT=15></TD></TR>
</TABLE>

<?php closeMiniModule()?>






<BR>
<BR>
Hosted by:<br>
<a href="http://sourceforge.net"> <img
src="http://sourceforge.net/sflogo.php?group_id=17004"
width="88" height="31" border="0" alt="SourceForge
Logo"></a>
<BR><BR>

</TD>

</TR>
</TABLE>

<?php openRoundedBox(); ?>
<FONT COLOR=#FFFFFF>seedBlogs source code is free software (<A HREF="http://www.gnu.org/licenses/gpl.html"><FONT COLOR=#FFFF00>GNU GPL</FONT></A>).<BR>
All website content has been placed in the public domain.</FONT>
<?php closeRoundedBox(); ?>


</TD>
</TR>
</TABLE>
</CENTER>

</BODY>

</HTML>


