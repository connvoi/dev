/**
 *rename collection
 */
db.runCommand({renameCollection: "db.oldname", to:"db.newname" });

/**
 * Add index 
 */
db.collectionname.ensureIndex({key:1});

/**
 * show indexes
 */
db.collectionname.getIndexes();


/**
 * delete index
 */
db.collectionname.dropIndex("indexname");

