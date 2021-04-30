<style type="text/css">
/*Universal Styling****************************************************/

* {
  margin:0;
  padding:0;
  border:0;
}

h1 {
  font-family: 'Pacifico', cursive;
  color: #f2985b;
  padding-bottom: 15px;
}

h2 {
  color: #f2985b;
  font-family: 'Raleway', sans-serif;
  text-transform: uppercase;
  text-align: center;
  font-size: 28px;
  padding: 43px 0 10px;
  letter-spacing: 1px;
  max-width: 400px;
  margin: 0 auto;
  position: relative;
  top: 25px;
}

p,
a {
  font-family: 'Raleway', sans-serif;
}

.container {
  max-width: 1000px;
  margin: 0 auto;
  padding: 110px 0 34px;
  min-height: 75vh;
}

main {
  background-color: #f5f4f4;
}

 /*Header Styling*******************/

header {
  background-color: #DAE8F8;
  padding: 15px 15px 0px;
  position: fixed;
  width: 100%;
  z-index: 99;
}

.logo-top {
  display: inline-block;
  width: 30%;
}

.logo-top img {
  width: 35%;
}

header nav {
  display: inline-block;
  width: 67%;
  text-align: right;
}

/*Menu Styling***********************/

.menu ul {
  list-style: none;
}

.menu >ul >li {
  display: inline-block;
  margin-bottom: 1px;
  position: relative;
  vertical-align: top;
}

.menu ul li a {
  color: #466288;
  display: inline-block;
  margin: 0px 20px;
  padding: 0px 2px 5px;
  text-decoration: none;
  font-weight: 500;
  transition: .2s;
}

.menu ul li a.active {
  color: #f2985b;
  border-bottom: 5px solid;
}

.menu ul li a:hover {
  color: #f2985b;
  transition: .2s
}

.sub-menu {
  display: none;
}

.menu-item:hover .sub-menu {
  display: block;
  position: absolute;
  width: 100%;
  padding: 5px 1px 8px 0px;
  top: 25px;
  background: #dae8f8;
}

header nav a:hover {
  border-bottom: 2px solid #f2985b;
  transition: .2s;
}

.menu svg {
  position: relative;
  top: 2px;
  left: 1px;
}

/*Footer Styling******************************/

footer {
  background: #dae8f8;
  width: 100%;
}

footer p {
  display: inline-block;
  text-align: center;
  color: #466288;
  font-weight: 500;
  width: 30%;
}

footer a {
  color: #466288;
  margin: 0 5px;
  font-size: 19px;
  transition: .2s;
}

footer a:hover {
  color: #f2985b;
  transition: .2s;
}

.bottom {
  text-align: center;
  padding: 4px 0px;
}

.logo-bottom {
  padding: 4px 0px;
  width: 33%;
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

.connect {
  float: none;
  text-align: right;
}
</style>

<header>
  <div class="logo-top">
    <a href="index.html"><img src="images/simons-logo2.png" alt="logo" title="VS Logo" width="200" /></a>
  </div>

  <nav class="menu">
    <ul>
      <li class="menu-item"><a href="portfolio.html">Portfolio <i class="fas fa-angle-down"></i></a>
        <ul class="sub-menu">
          <li class="menu-item"><a href="illustrator.html">Illustrator</a></li>
          <li class="menu-item"><a href="photoshop.html">Photoshop</a></li>
          <li class="menu-item"><a href="indesign.html">InDesign</a></li>
        </ul>
      </li>
      <li class="menu-item"><a href="about.html">About</a></li>
      <li class="menu-item"><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<div class="container">
  <h1>Thank you for your inquiry</h1>
  <p>I have received your message and will be in touch with you shortly.</p>
</div>

<footer>
  <div class="bottom">
    <div class="logo-bottom">
      <img src="images/vs.png" alt="logo" title="VS" width="40"/>
    </div>

      <p class="email">simons.veronica@yahoo.com</p>

      <p class="connect">Connect
        <a href="https://www.linkedin.com/in/veronica-simons-69b421a3/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.pinterest.com/roni318/_saved/" target="_blank"><i class="fab fa-pinterest-square"></i></a>
        <a href="https://www.instagram.com/ronii_s/" target="_blank"><i class="fab fa-instagram-square"></i></a>
      </p>

  </div>
</footer>
