/**
 * This script shoud run from mongoclient command "mongo".
 * Shouldn't do like "/usr/local/bin/mongo rs_setting.js"
 *
 */


/**
 * Server configration
 * high priority server will be  promoted when master down.  
 */
config ={
    "_id": "Name Of ReplcaSet",
    "version": 1,
    "members": [
        {
            "id": 0,
            "host": "hostname1:port" 
            "priority": 2
        },
        {
            "id": 1,
            "host": "hostname2:port" 
            "priority": 1 
        },
        {
            "id": 2,
            "host": "hostname3:port" 
            "priority": 0 
        }
    ]
} 

/**
 * setup command
 */
rs.initiate(config)

/**
 * change setting
 */
rs.reconfig(confing)

/**
 * check status of replcaSet
 */
rs.stats();
