<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ayaulym Akkulova</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  
    <div class="container">
      
      <header class="header">
        <div class="img-wrapper">
          <img src="{{ URL('images/balloons1.jpeg') }}" />
        </div>
        <div class="banner">
          <h1>Pinkie Pie</h1>
          <p>Holiday agency. We are with you in the best moments of life</p>
          <div>
          <a href="upload-file">
          <button>Order now</button>
          </a>
          </div>
        </div>
      </header>

      <section class="about-us">
        <div class="section-header">
          <h1 class="section-heading">About Us</h1>
          <div class="underline"></div>
        </div>
        <div class="services">
          <div class="service">
            <div class="service-header">
            <i class="fas fa-birthday-cake"></i>
              <h3>Who are we?</h3>
            </div>
            <p class="service-text">
            Agencies dealing with the organization of holidays.
            We are with you at the best moments of your life.
            We will do all the work for you and you will enjoy the celebrations with all the guests
            </p>
          </div>
          <div class="service">
            <div class="service-header">
            <i class="far fa-star"></i>
              <h3>What is included in our services?</h3>
            </div>
            <p class="service-text">
            We will make a holiday anywhere, we can find you a place for a holiday,
            decoration, dancers, cooks, waiters, presenters, actors videography 
            and photographers
            </p>
          </div>
          <div class="service">
            <div class="service-header">
              <i class="far fa-smile"></i>
              <h3>Why us?</h3>
            </div>
            <p class="service-text">
            We will make your holiday unforgettable, 
            our clients are always happy with us
            </p>
          </div>
          <div class="service">
            <div class="service-header">
            <i class="fas fa-gift"></i>
              <h3>How we are working?</h3>
            </div>
            <p class="service-text">
            We will be with you from the beginning to the end of the event, 
            and for everything that you ordered from us, we will be responsible, 
            you just need to be with the guests and enjoy the holiday, we will take care of the rest
            </p>
          </div>
          <div class="service">
            <div class="service-header">
            <i class="fas fa-dove"></i>
              <h3>How to order?</h3>
            </div>
            <p class="service-text">
            You can leave a request on this site, the operator will contact you within an hour. 
            If you have additional questions, you can write us on social networks, call. 
            If a the operator did not answer choose the service "call me" and we will call you as soon as we are free
            </p>
          </div>
          <div class="service">
            <div class="service-header">
            <i class="fas fa-donate"></i>
              <h3>How do you pay?</h3>
            </div>
            <p class="service-text">
            During the contract, we take 30% of the advance payment, 
            3 days before the event another 50%, and after the end of the remaining 20%
            </p>
          </div>
          <div class="about-us-img-wrapper">
            <img src="{{ URL('images/finish2.png') }}" />
          </div>
        </div>
      </section>

      <section class="team">
        <div class="section-header">
          <h1 class="section-heading">Our Team</h1>
          <div class="underline"></div>
        </div>
        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="{{ URL('images/person-1.jpg') }}" alt="CEO" />
            </div>
            <div class="card-info">
              <h2>John Smith</h2>
              <h3>Governing</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>

            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="{{ URL('images/person-2.jpg') }}" alt="Designer" />
            </div>
            <div class="card-info">
              <h2>Ann Brown</h2>
              <h3>Leadingr</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>

            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="{{ URL('images/person-3.jpg') }}" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Mary Doe</h2>
              <h3>Decor</h3>
              <p>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores, impedit!"
              </p>

            </div>
          </div>
        </div>
      </section>

      <section class="contact">
        <div class="contact-wrapper">
          <div class="contact-left"></div>
          <div class="contact-right">
            <h1 class="contact-heading">Contact</h1>
            <form>
              <div class="input-group">
                <input type="text" class="field" />
                <label class="input-label">Full Name</label>
              </div>
              <div class="input-group">
                <input type="email" class="field" />
                <label class="input-label">Email</label>
              </div>
              <div class="input-group">
                <textarea class="field"></textarea>
                <label class="message">Message</label>
              </div>
              <input type="submit" class="submit-btn" value="Submit" />
            </form>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="footer-content">
          <p class="copyright">
            Copyright &copy; 2020, CodeAndCreate - All Rights Reserved
          </p>
          <div class="social-list">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </footer>
      <a href="#" class="scroll-btn">
        <i class="fas fa-arrow-up"></i>
      </a>
    </div>

    <!--<script src="script.js"></script>-->
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!--<script src="tilt.js"></script> -->

    <style>
* {
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
}

html {
  font-size: 62.5%;
}


.header {
  width: 100%;
  height: 100vh;
  position: relative;
  perspective: 100rem;
  overflow: hidden;
}

.img-wrapper {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  overflow: hidden;
}

.img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.5;
  animation: scale 25s;
}


.banner {
  position: absolute;
  top: 30%;
  left: 15%;
}

.banner h1 {
  font-family: "Baloo Da 2", serif;
  font-size: 8rem;
  font-weight: 300;
  color: #fff;
  width: 50%;
  line-height: 9rem;
  letter-spacing: 0.2rem;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.4);
  opacity: 0;
  animation: moveBanner 1s 0.5s forwards;
}

.banner p {
  font-family: "Josefin Slab", serif;
  font-size: 4rem;
  color: #fff;
  width: 70%;
  letter-spacing: 0.1rem;
  margin-bottom: 3rem;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.4);
  opacity: 0;
  animation: moveBanner 1s 0.7s forwards;
}

.banner button {
  width: 25rem;
  height: 7rem;
  background-color:  #53adc9d3;
  border: none;
  font-family: "Muli", serif;
  font-size: 2rem;
  text-transform: uppercase;
  color: #fff;
  text-shadow: 0 0.2rem 0.4rem rgba(0, 0, 0, 0.2);
  box-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.4);
  cursor: pointer;
  opacity: 0;
  animation: moveBanner 1s 0.9s forwards;
}

@keyframes moveBanner {
  0% {
    transform: translateY(40rem) rotateY(-20deg);
  }
  100% {
    transform: translateY(0) rotateY(0);
    opacity: 1;
  }
}







.about-us {
  width: 100%;
  background-color: #f5f5f5;
  padding-bottom: 15rem;
}

.section-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 7rem 0 10rem 0;
}

.section-heading {
  font-family: "Muli", serif;
  font-size: 5rem;
  font-weight: 300;
  color: #4b4b4b;
  margin-bottom: 6rem;
}

.underline {
  width: 12rem;
  height: 0.3rem;
  background-color:  #53adc9d3;
}

.services {
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: repeat(16, 1fr);
  grid-template-rows: repeat(6, 6rem);
  grid-row-gap: 4rem;
}

.service {
  width: 100%;
  margin-bottom: 2rem;
}

.service:nth-child(1) {
  grid-column: 4 / 7;
  grid-row: 1 / 3;
}

.service:nth-child(2) {
  grid-column: 3 / 6;
  grid-row: 3 / 5;
}

.service:nth-child(3) {
  grid-column: 4 / 7;
  grid-row: 5 / -1;
}

.service:nth-child(4) {
  grid-column: 11 / 14;
  grid-row: 1 / 3;
}

.service:nth-child(5) {
  grid-column: 12 / 15;
  grid-row: 3 / 5;
}

.service:nth-child(6) {
  grid-column: 11 / 14;
  grid-row: 5 / -1;
}

.service-header {
  display: flex;
  align-items: center;
  margin-bottom: 1rem;
}

.service-header i {
  font-size: 4rem;
  color: #4b4b4b;
  margin-right: 2rem;
}

.service-header h3 {
  font-family: "Baloo Da 2", serif;
  font-size: 2.6rem;
  line-height: 2.6rem;
  font-weight: 400;
  margin-bottom: 2rem;
}

.service-text {
  font-family: "Josefin Slab", serif;
  font-size: 1.6rem;
  text-align: justify;
}

.about-us-img-wrapper {
  grid-column: 7 / 11;
  grid-row: 2 / 6;
  width: 100%;
}

.about-us-img-wrapper img {
  width: 100%;
  object-fit: cover;
  opacity: 0.8;
}

.team {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 5rem 20rem 5rem;
}

.cards-wrapper {
  display: flex;
  justify-content: space-evenly;
  margin-top: 8rem;
  width: 100%;
}

.card {
  width: 37rem;
  height: 45rem;
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.4);
  border-radius: 0.5rem;
  position: relative;
}

.card-img-wrapper {
  width: 100%;
  height: 100%;
  background-color: #262626;
  border-radius: 0.5rem;
}

.card-img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.8;
  border-radius: 0.5rem;
  transition: opacity 0.3s;
}

.card:hover .card-img-wrapper img {
  opacity: 0.5;
}

.card-info {
  position: absolute;
  bottom: 0;
  padding: 2rem;
  text-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s;
}

.card:hover .card-info {
  bottom: 2rem;
  opacity: 1;
  visibility: visible;
}

.card-info h2 {
  font-family: "Baloo Da 2", serif;
  font-size: 2.5rem;
  line-height: 2.5rem;
  font-weight: 300;
  color: #eee;
}

.card-info h3 {
  font-family: "Muli", serif;
  font-size: 2rem;
  font-weight: 500;
  color: #a52a2a;
  margin-bottom: 1rem;
}

.card-info p {
  font-family: "Baloo da 2", serif;
  font-size: 1.4rem;
  line-height: 1.6rem;
  font-weight: 300;
  color: #eee;
  width: 80%;
  margin-bottom: 2rem;
}

.card-info button {
  width: 10rem;
  height: 3rem;
  background-color: #c29525;
  border: none;
  font-family: "Baloo Da 2", serif;
  font-size: 1.4rem;
  line-height: 1.5rem;
  color: #eee;
  border-radius: 0.3rem;
  box-shadow: 0 0.1rem 0.8rem rgba(0, 0, 0, 0.4);
}

.contact {
  width: 100%;
  height: 100vh;
  background-color: #272727;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-wrapper {
  width: 60%;
  height: 75rem;
  display: flex;
  box-shadow: 0 3rem 7rem rgba(0, 0, 0, 0.5);
}

.contact-left {
  width: 35%;
  background: linear-gradient(rgba(15, 15, 15, 0.6), rgba(22, 22, 22, 0.9)),
    url(images/balloons.jpeg) center no-repeat;
  background-size: cover;
}

.contact-right {
  width: 65%;
  background-color: #eee;
  padding: 3rem 10rem 10rem 10rem;
}

.contact-heading {
  font-family: "Baloo Da 2", serif;
  font-size: 6rem;
  font-weight: 300;
  color: #272727;
  margin-bottom: 5rem;
  text-align: center;
}

.contact-right form {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-group {
  position: relative;
}

.field {
  width: 45rem;
  background-color: transparent;
  border: none;
  border-bottom: 0.2rem dashed #636363;
  margin: 3rem 0;
  padding: 1rem 1rem 1rem 0;
  font-family: "Muli", serif;
  font-size: 1.6rem;
  color: #4b4b4b;
}

.input-group input {
  height: 4rem;
}

.input-group textarea {
  max-height: 7rem;
  max-width: 45rem;
}

.field:focus {
  border-bottom-style: solid;
}

.input-group label {
  position: absolute;
  left: 0;
  font-family: "Baloo Da 2", serif;
  font-size: 1.8rem;
  color: #4b4b4b;
  text-transform: uppercase;
  pointer-events: none;
  transition: all 0.3s;
}

.input-label {
  bottom: 3rem;
}

.message {
  bottom: 6rem;
}

.field:focus ~ label {
  transform: translateY(-3rem);
  font-size: 1.2rem;
}

.submit-btn {
  width: 45rem;
  height: 5rem;
  background-color: #53adc9d3;
  color: #fff;
  border: none;
  margin-top: 2rem;
  font-family: "Muli", serif;
  font-size: 2rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  cursor: pointer;
  text-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.5);
  box-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.3);
}

.footer {
  width: 100%;
  height: 15rem;
  background-color: #17181b;
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer-content {
  width: 60%;
  display: flex;
  justify-content: space-between;
}

.copyright {
  font-family: "Baloo Da 2", serif;
  font-size: 1.6rem;
  color: #a7a7a7;
}

.social-list a {
  margin: 0 2rem;
}

.social-list i {
  font-size: 2rem;
  color: #a7a7a7;
}

.scroll-btn {
  position: fixed;
  right: 5rem;
  bottom: 5rem;
  width: 4.5rem;
  height: 4.5rem;
  background-color: #da9797;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
  color: #fff;
  box-shadow: 0 0.1rem 0.6rem rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

@media (max-width: 1500px) {
  .about-us-img-wrapper {
    grid-row: 3 / -1;
  }

  .card {
    width: 34rem;
  }

  .contact-wrapper {
    width: 80%;
    height: 65rem;
  }

  .footer-content {
    width: 80%;
  }
}

@media (max-width: 1400px) {
  .banner h1 {
    font-size: 6rem;
    line-height: 7rem;
  }

  .banner p {
    font-size: 3rem;
  }

  .banner button {
    width: 20rem;
    height: 5rem;
    font-size: 1.6rem;
  }

  .menu-link {
    font-size: 3rem;
  }

  .service:nth-child(1) {
    grid-column: 3 / 7;
  }

  .service:nth-child(2) {
    grid-column: 2 / 6;
  }

  .service:nth-child(3) {
    grid-column: 3 / 7;
  }

  .service:nth-child(4) {
    grid-column: 11 / 15;
  }

  .service:nth-child(5) {
    grid-column: 12 / 16;
  }

  .service:nth-child(6) {
    grid-column: 11 / 15;
  }
}

@media (max-width: 1300px) {
  .team {
    padding-bottom: 5rem;
  }

  .cards-wrapper {
    flex-direction: column;
    align-items: center;
    margin-top: 4rem;
  }

  .card {
    margin-bottom: 8rem;
  }

  .contact-wrapper {
    width: 90%;
    height: 55rem;
  }

  .contact-heading {
    margin-bottom: 2rem;
  }

  .field {
    margin: 2rem 0;
  }
}

@media (max-width: 1000px) {
  .banner h1 {
    font-size: 5rem;
    line-height: 6rem;
  }

  .banner p {
    font-size: 2.5rem;
  }

  .banner button {
    width: 18rem;
    height: 4rem;
    font-size: 1.5rem;
  }

  .services {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .service {
    width: 40rem;
    margin-bottom: 6rem;
  }

  .about-us-img-wrapper {
    width: 40rem;
  }

  .about-us-img-wrapper img {
    width: 100%;
  }

  .contact-left {
    width: 0;
  }

  .contact-right {
    width: 100%;
  }

  .field {
    width: 55rem;
  }

  .input-group textarea {
    max-width: 55rem;
  }

  .submit-btn {
    width: 55rem;
  }

  .footer-content {
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 50%;
  }

  .copyright {
    order: 1;
    margin-top: 3rem;
  }
}

@media (max-width: 500px) {
  html {
    font-size: 45%;
  }

  .sidebar {
    width: 100%;
    right: -100%;
  }

  .change .hamburger-menu {
    right: 38rem;
  }

  .service {
    width: 30rem;
  }

  .footer {
    height: 18rem;
  }
}

    </style>
  </body>
</html>