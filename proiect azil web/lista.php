<?php
  echo "The current date and time is: " . date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Feedback-uri oferite  </title>
      <link rel="stylesheet" href="lista.css">
      <link rel="stylesheet" href="style.css">
       <section class="header">
      <nav>
        <a href="index.html"><img src="images/logo.jpg"></a>
        <div class="nav-links">
          <i class="fa fa-times"></i>
          <ul>
            <li><a href="">ACASA</a></li>
            <li><a href="register.html">AUTENTIFICARE</a></li>
            <li><a href="lkista2.html">Servicii oferite</a></li>
            <li><a href="lista.html">TARIFE</a></li>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars"></i>
      </nav>
           <p>Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competenAvem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifiAvem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferțe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifiAvem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.Avem competențe superioare pe partea medicală, fapt care ne permite prevenirea și tratarea afecțiunilor medicale specifice persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.ce persoanelor vârstnice sau transferul rapid, la spital, în cazul problemelor medicale acute.</p>
    </section>
      
      
    <style>
         body {
      background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/happy.jpg);
      background-size: cover;
      background-position: center;
    }
      #list-items li:nth-child(n+3) {
        display: none;
      }
      #view-more {
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
       
    <h1>Feedback-uri oferite</h1>
    <ul id="list-items">
      <li>Feedback 1</li>
      <li>Feedback 2</li>
      <li>Feedback 3</li>
      <li>Feedback 4</li>
      <li>Feedback 5</li>
    </ul>
    <button id="view-more">View more</button>
    <script>
      document.getElementById("view-more").addEventListener("click", function() {
        var items = document.querySelectorAll("#list-items li:nth-child(n+3)");
        for (var i = 0; i < items.length; i++) {
          items[i].style.display = "list-item";
        }
        document.getElementById("view-more").style.display = "none";
      });
    </script>
  </body>
</html>