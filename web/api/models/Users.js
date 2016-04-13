/**
* USERS.js
*
* @description :: TODO: You might write a short summary of how this model works and what it represents here.
* @docs        :: http://sailsjs.org/#!documentation/models
*/

module.exports = {
	autoPK: false,
	tableName: 'USERS',
  	attributes: {
  		id: {
  			type: 'integer',
  			primaryKey: true
  		},
  		EMAIL:{
  			type: 'string',
  			unique: true,
  			required: true
  		},
  		PASSPORTS: { 
  			collection: 'passport', 
  			via: 'user' 
  		},
  		PROMO_CUPON:{
  			collection: 'discount',
  			via: 'USER_X_USER'
  		},
  		PROFILE:{
  			model: 'profile'
  		}
  	}
};

