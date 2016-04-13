/**
* PROFILE.js
*
* @description :: TODO: You might write a short summary of how this model works and what it represents here.
* @docs        :: http://sailsjs.org/#!documentation/models
*/

module.exports = {
	tableName: 'PROFILE',
 	attributes: {
 		X_PROFILE: {
  			type: 'integer',
  			primaryKey: true,
  			unique: true
  		},
  		NAME: {
  			type: 'string',
  		}
  	}
};

