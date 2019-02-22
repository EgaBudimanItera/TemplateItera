var EventEmitter = require('events');
var socket = require( 'socket.io' );
var express = require( 'express' );
var http = require( 'http' );

var app = express();
var server = http.createServer( app );
server.listen( 3000 );
var io = socket.listen( server, "192.168.2.26" );
var listUser = {};
io.sockets.on( 'connection', function( client ) {
	console.log( "New client !" );
    client.on('storeUserConnect', function(data){        
        
            client.user = data;            
            listUser[client.user] = client;          

    });

    client.on('sendNotif', function(data){
        var name = data.user;
        console.log("send notif to "+name);
        listUser[name].emit('newNotif', {num:data.num,notif: data.notif,user:data.user});
    });

    client.on('notifBayar', function(data){
        //add stuff later
        var name = data.user;
        console.log("send notif bayar to "+name);
        listUser[name].emit('newNotifBayar', {num:data.num,notif: data.notif,user:data.user});
    });

    client.on('notifCancel', function(data){
        var name = data.user;
        console.log("send notif cancel to "+name);
        listUser[name].emit('newNotifCancel', {num:data.num,notif: data.notif,user:data.user});
    });

    client.on('disconnect', function(data){
        if(!socket.user) return;
        delete listUser[socket.user];
        updateUserList();
    });
		
});


