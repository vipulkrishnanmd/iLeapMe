'use strict'

const functions = require('firebase-functions');
const admin = require('firebase-admin');
admin.initializeApp();


/*
 * 'OnWrite' works as 'addValueEventListener' for android. It will fire the function
 * everytime there is some item added, removed or changed from the provided 'database.ref'
 * 'sendNotification' is the name of the function, which can be changed according to
 * your requirement
 */

exports.sendNotification = functions.database.ref('/messages/{user_id}/{msg_id}').onWrite((change, context) =>{
	
	// logging for debugging
	console.log('We have a notification from : ', context.params.msg_id);
	
	//gets user id from the URL
	const u_id = context.params.user_id;
	
	// gets the device token
	const deviceToken = admin.database().ref(`/users/${u_id}/fcm_id`).once('value');
	
	// promise or get all the values and then use the device token to send the notification
	return Promise.all([deviceToken]).then(result => {

      const d_token = result[0].val();
	  
	  //loging device token for debugging
	  console.log('one : ', d_token);
	
		// making the message
		var message = {
		notification: {
			title: 'New Message!',
			body: '..from iLeap'
		},
		token: d_token,
		android: {
			notification : {
				title: 'New Message!',
				body: '..from iLeap',
				sound: 'default'
			}
		}
		};
		
		// sending the message and loging
	
		return admin.messaging().send(message)
			.then((response) => {
				// Response is a message ID string.
			console.log('Successfully sent message:', response);
			return response;
		})
			.catch((error) => {
				console.log('Error sending message:', error);
		});
		
	
});
});