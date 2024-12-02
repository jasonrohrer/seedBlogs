
<?php

function openRoundedBox() {
?>

<TABLE BORDER=0 WIDTH=100% CELLPADDING=0 CELLSPACING=0> 
<TR>
<TD VALIGN=TOP WIDTH=20 BGCOLOR=#365066><IMG SRC="images/topLeft.png" WIDTH=20 HEIGHT=20></TD><TD BGCOLOR=#365066 VALIGN=MIDDLE ALIGN=CENTER ROWSPAN=2>

<?php
    }



function closeRoundedBox() {
?>

</TD>
<TD VALIGN=TOP WIDTH=20 BGCOLOR=#365066><IMG SRC="images/topRight.png" WIDTH=20
HEIGHT=20></TD>
</TR>


<TR>
<TD VALIGN=BOTTOM WIDTH=20 BGCOLOR=#365066><IMG SRC="images/bottomLeft.png"
WIDTH=20 HEIGHT=20></TD>
<!--<TD BGCOLOR=#365066></TD>-->
<TD VALIGN=BOTTOM WIDTH=20 BGCOLOR=#365066><IMG SRC="images/bottomRight.png" WIDTH=20 HEIGHT=20></TD>
</TR>
</TABLE>
      
<?php
    }
?>



<?php

function openMiniModule( $inModuleTitle ) {
?>

<TABLE BORDER=0 WIDTH=100% CELLPADDING=0 CELLSPACING=0> 
<TR>
<TD VALIGN=TOP WIDTH=20 BGCOLOR=#365066><IMG SRC="images/topLeft.png" WIDTH=20
HEIGHT=20></TD>
<TD BGCOLOR=#365066 NOWRAP><FONT COLOR=#FFFF00><B><?php echo $inModuleTitle; ?></B></FONT></TD>
<TD VALIGN=TOP WIDTH=20 BGCOLOR=#365066><IMG SRC="images/topRight.png" WIDTH=20
HEIGHT=20></TD>
</TR>

<TR>
<TD BGCOLOR=#DDDDDD VALIGN=BOTTOM><IMG SRC="images/gray_bottomLeft.png" WIDTH=20 HEIGHT=20></TD>
<TD VALIGN=TOP ALIGN=LEFT BGCOLOR=#DDDDDD>

<?php
    }



function closeMiniModule() {
?>

</TD>
<TD BGCOLOR=#DDDDDD VALIGN=BOTTOM><IMG SRC="images/gray_bottomRight.png" WIDTH=20 HEIGHT=20></TD>
</TR>
</TABLE>
      
<?php
    }
?>
