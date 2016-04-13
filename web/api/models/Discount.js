/**
* DISCOUNT.js
*
* @description :: TODO: You might write a short summary of how this model works and what it represents here.
* @docs        :: http://sailsjs.org/#!documentation/models
*/

module.exports = {
	tableName: 'DISCOUNT',
  	attributes: {
  		X_DISCOUNT: {
  			type: 'integer',
  			primaryKey: true,
  			unique: true
  		},
  		ORIGIN: {
  			type:'string'
  		},
  		PERCENT:{
  			type: 'float'
  		},
  		AMOUNT:{
  			type:'integer'
  		},
  		TYPE:{
  			type:'string',
  			isType: true
  		},
  		USER_X_USER: {
  			model: 'users'
  		}
  	},
  	types:{
  		isType: function(value){
  			if(value == "D" || value == "G"){
  				// D: DISCOUNT COOUPON
  				// G: GIFT CARD
  				return true;
  			}
  			else
  			{
  				return false;
  			}
  		}
  	}
};

