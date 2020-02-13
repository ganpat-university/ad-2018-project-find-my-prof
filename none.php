<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" src="text/css" href="header.css"/>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #008080;
  padding: 14px 16px;
  background-color: #008080;
  font-family:Century Gothic;
  margin: 12px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #008080;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: white;
	color: #008080;
	border-radius: 10px;
	transition: 0.2s;
}

.dropdown-content a {
  float: none;
  color: #008080;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.links:hover {
	background-color: white;
	color: #008080;
	border-radius: 10px;
	transition: 0.2s;
}

.header .icon {
	display: none;
}
@media screen and (max-width: 600px) {
	.links.icon {
		float: right;
		display: block;
	}
}
@media screen and (max-width: 600px) {
	.header.responsive {
		position: relative;
	}

	.header.responsive a {
		float: none;
		display: block;
		text-align: left;
	}
}
body{
	color:#008080;
	font-family:Century Gothic;
	text-align: center;
	margin:0;
}

/*Naavigation Bar*/
div{
	height:70px;
}
a{
	color: #f2f2f2;
	text-align: center;
	text-decoration: none;	
}
#Name{
	float: left;
	color: #f2f2f2;
	text-align: center;
	padding: 2px 5px;
	font-size: 30px;
	margin-top:12px;

}
.header {
	overflow: hidden;
	background-color: #008080;
	position: fixed;
	width: 100%;
	top: 0;
}
.links{
	float: right;
	display: block;
	color: #f2f2f2;
	text-align: center;
	margin-top:10px;
	text-decoration: none;
	padding: 14px 16px;
	font-size: 20px;
}
</style>
</head>
<body>

<div class="header" id="myheader">
  <a href="index.php"><h2 id="Name">Find My Professor</h2></a>
  <a href="#news" class="links">News</a>
  <div class="dropdown" class="links">
    <button class="dropbtn" class="links">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 33</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 23</a>
    </div>
  </div> 
</div>
<h3>Dropdown Menu inside a Navigation Bar</h3>
<p>Click on the "Dropdown" link to see the dropdown menu.</p>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>