<style>
@import url('https://fonts.googleapis.com/css2?family=League+Spartan&display=swap');


*{
    margin : 0;
    padding : 0;
}
.header {
    margin-top: 10%;
    min-height: 100vh;
    width:100%;
    background-image: url(img/imghea.png);
    background-position: center;
    background-size: cover;
    position: relative;
    background-repeat: no-repeat;
}
.nav-link {
    color: #234779 !important;
}
.container {
    font-family: 'League Spartan', sans-serif;
    font-weight: bolder;
}

.nav-item ::after{
    content:"";
    width: 0%;
    height: 2px;
    display: block;
    background : #EA3D40;
    margin: auto;
    transition: 0.5s;
}
.nav-item :hover::after{
    width: 100%;
}

.navbar {
  height: 90px;
}

.text-box {
    position : absolute;
    top:30%;
    left: 20%;
    color: white;
    font-family: 'League Spartan', sans-serif;
}
.text-box p{
    font-size: 60px;
    font-weight: bold;
}
.btn-lg{
    background-color: #EA3D40;
    color: white;
    font-family: 'League Spartan', sans-serif;   
    font-weight: bold;
    transition: 0.5s;
}
.btn-lg a{
    color: white;
    text-decoration: none;
}
.tables {
    width: 80%;
    margin:auto;
    text-align: center;
    padding-top: 100px;
}

.footer{
    width : 100%;
    text-align: center;
    padding: 30px 0;

}

.footer h4 {
    margin-bottom: 25px;
    margin-top: 20px;
    font-weight: 600;
}

.mb-3 {
    margin: auto;
    width: 30%;
}
</style>


 <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navb">
        <div class="container">
          <a class="navbar-brand"><img src="./views/includes/assets/logo.png" width=35%/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=donors">DONORS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=donations">BLOOD DONATIONS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=requests">REQUESTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=users">USERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">LOG OUT</a>

                
              </li>
              
			  <li>

            </ul>
          </div>
        </div>
      </nav>
