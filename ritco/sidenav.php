<html>
  <head><title>
    </title>
<style type="text/css">
  
.sidebar {
  height: 700px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  background-color: black;
  color:yellowgreen;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color:black;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: yellowgreen;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
/* 
  /* set a hover effect for the button*/
  button:hover {
    opacity: 0.8;
    }
    @-webkit-keyframes animatezoom {
    from {
      -webkit-transform: scale(0)
    }
    to {
      -webkit-transform: scale(1)
    }
  }
    @keyframes animatezoom {
    from {
      transform: scale(0)
    }
    to {
      transform: scale(1)
    }
  }
  
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
  }}
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
  </head>
<body>
  <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="home1.php">Home</a>
  <a href="validate.php">sign up</a>
  <a href="book.php">book</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ MENU</button> 
  <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
