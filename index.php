<?php
$colors = array('#007AFF', '#FF7000', '#FF7000', '#15E25F', '#CFC700', '#CFC700', '#CF1100', '#CF00BE', '#F00');
$color_pick = array_rand($colors);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Chat</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <style type="text/css">
		.chat-wrapper {
			font: bold 11px/normal 'lucida grande', tahoma, verdana, arial, sans-serif;
			background: #00a6bb;
			padding: 20px;
			margin: 20px auto;
			box-shadow: 2px 2px 2px 0px #00000017;
			max-width: 700px;
			min-width: 500px;
		}

		#message-box {
			width: 97%;
			display: inline-block;
			height: 300px;
			background: #fff;
			box-shadow: inset 0px 0px 2px #00000017;
			overflow: auto;
			padding: 10px;
		}

		.user-panel {
			margin-top: 10px;
		}

		input[type=text] {
			border: none;
			padding: 5px 5px;
			box-shadow: 2px 2px 2px #0000001c;
		}

		input[type=text]#name {
			width: 20%;
		}

		input[type=text]#message {
			width: 60%;
		}

		button#send-message {
			border: none;
			padding: 5px 15px;
			background: #11e0fb;
			box-shadow: 2px 2px 2px #0000001c;
		}
	</style> -->
	<link rel="stylesheet" href="css/style.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
</head>
<!--Coded With Love By Mutiullah Samim-->

<body>

	<div class="chat-wrapper">
		<!-- <div id="message-box"></div> -->
		<div class="user-panel">
			 <input type="hidden" name="name" value="Ankit" id="name" placeholder="Your Name" maxlength="15" />
			<!-- <input type="text" name="message" id="message" placeholder="Type your message here..." maxlength="100" /> -->
			<!-- <button id="send-message">Send</button> --> 
		</div>
	</div>


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-3 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
							<li class="active">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Khalid</span>
										<p>Kalid is online</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Taherah Big</span>
										<p>Taherah left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Sami Rafi</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="http://profilepicturesdp.com/wp-content/uploads/2018/07/sweet-girl-profile-pictures-9.jpg" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Nargis Hawa</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Rashid Samim</span>
										<p>Rashid left 50 mins ago</p>
									</div>
								</div>
							</li>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="col-md-8 col-xl-6 chat">
				<div class="card">
					<div class="card-header msg_head">
						<div class="d-flex bd-highlight">
							<div class="img_cont">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
								<span class="online_icon"></span>
							</div>
							<div class="user_info">
								<span>Chat with Khalid</span>
								<p>1767 Messages</p>
							</div>
							<div class="video_cam">
								<span><i class="fas fa-video"></i></span>
								<span><i class="fas fa-phone"></i></span>
							</div>
						</div>
						<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
						<div class="action_menu">
							<ul>
								<li><i class="fas fa-user-circle"></i> View profile</li>
								<li><i class="fas fa-users"></i> Add to close friends</li>
								<li><i class="fas fa-plus"></i> Add to group</li>
								<li><i class="fas fa-ban"></i> Block</li>
							</ul>
						</div>
					</div>
					<div class="card-body msg_card_body">
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer">
								Hi, how are you samim?
								<span class="msg_time">8:40 AM, Today</span>
							</div>
						</div>

						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer" id="message-box">

							</div>
						</div>

					</div>
					<div class="card-footer">
						<div class="input-group">
							<div class="input-group-append">
								<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
							</div>

							<textarea name="message" id="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
							<button class="input-group-append" id="send-message">
								Send
							</button>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script language="javascript" type="text/javascript">
	//create a new WebSocket object.
	var msgBox = $('#message-box');
	var wsUri = "ws://192.168.1.17:8080";
	websocket = new WebSocket(wsUri);

	websocket.onopen = function(ev) { // connection is open 
		// msgBox.append('<div class="system_msg" style="color:#bbbbbb">Welcome to my "Demo WebSocket Chat box"!</div>'); //notify user
	}
	// Message received from server
	websocket.onmessage = function(ev) {
		var response = JSON.parse(ev.data); //PHP sends Json data

		var res_type = response.type; //message type
		var user_message = response.message; //message text
		var user_name = response.name; //user name
		var user_color = response.color; //color

		switch (res_type) {
			case 'usermsg':
				msgBox.append('<div><span class="user_name" style="color:' + user_color + '">' + user_name + '</span> : <span class="user_message">' + user_message + '</span></div>');
				break;
			case 'system':
				// msgBox.append('<div style="color:#bbbbbb">' + user_message + '</div>');
				break;
		}
		msgBox[0].scrollTop = msgBox[0].scrollHeight; //scroll message 

	};

	websocket.onerror = function(ev) {
		msgBox.append('<div class="system_error">Error Occurred - ' + ev.data + '</div>');
	};
	websocket.onclose = function(ev) {
		msgBox.append('<div class="system_msg">Connection Closed</div>');
	};

	//Message send button
	$('#send-message').click(function() {
		send_message();
	});

	//User hits enter key 
	$("#message").on("keydown", function(event) {
		if (event.which == 13) {
			send_message();
		}
	});

	//Send message
	function send_message() {
		var message_input = $('#message'); //user message text
		var name_input = $('#name'); //user name

		if (message_input.val() == "") { //empty name?
			alert("Enter your Name please!");
			return;
		}
		if (message_input.val() == "") { //emtpy message?
			alert("Enter Some message Please!");
			return;
		}

		//prepare json data
		var msg = {
			message: message_input.val(),
			name: name_input.val(),
			color: '<?php echo $colors[$color_pick]; ?>'
		};
		//convert and send data to server
		websocket.send(JSON.stringify(msg));
		message_input.val(''); //reset message input
	}
</script>

</html>