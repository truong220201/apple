 <?php
    require_once "condb.php";
 ?>
 <?php
	$sql = "SELECT * FROM ipad";
	$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Son-Truong</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="chi_tiet_sp.css">
	<script type="text/javascript" src="trang_chu.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header>
	<div style="right: 0;position: fixed;z-index: 3000;width: 100%">
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #444; height: 70px;">
	  <a class="navbar-brand" id = "chooseCT" href="#">SƠN TRƯỜNG - EPU - D14CNPM2</a>
	  <div class="dropdown" id="chooseCTDD">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" tabindex="0" aria-expanded="false" style=" width: 324.25px;">			
		    Việt Nam 
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item" href="#">Action</a>
		  </div>
	  </div>
	  <button type="button" class="btn btn-primary" style="margin-left: 20px;width: 101.2px;">Continue</button>
	</nav>


	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(0,0,0,0.8); opacity: 1.1;">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
	    <ul class="navbar-nav mr-auto" id="br1">
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">Store</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">Mac</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">Ipad</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">Iphone</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">Watch</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">TV</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">Music</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" id="colorw">Support</a>
	      </li>
	      <li>
	      	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style = "color: white; margin-top: 12px;">
			  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
			</svg>
	      </li>
	      <li>
	      	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"  style = "color: white; margin-top: 12px;">
			  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
			</svg>
	      </li>
	    </ul>
	  </div>
	</nav>
	</div>
	</header>
	<div style="background-color: #f5f5f7;">
		<div id="none-a"></div>
		<div id="list-1">
			<ul style="list-style-type: none;float: left;margin-left: 125px;" >
				<li class="element-a"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 54" class="size-logo-ipad-pro" ><defs><style>.cls-1{fill:#1d1d1f;fill-rule:evenodd;}</style></defs><title>ipad_pro_light_large</title><g id="Light"><g id="iPad_Pro" data-name="iPad Pro"><path class="cls-1" d="M34,7V6a3,3,0,0,0-3-3H3A3,3,0,0,0,0,6V48a3,3,0,0,0,3,3h8.27A2.6,2.6,0,0,1,10,49H3a1,1,0,0,1-1-1V6A1,1,0,0,1,3,5H31a1,1,0,0,1,1,1V7Z"/><path class="cls-1" d="M14,8a3,3,0,0,0-3,3V48a3,3,0,0,0,3,3H38a3,3,0,0,0,3-3V11a3,3,0,0,0-3-3m1,40a1,1,0,0,1-1,1H14a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1H38a1,1,0,0,1,1,1Z"/></g></g></svg>
					<span class="text-list-a-1">iPad Pro</span>
					<span class="text-list-a-2 ">New</span>
				</a></li>
				<li class="element-a"><a href="">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"  class="size-logo-ipad-pro" viewBox="0 0 30 54"><defs><style>.cls-1{fill:#1d1d1f;}</style></defs><title>ipadair_light_large</title><path class="cls-1" d="M27,8a3,3,0,0,1,3,3V48a3,3,0,0,1-3,3H3a3,3,0,0,1-3-3V11A3,3,0,0,1,3,8Zm1,3a.94.94,0,0,0-1-1H3a.94.94,0,0,0-1,1V48a.94.94,0,0,0,1,1H27a.94.94,0,0,0,1-1Z"/></svg>
					<span class="text-list-a-1">iPad Air</span>
					<span class="text-list-a-2 "></span>
				</a></li>
				<li class="element-a"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg"  class="size-logo-ipad-pro" viewBox="0 0 30 54"><defs><style>.cls-1{fill:#1d1d1f;fill-rule:evenodd;}</style></defs><title>ipad_light_large</title><g id="Light"><g id="iPad"><path class="cls-1" d="M28.69,8H1.36A1.51,1.51,0,0,0,0,9.51V49.68A1.34,1.34,0,0,0,1.36,51H28.69A1.3,1.3,0,0,0,30,49.68V9.51A1.47,1.47,0,0,0,28.69,8ZM15,9.42a.66.66,0,1,1-.66.66A.66.66,0,0,1,15,9.42Zm0,40.53a1.07,1.07,0,1,1,1.07-1.07A1.07,1.07,0,0,1,15,49.94ZM28,47H2V12H28Z"/></g></g></svg>
					<span class="text-list-a-1">iPad</span>
					<span class="text-list-a-2 "></span>
				</a></li>
				<li class="element-a"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg"  class="size-logo-ipad-pro" viewBox="0 0 22 54"><defs><style>.cls-1{fill:#1d1d1f;fill-rule:evenodd;}</style></defs><title>ipad_mini_light_large</title><g id="Light"><g id="iPad_Mini_4" data-name="iPad Mini 4"><path id="iPad_Mini_4-2" data-name="iPad Mini 4" class="cls-1" d="M20.74,20H1.27A1.3,1.3,0,0,0,0,21.26V49.8A1.26,1.26,0,0,0,1.27,51H20.74A1.31,1.31,0,0,0,22,49.74V21.26A1.3,1.3,0,0,0,20.74,20Zm-9.79,1.25a.43.43,0,1,1-.43.43A.43.43,0,0,1,10.94,21.25ZM11,50.5a1,1,0,1,1,1-1A1,1,0,0,1,11,50.5ZM21,48H1V23H21Z"/></g></g></svg>
					<span class="text-list-a-1">iPad mini</span>
					<span class="text-list-a-2 ">New</span>
				</a></li>
				<li class="element-a"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg"  class="size-logo-ipad-pro" viewBox="0 0 48 54"><defs><style>.cls-1{fill:#1d1d1f;fill-rule:evenodd;}</style></defs><title>ipad_compare_light_large</title><g id="Light"><g id="Compare"><path class="cls-1" d="M34.69,8H7.36A1.51,1.51,0,0,0,6,9.51V19H8V12H34V47H23v2.74A2.21,2.21,0,0,1,22.6,51H34.69A1.3,1.3,0,0,0,36,49.68V9.51A1.47,1.47,0,0,0,34.69,8ZM21,10.74a.66.66,0,1,1,.66-.66A.66.66,0,0,1,21,10.74Z"/><path class="cls-1" d="M15,7V6a1,1,0,0,1,1-1H44a1,1,0,0,1,1,1V48a1,1,0,0,1-1,1H37s0,.67,0,.79A1.3,1.3,0,0,1,36.28,51H44a3,3,0,0,0,3-3V6a3,3,0,0,0-3-3H16a3,3,0,0,0-3,3V7Z"/><path id="iPad_Mini_4" data-name="iPad Mini 4" class="cls-1" d="M20.74,20H1.27A1.3,1.3,0,0,0,0,21.26V49.8A1.26,1.26,0,0,0,1.27,51H20.74A1.31,1.31,0,0,0,22,49.74V21.26A1.3,1.3,0,0,0,20.74,20Zm-9.79,1.25a.43.43,0,1,1-.43.43A.43.43,0,0,1,10.94,21.25ZM11,50.5a1,1,0,1,1,1-1A1,1,0,0,1,11,50.5ZM21,48H1V23H21Z"/></g></g></svg>
					<span class="text-list-a-1">Compare</span>
					<span class="text-list-a-2 "></span>
				</a></li>
				<li class="element-a"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg"  class="size-logo-ipad-pro" viewBox="0 0 3 54"><defs><style>.cls-1{fill:#1d1d1f;}</style></defs><title>ipad_pencil_light_large</title><g id="Light"><g id="Pencil"><path class="cls-1" d="M1.52,3.06h0A1.23,1.23,0,0,0,.25,4.29V45.56h0a12.39,12.39,0,0,0,.21,1.49c.12.58.37,1.78.37,1.78h0l.42,2a.25.25,0,0,0,.49,0l.42-2h0s.25-1.2.37-1.78a12.59,12.59,0,0,0,.21-1.5h0V4.29A1.23,1.23,0,0,0,1.52,3.06Z"/></g></g></svg>
					<span class="text-list-a-1" style="width: 60px;">Apple Pencil</span>
					<span class="text-list-a-2 "></span>
				</a></li>
				<li class="element-a"><a href="">
					<svg id="Layer_4" data-name="Layer 4" xmlns="http://www.w3.org/2000/svg"  class="size-logo-ipad-pro" viewBox="0 0 64 54"><defs><style>.cls-1{fill:#333;}.cls-2{fill:none;stroke:#333;stroke-miterlimit:10;stroke-width:0.25px;}</style></defs><title>ipad_keyboards</title><circle class="cls-1" cx="13.06" cy="49.75" r="1"/><rect class="cls-1" x="38.06" y="27.25" width="1.5" height="48" rx="0.25" transform="translate(90.06 12.44) rotate(90)"/><path class="cls-1" d="M12.7,48l-.94-.34a.25.25,0,0,1-.15-.32l5.52-15.24a.24.24,0,0,1,.32-.15l.94.34a.26.26,0,0,1,.15.32L13,47.8A.25.25,0,0,1,12.7,48Z"/><rect class="cls-1" x="13.41" y="1.27" width="1.5" height="49" rx="0.25" transform="translate(39.31 41) rotate(150)"/><rect class="cls-1" x="8.87" y="2.74" width="1" height="32.24" rx="0.25" transform="translate(26.91 30.51) rotate(150)"/><path class="cls-2" d="M12.26,47.67a17.67,17.67,0,0,1-1.37,2.52c-.46.67-.35,2,1.16,1.62a9.35,9.35,0,0,1,2.84-.56"/><rect class="cls-1" x="9.42" y="2.47" width="0.88" height="32.47" transform="translate(27.76 29.97) rotate(150)"/></svg>
					<span class="text-list-a-1">Keyboards</span>
					<span class="text-list-a-2 ">New</span>
				</a></li>
				<li class="element-a"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg" class="size-logo-ipad-pro"  viewBox="0 0 27 54"><title>family-chapternav-music-master-17-schou-sri-COsri</title><g id="Light"><path d="M5.89,24.49C3.51,24.58,2,26.08.6,27.55,0,28.21.12,28.69.12,30.06c0,1.85,0,2.07.5,2.87A6.36,6.36,0,0,0,5.89,36c3.62.27,6.74-2.57,6.74-5.75S9.51,24.36,5.89,24.49ZM2.8,32a.6.6,0,0,1-1.19,0V28.58a.6.6,0,0,1,1.19,0Zm6.71-1.72a.89.89,0,0,1-.9.88H6.67a.89.89,0,0,1-.9-.88v-.11a.89.89,0,0,1,.9-.88H8.62a.89.89,0,0,1,.9.88Zm-3,6.92c0,.36,0,13.47,0,13.47A1.53,1.53,0,0,0,7.88,52c.37,0,.66,0,1.3,0h.31a1.58,1.58,0,0,0,1.45-1.51v-.2h0l0-2.44V36A6.94,6.94,0,0,1,6.49,37.22Zm20-9.72c-1.4-1.47-3-2.92-5.35-3-3.62-.13-6.72,2.59-6.72,5.78A6.19,6.19,0,0,0,21,36.09a6.69,6.69,0,0,0,5.38-3.2c.54-.8.5-1,.5-2.87C26.92,28.64,27.08,28.16,26.45,27.5Zm-5.23,2.8a.89.89,0,0,1-.9.88H18.38a.89.89,0,0,1-.9-.88v-.11a.89.89,0,0,1,.9-.88h1.94a.89.89,0,0,1,.9.88ZM25.36,32a.59.59,0,0,1-1.19,0V28.59a.59.59,0,0,1,1.19,0ZM16,36V47.82l0,2.44h0v.2A1.57,1.57,0,0,0,17.51,52h.31c.64,0,.92,0,1.29,0a1.52,1.52,0,0,0,1.39-1.31s0-13.12,0-13.48A6.9,6.9,0,0,1,16,36Z"/></g></svg>
					<span class="text-list-a-1">AirPods</span>
					<span class="text-list-a-2 "></span>
				</a></li>
				<li class="element-a"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg" class="size-logo-ipad-pro"  viewBox="0 0 31 54"><defs><style>.cls-1,.cls-2{fill:#1d1d1f;}.cls-1{fill-rule:evenodd;}</style></defs><title>ipad_accessories_light_large </title><g id="Light"><g id="Accessories"><path class="cls-1" d="M27,12h2V47H27v4h2.7A1.3,1.3,0,0,0,31,49.68V9.51A1.47,1.47,0,0,0,29.69,8H27Z"/><path id="iPad_Accessories" data-name="iPad Accessories" class="cls-2" d="M26,51.65V7.35A1.33,1.33,0,0,0,24.64,6a54.49,54.49,0,0,0-5.27,2A2.24,2.24,0,0,0,18,9.93v39.2A2.23,2.23,0,0,0,19.36,51s4.67,1.91,5.27,2A1.35,1.35,0,0,0,26,51.65ZM0,9.56V49.44A1.57,1.57,0,0,0,1.58,51H8.92A1.51,1.51,0,0,1,8,49.44V9.56A1.64,1.64,0,0,1,8.92,8H1.58A1.58,1.58,0,0,0,0,9.56Zm9,0V49.44A1.57,1.57,0,0,0,10.58,51h7.34A1.51,1.51,0,0,1,17,49.44V9.56A1.64,1.64,0,0,1,17.92,8H10.58A1.58,1.58,0,0,0,9,9.56Z"/></g></g></svg>
					<span class="text-list-a-1">Accessories</span>
					<span class="text-list-a-2 "></span>
				</a></li>
				<li class="element-a"><a href="">
					<svg enable-background="new 0 0 33 54" class="size-logo-ipad-pro"  viewBox="0 0 33 54" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd"><path d="m0 0h33v54h-33z" fill="none"/><g fill="#1d1d1f" fill-rule="evenodd"><path d="m14.132 26.709c0-.73-.426-1.129-1.195-1.129h-1.102v2.238h1.102c.754.001 1.195-.401 1.195-1.109z"/><path d="m11.437 33.962c-2.376 0-3.867 1.805-3.867 4.673 0 2.859 1.491 4.664 3.867 4.664 2.377 0 3.867-1.805 3.867-4.664 0-2.868-1.49-4.673-3.867-4.673z"/><path d="m22.214 29.831c.707 0 1.145-.559 1.145-1.473 0-.906-.441-1.477-1.145-1.477-.707 0-1.137.559-1.137 1.477.001.922.426 1.473 1.137 1.473z"/><path d="m31.867 23.264c-.311-.79-1.029-1.903-2.047-2.686-.588-.453-1.289-.885-2.253-1.171-1.027-.304-2.292-.407-3.867-.407h-14.4c-1.575 0-2.84.103-3.867.407-.964.286-1.665.718-2.253 1.171-1.018.784-1.736 1.896-2.047 2.686-.627 1.592-.633 3.398-.633 4.536v14.4c0 1.137.006 2.944.633 4.536.311.79 1.029 1.903 2.047 2.686.588.453 1.289.885 2.253 1.171 1.027.304 2.292.407 3.867.407h14.4c1.575 0 2.84-.103 3.867-.407.964-.286 1.665-.718 2.253-1.171 1.018-.784 1.736-1.896 2.047-2.686.627-1.592.633-3.398.633-4.536v-14.4c0-1.138-.006-2.944-.633-4.536zm-9.891 2.899c.582 0 1.074.281 1.305.746h.062v-2.336h.84v5.906h-.805v-.672h-.066c-.254.465-.75.742-1.336.742-1.082 0-1.766-.852-1.766-2.195 0-1.336.692-2.191 1.766-2.191zm-11.016-1.321h2.207c1.102 0 1.859.758 1.859 1.867 0 1.086-.781 1.844-1.887 1.844h-1.305v1.926h-.874zm-1.75-.422c.293 0 .531.238.531.531 0 .289-.238.527-.531.527s-.531-.238-.531-.527c0-.292.238-.531.531-.531zm.418 1.817v4.242h-.836v-4.242zm1.809 18.4c-3.295 0-5.357-2.312-5.357-6.002s2.062-6.011 5.357-6.011c3.296 0 5.358 2.32 5.358 6.011 0 3.689-2.062 6.002-5.358 6.002zm4.219-15.353c0-.762.57-1.203 1.582-1.266l1.152-.07v-.371c0-.465-.297-.727-.871-.727-.469 0-.793.176-.887.484h-.812c.086-.715.773-1.18 1.738-1.18 1.066 0 1.668.531 1.668 1.422v2.902h-.809v-.602h-.066c-.254.43-.719.672-1.277.672-.821.001-1.418-.491-1.418-1.264zm6.531 15.353c-2.538 0-4.229-1.305-4.366-3.312h1.449c.17 1.249 1.33 2.007 2.998 2.007 1.578 0 2.723-.83 2.723-1.975 0-.975-.645-1.619-2.256-1.974l-1.289-.282c-2.328-.508-3.336-1.562-3.336-3.215 0-1.917 1.692-3.263 4.102-3.263 2.32 0 3.996 1.386 4.061 3.36h-1.45c-.129-1.273-1.136-2.055-2.651-2.055-1.449 0-2.569.709-2.569 1.893 0 .919.62 1.547 2.207 1.894l1.289.282c2.425.531 3.384 1.498 3.384 3.143-.002 2.151-1.694 3.497-4.296 3.497z"/><path d="m18.39 28.545-1.039.07c-.586.039-.852.246-.852.633 0 .395.332.625.789.625.633 0 1.102-.414 1.102-.961z"/></g></g></svg>
					<span class="text-list-a-1">iPadOS</span>
					<span class="text-list-a-2 "></span>
				</a></li>
			</ul>
		</div>
		<div id="hdlinkshop">
			Save on iPad for college with education pricing. And get AirPods.* <a style="color: #06c;"> Shop now ></a>
		</div>
		<?php while ($row = mysqli_fetch_assoc($query)) {?>
		<div class="sp-1" style="background-color: <?php echo $row['maunen']?>;">
			<div id="info-ipad-a">
					<div class="mini-red"><?php echo $row['new']; ?> </div>
					<div class="title-black"><?php echo $row['name']; ?></div>
					<div class="large-black"><?php echo $row['introduce']; ?></div>
					<div class="price-a">$<?php echo $row['price']; ?></div>
					<button class="btn-buy-a">Buy</button>
					<div class="learn-more">Learn more ></div>
				
			</div>
			<img src="danh-sach/img-large/<?php echo $row['image']; ?>" style="width: 70%;height: 598px;display: inline-block;float: <?php echo $row['vitri']; ?>;margin-top: 20px;">
		</div>
		<div style="height: 25px;"></div>
		<?php }?>
		<div style="height: 5px;background-color: #f5f5f7;"></div>
		<div class="sp-all">
			<div class="sp-all-inside">
				<div class="noi-dung-sp-all">
					<h2 class="txt-headline-a-1 mx-auto">Which iPad is right for you?</h2>
					<a href="">
						<span class="txt-all-models">Compare all iPad models<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
						</svg></span>
					</a>
				</div>
				<div id="list-2" class="mx-auto">
					<ul style="float: left;list-style-type: none;height: 376px;">
						<li class="ipad-color-list">
							<img src="img-ipads/ipad-pro-sp-1.png">
							<div class="txt-mini-red">New</div>
							<div class="txt-medium-name">iPad Pro</div>
							<div class="txt-dollar">From $799</div>
							<img class="img-two-dots" src="img-dots/two-dot-b-w.jpg"><br>
							<button class="btn-buy-mini">Buy</button>
						</li>
						<li class="ipad-color-list">
							<img src="img-ipads/ipad-pro-sp-2.png">
							<div class="txt-mini-red"> &nbsp;</div>
							<div class="txt-medium-name">iPad Air</div>
							<div class="txt-dollar">From $599</div>
							<img class="img-five-dots" src="img-dots/five-dots.jpg"><br>
							<button class="btn-buy-mini">Buy</button>
						</li>
						<li class="ipad-color-list">
							<img src="img-ipads/ipad-pro-sp-3.png">
							<div class="txt-mini-red"> &nbsp;</div>
							<div class="txt-medium-name">iPad</div>
							<div class="txt-dollar">From $329</div>
							<img class="img-three-dots" src="img-dots/three-dots.jpg"><br>
							<button class="btn-buy-mini">Buy</button>
						</li>
						<li class="ipad-color-list">
							<img src="img-ipads/ipad-pro-sp-4.png">
							<div class="txt-mini-red"> &nbsp;</div>
							<div class="txt-medium-name">iPad mini</div>
							<div class="txt-dollar">From $399</div>
							<img class="img-three-dots" src="img-dots/three-dots.jpg"><br>
							<button class="btn-buy-mini">Buy</button>
						</li>
					</ul>
				</div>
				<div class="mx-auto" id="list-3">
					<ul style="float: left;list-style-type: none;">
						<li class="hr-a"></li>
						<li class="hr-a"></li>
						<li class="hr-a"></li>
						<li class="hr-a"></li>
						<li class="parameter-ipad">
							<div class="txt-prm-title">12.9” and 11”</div>
							<div class="txt-prm-content">12.9” Liquid Retina XDR display<sup>1</sup><br>11” Liquid Retina display<sup>1</sup></div>
						</li>
						<li class="parameter-ipad">
							<div class="txt-prm-title">10.9”</div>
							<div class="txt-prm-content">Liquid Retina display<sup>1</sup><br> &nbsp;</div>
						</li>
						<li class="parameter-ipad">
							<div class="txt-prm-title">10.2”</div>
							<div class="txt-prm-content">Retina display<br> &nbsp;</div>
						</li>
						<li class="parameter-ipad">
							<div class="txt-prm-title">7.9”</div>
							<div class="txt-prm-content">Retina display<sup>1</sup><br> &nbsp;</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_m1_chip__ev9f5zgvwo02_large.png">
							<div class="txt-prm-content">M1 chip</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_a14_chip__eflvurt7ywia_large.png">
							<div class="txt-prm-content">A14 Bionic chip</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_a12_chip__f4cnj28qh5qq_large.png">
							<div class="txt-prm-content">A12 Bionic chip</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_a12_chip__f4cnj28qh5qq_large.png">
							<div class="txt-prm-content">A12 Bionic chip</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_usbc_thunderbolt__fuat6j3gyc2u_large.png">
							<div class="txt-prm-content">USB-C connector with support<br>for Thunderbolt / USB 4</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_usbc__gnv70qm6mcuq_large.png">
							<div class="txt-prm-content">USB-C connector<br> &nbsp;</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_lightning__drp7mpo3oyie_large.png">
							<div class="txt-prm-content">Lightning connector<br> &nbsp;</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_lightning__drp7mpo3oyie_large.png">
							<div class="txt-prm-content">Lightning connector<br> &nbsp;</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
							<div class="txt-prm-content">5G cellular<sup>2</sup></div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
							<div class="txt-prm-content">4G cellular<sup>2</sup></div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
							<div class="txt-prm-content">4G cellular<sup>2</sup></div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_cellular_5g__gck9kjr82ci2_large.png">
							<div class="txt-prm-content">4G cellular<sup>2</sup></div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
							<div class="txt-prm-content">Compatible with<br>Apple Pencil (2nd generation)</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
							<div class="txt-prm-content">Compatible with<br>Apple Pencil (2nd generation)</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
							<div class="txt-prm-content">Compatible with<br>Apple Pencil (1st generation)</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_pencil__2ii95qsgy0y6_large.png">
							<div class="txt-prm-content">Compatible with<br>Apple Pencil (1st generation)</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_magic_keyboard__cr367s50ehkm_large.png">
							<div class="txt-prm-content">Compatible with<br>Magic Keyboard and<br>Smart Keyboard Folio</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_magic_keyboard__cr367s50ehkm_large.png">
							<div class="txt-prm-content">Compatible with<br>Magic Keyboard and<br>Smart Keyboard Folio</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_smart_keyboard__gh56kiymgfam_large.png">
							<div class="txt-prm-content">Compatible with<br>Smart Keyboard<br> &nbsp;</div>
						</li>
						<li class="parameter-ipad">
							<img src="https://www.apple.com/v/ipad/home/bo/images/overview/compare_bluetooth_keyboard__fsfc35t22vqu_large.png">
							<div class="txt-prm-content">Compatible with<br>Bluetooth keyboards<br> &nbsp;</div>
						</li>
						<li class="hr-a-1"></li>
						<li class="hr-a-1"></li>
						<li class="hr-a-1"></li>
						<li class="hr-a-1"></li>
						<a href="" class="learnmore-mini">Learn more ></a>
						<a href="" class="learnmore-mini">Learn more ></a>
						<a href="" class="learnmore-mini">Learn more ></a>
						<a href="" class="learnmore-mini">Learn more ></a>
					</ul>
				</div>
			</div>
			<div style="height: 30px;background-color: #f5f5f7;"></div>
			<div class="sp-4">
				<img src="img-large/four-ipads.jpg" style="display: inline-block;margin-top: 80px;">
				<div class="info-ipad-a-3">
					<div class="large-black" style="font-weight: 500;margin-bottom: 20px;">The latest carrier deals.<span style="color: #007f01;">&nbsp;Directly from Apple.</span></div>
					<div class="title-black" style="font-size: 48px;">Get any cellular iPad<br>model. Get up to $200<br>back after activation.<sup>3<sup></div>
					<div style="margin-top: 30px;">
						<img src="logo/t-mobile.png" style="display: inline-block;">
						<img src="logo/verizon.png" style="display: inline-block;">
					</div>
					<div style="width: 435px;height: 92px;margin-left: 131px;margin-top: 30px;">
						<div class="learn-more-a-2">Buy iPad Pro ></div>
						<div class="learn-more-a-2">Buy iPad ></div>
						<div class="learn-more-a-2">Buy iPad Air ></div>
						<div class="learn-more-a-2">Buy iPad mini ></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="foot">
		<div id="my-self" class="txt-f-bot mx-auto">EPU - LE SON TRUONG - 19810310104 - D14CNPM2 - PHAM VAN DONG - HA NOI</div>	
		<div class="txtfoot mx-auto">1. Price includes a $30 AT&T, T-Mobile, Sprint, or Verizon discount. Available to qualified customers and requires 24-month installment loan when you select Citizens One or Apple Card Monthly Installments (ACMI) as payment type at checkout at Apple. iPhone activation required with AT&T, T-Mobile, Sprint, or Verizon for purchases made with ACMI at an Apple Store. Subject to credit approval and credit limit. Taxes and shipping are not included in ACMI and are subject to your card’s variable APR. Additional Apple Card Monthly Installments terms are in the Customer Agreement. Additional iPhone Payments terms are here. ACMI is not available for purchases made online at special storefronts. The last month’s payment for each product will be the product's purchase price, less all other payments at the monthly payment amount.
		</div>
		<div class="txtfoot mx-auto">2. $9.99/month after free trial. No commitment. Plan automatically renews after trial until cancelled.</div>
		<div class="txtfoot mx-auto">3. Qualified Purchasers receive Promotion Savings when they purchase an eligible Mac or eligible iPad with eligible AirPods at a Qualifying Location. Only one Promotion Product per eligible Mac or eligible iPad per Qualified Purchaser. Offer subject to availability. While supplies last. Qualified Purchasers selecting Apple Card Monthly Installments (“ACMI”) as payment type at checkout shall receive a discount equal to the value of the eligible AirPods off the price of the eligible Mac or iPad. This will result in one ACMI installment plan over 12 months for the eligible iPad or Mac discounted by the instant credit, and a second ACMI installment plan over 6 months for the full price of the eligible AirPods. Qualified Purchasers will be charged for all items in their cart, including the eligible AirPods plus any additional Upgrade Cost. If you choose the pay-in-full or one-time-payment option for an ACMI eligible purchase instead of choosing ACMI as the payment option at checkout, that purchase will be subject to the variable APR assigned to your Apple Card. Taxes and shipping are not included in ACMI transactions and are subject to your standard purchase APR. ACMI is subject to credit approval and credit limit. Variable APRs for Apple Card other than ACMI range from 10.99% to 21.99% based on creditworthiness. Rates as of April 1, 2020. See the Apple Card Customer Agreement for more information. Apple Card is issued by Goldman Sachs Bank USA, Salt Lake City Branch. Available for qualifying applicants in the United States. If you reside in the U.S. territories, please call Goldman Sachs at 877-255-5923 with questions about accessing this offer or applying for Apple Card. This offer cannot be combined with the Apple Employee Purchase Plan or business loyalty pricing. Availability of in-store promotion offerings may be limited by Apple Store location closures as a result of COVID-19. Additional restrictions apply. View full terms and conditions of offer here. </div>
		<div class="txtfoot mx-auto">4. Purchase must be made on apple.com, through the Apple Store app, or at an Apple Store in the U.S. Limited to the first 100,000 transactions. Subject to $10 minimum purchase. Promotion ends August 29.</div>
		<div class="txtfoot mx-auto">To access and use all the features of Apple Card, you must add Apple Card to Wallet on an iPhone or iPad with the latest version of iOS or iPadOS. Update to the latest version by going to Settings > General > Software Update. Tap Download and Install.</div>
		<div class="txtfoot mx-auto">Available for qualifying applicants in the United States.</div>
		<div class="txtfoot mx-auto">Apple Card is issued by Goldman Sachs Bank USA, Salt Lake City Branch.</div>
		<div class="txtfoot mx-auto">Learn more about how Apple Card applications are evaluated at support.apple.com/kb/HT209218.</div>
		<div class="txtfoot mx-auto">Apple TV+ is $4.99/month after free trial. One subscription per Family Sharing group. Offer good for 3 months after eligible device activation. Plan automatically renews until cancelled. Restrictions and other terms apply.</div>
		<div class="mx-auto" id="hr-1"></div>

		<div id="foot-2" class="mx-auto">
			<ul style="list-style-type: none; margin-left: -50px;">
				<li class="chia-5">
					<ul style="list-style-type: none;">
						<li class="txt-f-top">
							Shop and Learn
						</li>
						<li class="txt-f-mid">Mac</li>
						<li class="txt-f-mid">iPad</li>
						<li class="txt-f-mid">iPhone</li>
						<li class="txt-f-mid">Watch</li>
						<li class="txt-f-mid">TV</li>
						<li class="txt-f-mid">Music</li>
						<li class="txt-f-mid">AirPods</li>
						<li class="txt-f-mid">HomePod</li>
						<li class="txt-f-mid">iPod touch</li>
						<li class="txt-f-mid">AirTag</li>
						<li class="txt-f-mid">Accessories</li>
						<li class="txt-f-mid">Gift Cards</li>

					</ul>
				</li>
				<li class="chia-5">
					<ul style="list-style-type: none;">
						<li class="txt-f-top">
							Services
						</li>
						<li class="txt-f-mid">Apple Music</li>
						<li class="txt-f-mid">Apple TV+</li>
						<li class="txt-f-mid">Apple Fitness+</li>
						<li class="txt-f-mid">Apple News+</li>
						<li class="txt-f-mid">Apple Arcade</li>
						<li class="txt-f-mid">iCloud</li>
						<li class="txt-f-mid">Apple One</li>
						<li class="txt-f-mid">Apple Card</li>
						<li class="txt-f-mid">Apple Books</li>
						<li class="txt-f-mid">Apple Podcasts</li>	
						<li class="txt-f-mid">App Store</li>
						<li class="txt-f-top">
							Account
						</li>
						<li class="txt-f-mid">Manage Your Apple ID</li>
						<li class="txt-f-mid">Apple Store Account</li>
						<li class="txt-f-mid">iCloud.com</li>

					</ul>
				</li>
				<li class="chia-5">
					<ul style="list-style-type: none;">
						<li class="txt-f-top">
							Apple Store
						</li>
						<li class="txt-f-mid">Find a Store</li>
						<li class="txt-f-mid">Shop Online</li>
						<li class="txt-f-mid">Genius Bar</li>
						<li class="txt-f-mid">Today at Apple</li>
						<li class="txt-f-mid">Apple Camp</li>
						<li class="txt-f-mid">Apple Store App</li>
						<li class="txt-f-mid">Refurbished and Clearance</li>
						<li class="txt-f-mid">Financing</li>
						<li class="txt-f-mid">Apple Trade In</li>
						<li class="txt-f-mid">Order Status</li>
						<li class="txt-f-mid">Shopping Help</li>
					

					</ul>
				</li>
				<li class="chia-5">
					<ul style="list-style-type: none;">
						<li class="txt-f-top">
							For Business
						</li>
						<li class="txt-f-mid">Apple and Business</li>
						<li class="txt-f-mid">Shop for Business</li>
						<li class="txt-f-top">
							For Education
						</li>
						<li class="txt-f-mid">Apple and Education</li>
						<li class="txt-f-mid">Shop for K-12</li>
						<li class="txt-f-mid">Shop for College</li>
						<li class="txt-f-top">
							For Healthcare
						</li>
						<li class="txt-f-mid">Apple in Healthcare</li>
						<li class="txt-f-mid">Health on Apple Watch</li>
						<li class="txt-f-mid">Health Records on iPhone</li>
					</ul>
				</li>
				<li class="chia-5">
					<ul style="list-style-type: none;">
						<li class="txt-f-top">
							Apple Values
						</li>
						<li class="txt-f-mid">Accessibility</li>
						<li class="txt-f-mid">Education</li>
						<li class="txt-f-mid">Environment</li>
						<li class="txt-f-mid">Inclusion and Diversity</li>
						<li class="txt-f-mid">Privacy</li>
						<li class="txt-f-mid">Racial Equity and Justice</li>
						<li class="txt-f-mid">Supplier Responsibility</li>
						<li class="txt-f-top">
							About Apple
						</li>
						<li class="txt-f-mid">Newsroom</li>
						<li class="txt-f-mid">Apple Leadership</li>
						<li class="txt-f-mid">Career Opportunities</li>
						<li class="txt-f-mid">Investors</li>
						<li class="txt-f-mid">Ethics & Compliance</li>
						<li class="txt-f-mid">Events</li>
						<li class="txt-f-mid">Contact Apple</li>

					</ul>
				</li>
			</ul>
		</div>
		<div class="txt-f-bot mx-auto" id="hr-1">More ways to shop:<a  style="color: #06c;"> Find an Apple Store</a> or <a style="color: #06c;">other retailer</a> near you. Or call 1-800-MY-APPLE.</div>

		<div id="my-self" class="txt-f-bot mx-auto">EPU - LE SON TRUONG - 19810310104 - D14CNPM2 - PHAM VAN DONG - HA NOI</div>
	</footer>
</body>
</html>