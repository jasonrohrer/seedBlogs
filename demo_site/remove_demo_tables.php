<?php

include( "seedBlogs.php" );


global $tableNamePrefix;

echo "<H1>seedBlogs Demo Site database table removal</H1>\n";

connectToDatabase();



$tableName = $tableNamePrefix . "order_map";

echo "Removing table <B>$tableName</B><BR>\n";

queryDatabase( "drop TABLE $tableName" );



$tableName = $tableNamePrefix . "posts";

echo "Removing table <B>$tableName</B><BR>\n";

queryDatabase( "drop TABLE $tableName" );



$tableName = $tableNamePrefix . "users";

echo "Removing table <B>$tableName</B><BR>\n";

queryDatabase( "drop TABLE $tableName" );


// extra table for refresh date
$tableName = $tableNamePrefix . "refresh";

echo "Removing table <B>$tableName</B><BR>\n";

queryDatabase( "drop TABLE $tableName" );



closeDatabase();


echo "<BR><BR> ".
     "You can now run the following script to setup fresh demo data:<BR>\n";

echo "<A HREF=\"setup_demo_database.php\">setup_demo_database.php</A>";


?>