# DataGrabber
PHP Class to save all Global Vars to an mySql table

# Author: Kevin J Brosnahan
# Date: 2019-10-29

Included here is the SQL to create a table called data_collection and a script to capture any/all PHP Global Variables. 
The data is stored as JSON in each field.

Example Usage:

$DataGrabber = new DataGrabber();

$SQL = $DataGrabber->GrabGlobalsSql();

My flavor of executing insert: $retDG = $dbops->ExecuteInsertQuery( new ConnectionProperties($is_local), $dgSql );
