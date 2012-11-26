/**
 * enable profiling
 */
db.setProfilingLevel(2);

//in this case, a query which takes over 1000ms will logged. 
db.setProfilingLevel(1, 1000);

/**
 * disable profiling
 */
db.setProfilingLevel(0);

/**
 * Change LogLevel
 * need admin permition
 */
use admin
db.adminCommand({setParameter:1, LogLevel:5})

/**
 * mongostat
 */
/usr/local/bin/mongostat

/**
 * mongotop
 */
/usr/local/bin/mongotop


/**
 * mongosniff
 *
 * mongosniff is packet capture command like tcpdump.
 */
/bin/mongosniff --source NET eth*** 27017


/**
 * db.stats()
 * db.collection.stats()
 *
 * To get database or collection status
 */
db.stats()
db.collection.stats()
