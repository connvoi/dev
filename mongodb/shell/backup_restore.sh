#!/bin/sh
#mongodump backup whole db
/usr/local/bin/mongodump -v --host hostname --port port -o /backup/backup

#mongodump backup specific collection.
/usr/local/bin/mongodump -v --host hostname --port port -d dbname -c collectionname -o /backup/backup

#mongoexport 
#To get json backupfile 
/usr/local/bin/mongoexport -v --host hostname --port port -d dbname -c collectionname -o /backup/backup/filename.json


#monogrestore
/usr/local/bin/mongorestore -v --host hostname --port port -o /backup/backup

#mongorestore  restore specific collection.
/usr/local/bin/mongorestore -v --host hostname --port port -d dbname -c collectionanem -o /backup/backup/filename.bson
