<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?> | Netmatters</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/cbfcb73618.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="plugins/hamburger/hamburgers.min.css">
    <link rel="stylesheet" href="css/application.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
    <?php if (isset($maps)) { ?>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
        crossorigin=""/>
    <?php } ?>
    <link rel="icon" href="img/net_icon.webp" type="image/x-icon">
    
  </head>

  <body>
    <!-- hamburger menu -->
    <section id="hamburger-menu">
      <div class="side-nav">
        <a href="contact-us.php"><h4 class="header-box">Contact Us</h4></a>
        <a href="#"><div class="header-box">
          <div class="main-nav__item--child icon software__icon"></div>
          <div class="main-nav__item--child">Bespoke</div>
          <div class="main-nav__item--child">Sofware</div>
        </div></a>
        <ul>
          <li><a href="#">Bespoke CRM & ERP</a></li>
          <li><a href="#">Business Automation</a></li>
          <li><a href="#">Software Integrations</a></li>
          <li><a href="#">Mobile App Development</a></li>
          <li><a href="#">Bespoke Databases</a></li>
          <li><a href="#">Sharepoint Development</a></li>
          <li><a href="#">Operational systems</a></li>
          <li><a href="#">Business Central Implementation</a></li>
          <li><a href="#">Internet of Things (IOT) Software</a></li>
          <li><a href="#">Intranet Development</a></li>
          <li><a href="#">Customer Development Portal</a></li>
          <li><a href="#">Customer Portal Development</a></li>
          <li><a href="#">Reporting Hub</a></li>
        </ul>
        <a href="#"><div class="header-box">
          <div class="main-nav__item--child icon it-support__icon"></div>
          <div class="main-nav__item--child">IT</div>
          <div class="main-nav__item--child">Support</div>
        </div></a>
        <ul>
          <li><a href="#">Managed IT Support</a></li>
          <li><a href="#">Business IT Support</a></li>
          <li><a href="#">Office 365 for Business</a></li>
          <li><a href="#">IT Consultancy</a></li>
          <li><a href="#">Cloud Provider</a></li>
          <li><a href="#">Data Backup & Disaster Recovery</a></li>
        </ul>
        <a href="#"><div class="header-box">
          <div class="main-nav__item--child icon dig-marketing__icon"></div>
          <div class="main-nav__item--child">Digital</div>
          <div class="main-nav__item--child">Marketing</div>
        </div></a>
        <ul>
          <li><a href="#">Search Engine Optimisation (SEO)</a></li>
          <li><a href="#">Pay Per Click (PPC)</a></li>
          <li><a href="#">Conversion Rate Optimisation (CRO)</a></li>
          <li><a href="#">Email Marketing</a></li>
          <li><a href="#">Social Media Marketing</a></li>
          <li><a href="#">Content Marketing</a></li>
        </ul>
        <a href="#"><div class="header-box">
          <div class="main-nav__item--child icon tel-services__icon"></div>
          <div class="main-nav__item--child">Telecoms</div>
          <div class="main-nav__item--child">Services</div>
        </div></a>
        <ul>
          <li><a href="#">Business Mobile</a></li>
          <li><a href="#">Hosted VOIP Provider</a></li>
          <li><a href="#">Business VOIP Systems</a></li>
          <li><a href="#">Business Broadband</a></li>
          <li><a href="#">Leased Lines Provider</a></li>
          <li><a href="#">3CX Systems</a></li>
        </ul>
        <a href="#"><div class="header-box">
          <div class="main-nav__item--child icon web-design__icon"></div>
          <div class="main-nav__item--child">Web</div>
          <div class="main-nav__item--child">Design</div>
        </div></a>
        <ul>
          <li><a href="#">Bespoke Website Design</a></li>
          <li><a href="#">Ecommerce Website Design</a></li>
          <li><a href="#">Pay Monthly Websites</a></li>
          <li><a href="#">Branding & Design</a></li>
          <li><a href="#">Mobile App Development</a></li>
          <li><a href="#">Web Hosting</a></li>
        </ul>
        <a href="#"><div class="header-box">
          <div class="main-nav__item--child icon cyber-security__icon"></div>
          <div class="main-nav__item--child">Cyber</div>
          <div class="main-nav__item--child">Security</div>
        </div></a>
        <ul>
          <li><a href="#">Cyber Security Assesment</a></li>
          <li><a href="#">Cyber Security Management</a></li>
          <li><a href="#">Cyber Penetration Testing</a></li>
          <li><a href="#">Cyber Essentials Certification</a></li>
          <li><a href="#">PCI Compliance</a></li>
          <li><a href="#">Hacking Prevention</a></li>
        </ul>
        <a href="#"><div class="header-box">
          <div class="main-nav__item--child icon dev-course__icon"></div>
          <div class="main-nav__item--child">Developer</div>
          <div class="main-nav__item--child">Course</div>
        </div></a>
        <ul>
          <li><a href="#">Train for a Career in Tech</a></li>
          <li><a href="#">Skills Bootcamp</a></li>
          <li><a href="#">Scion Scheme Frequently Asked Questions</a></li>
          <li><a href="#">Scion Collaborators</a></li>
        </ul>
      </div>
      <div class="side-content">
        <ul>
          <li><a href="#">Services</a></li>
          <li><a href="#">Bespoke Software</a></li>
          <li><a href="#">IT Support</a></li>
          <li><a href="#">Digital Marketing</a></li>
          <li><a href="#">Telecoms Services</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Cyber Security</a></li>
        </ul>
        <ul>
          <li><a href="#">Our Work</a></li>
          <li><a href="#">Case Studies</a></li>
        </ul>
        <ul>
          <li><a href="#">Our Knowledge</a></li>
          <li><a href="#">Technologies</a></li>
          <li><a href="#">Industries</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Insights</a></li>
        </ul>
        <ul>
          <li><a href="#">Training</a></li>
          <li><a href="#">Train for a Career in Tech</a></li>
          <li><a href="#">Skills Bootcamp</a></li>
          <li><a href="#">SCS Frequently Asked Questions</a></li>
          <li><a href="#">Scion Collaborators</a></li>
        </ul>
        <ul>
          <li><a href="#">Events</a></li>
          <li><a href="#">GA4 Webinar</a></li>
        </ul>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Cambridge Office</a></li>
          <li><a href="#">Wymondham Office</a></li>
          <li><a href="#">Great Yarmouth Office</a></li>
        </ul>
        <ul>
          <li><a href="#">Covid Risk Assesments</a></li>
        </ul>
      </div>
    </section>

    <!-- cookie popup -->
    <section id="cookiePopup-overlay">
      <div id="cookiePopup">
        <h3>Cookies Policy</h3>
        <p>Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "Privacy Policy" otherwise click "Accept Cookies" to enter.</p>
        <div class="cookie-buttons">
          <button>Change Settings</button>
          <button id="acceptCookie">Accept</button>
        </div>
      </div> 
    </section>


    <div class="content-wrapper">

      <!-- overlay used when hamburger menu is opened -->
      <div id="grey-out"></div> 
      
      <!-- Header -->
      <header> 
        <div class="sticky-header">
          <!-- top banner -->
          <section>
            <div class="width top-banner">
              <div class="top-banner__row">
                <a class="netmatters top-banner__row--item" href="index.php"><img src="img/logo.png" alt="netmatters logo"></a>
                <a href="#" class=" box mouse top-banner__row--item is-visible-x-large-screen"><img class="mouse__child box__image mouse__image" src="img/mouse.png" alt="mouse icon"><div class="mouse__child">Support</div></a>
                <a href="contact-us.php" class=" box send top-banner__row--item is-visible-x-large-screen"><img class="send__child box__image send__image" src="img/send.png" alt="send icon"><div class="send__child">Contact</div></a>
                <form method="post" class="is-collapsed-small-screen top-banner__row--item top-search">
                    <input type="text" placeholder="Search.." class="search top-search__child is-collapsed-x-large-screen">
                    <button class="top-search__child search__icon icon"><img class="" src="img/search-white.png" alt="search icon"></button>
                </form>
                <a href="#" class="is-collapsed-large-screen phone top-banner__row--item"><img class="phone__image" src="img/phone.png" alt="phone icon"></a>
                
                <a href="#!" class="hamburger hamburger--spin top-banner__row--item box">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </a>

              </div>
              <form method="post" class="top-banner__row is-collapsed-large-screen search-wrapper">
                <input type="text" placeholder="Search.." class="search search-wrapper__item">
                <button class="search-wrapper__item inset-search-icon"><img class="inset-search-icon--image" src="img/search.png" alt="search icon"></button>
              </form>
            </div>
          </section>

          <!-- main nav -->
          <section>
            <div class="main-nav is-visible-x-large-screen primary">
            
              <div class="main-nav__item software">
                <a href="#">
                  <div class="main-nav__item--child icon software__icon"></div>
                  <div class="main-nav__item--child">Bespoke</div>
                  <div class="main-nav__item--child">Sofware</div>
                  <div class="triangle"></div>
                </a>
                <div class="menu-popup main-nav__item popup">
                  <div class="width">
                    <h3>Our Bespoke Software Services</h3>
                    <ul> 
                      <li><i class="fa-sharp fa-solid fa-gears"></i><a href="#">Workflow</a></li>
                      <li><i class="fa-sharp fa-solid fa-mobile-screen-button"></i><a href="#">Apps</a></li>
                      <li><i class="fa-sharp fa-solid fa-download"></i><a href="#">Management</a></li>
                      <li><i class="fa-sharp fa-solid fa-cloud"></i><a href="#">Intranet Development</a></li>
                      <li><i class="fa-sharp fa-solid fa-suitcase"></i><a href="#">Automation</a></li>
                      <li><i class="fa-sharp fa-solid fa-folder-open"></i><a href="#">Database</a></li>
                      <li><i class="fa-sharp fa-solid fa-user-group"></i><a href="#">Business Central</a></li>
                      <li><i class="fa-sharp fa-solid fa-cloud-arrow-down"></i><a href="#">Customer Portal Development</a></li>
                      <li><i class="fa-sharp fa-solid fa-shuffle"></i><a href="#">Integration</a></li>
                      <li><i class="fa-sharp fa-solid fa-arrow-right-arrow-left"></i><a href="#">Sharepoint</a></li>
                      <li><i class="fa-sharp fa-solid fa-laptop"></i><a href="#">Internet of Things</a></li>
                      <li><i class="fa-sharp fa-solid fa-earth-americas"></i><a href="#">Reporting Hub</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="main-nav__item it-support">
                <a href="#">
                  <div class="main-nav__item--child icon it-support__icon"></div>
                  <div class="main-nav__item--child">IT</div>
                  <div class="main-nav__item--child">Support</div>
                  <div class="triangle"></div>
                </a>
                <div class="menu-popup main-nav__item popup">
                  <div class="width">
                    <h3>Our IT Support Services</h3>
                    <ul> 
                      <li><i class="fa-sharp fa-solid fa-headphones-simple"></i><a href="#">Managed IT</a></li>
                      <li><i class="fa-sharp fa-solid fa-graduation-cap"></i><a href="#">Consultancy</a></li>
                      <li><i class="fa-sharp fa-solid fa-suitcase"></i><a href="#">Business IT</a></li>
                      <li><i class="fa-sharp fa-solid fa-cloud"></i><a href="#">Cloud Provider</a></li>
                      <li><i class="fa-sharp fa-solid fa-laptop"></i><a href="#">Office 365</a></li>
                      <li><i class="fa-sharp fa-solid fa-hard-drive"></i><a href="#">Data Backup</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="main-nav__item dig-marketing">
                <a href="#">
                  <div class="main-nav__item--child icon dig-marketing__icon"></div>
                  <div class="main-nav__item--child">Digital</div>
                  <div class="main-nav__item--child">Marketing</div>
                  <div class="triangle"></div>
                </a>
                <div class="menu-popup main-nav__item popup">
                  <div class="width">
                    <h3>Our Digital Marketing Services</h3>
                    <ul> 
                      <li><i class="fa-sharp fa-solid fa-magnifying-glass"></i><a href="#">Search (SEO)</a></li>
                      <li><i class="fa-sharp fa-solid fa-envelope"></i><a href="#">Email</a></li>
                      <li><i class="fa-sharp fa-solid fa-money-bill"></i><a href="#">Paid (PPC)</a></li>
                      <li><i class="fa-sharp fa-solid fa-user-group"></i><a href="#">Social Media</a></li>
                      <li><i class="fa-sharp fa-solid fa-arrow-trend-up"></i><a href="#">Conversion (CRO)</a></li>
                      <li><i class="fa-sharp fa-solid fa-pencil"></i><a href="#">Content</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="main-nav__item tel-services">
                <a href="#">
                  <div class="main-nav__item--child icon tel-services__icon"></div>
                  <div class="main-nav__item--child">Telecoms</div>
                  <div class="main-nav__item--child">Services</div>
                  <div class="triangle"></div>
                </a>
                <div class="menu-popup main-nav__item popup">
                  <div class="width">
                    <h3>Our Telecoms Services</h3>
                    <ul> 
                      <li><i class="fa-sharp fa-solid fa-ticket"></i><a href="#">Business Mobile</a></li>
                      <li><i class="fa-sharp fa-solid fa-gauge-high"></i><a href="#">Business Broadband</a></li>
                      <li><i class="fa-sharp fa-solid fa-phone"></i><a href="#">Hosted VoIP</a></li>
                      <li><i class="fa-sharp fa-solid fa-handshake"></i><a href="#">Leased Line</a></li>
                      <li><i class="fa-sharp fa-solid fa-square-phone"></i><a href="#">Business VoIP</a></li>
                      <li><i class="fa-sharp fa-solid fa-phone-volume"></i><a href="#">3CX Systems</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="main-nav__item web-design">
                <a href="#">
                  <div class="main-nav__item--child icon web-design__icon"></div>
                  <div class="main-nav__item--child">Web</div>
                  <div class="main-nav__item--child">Design</div>
                  <div class="triangle"></div>
                </a>
                <div class="menu-popup main-nav__item popup">
                  <div class="width">
                    <h3>Our Web Design Services</h3>
                    <ul> 
                      <li><i class="fa-sharp fa-solid fa-pencil"></i><a href="#">Stylish Websites</a></li>
                      <li><i class="fa-sharp fa-solid fa-mobile-screen-button"></i><a href="#">Apps</a></li>
                      <li><i class="fa-sharp fa-solid fa-cart-shopping"></i><a href="#">eCommerce Stores</a></li>
                      <li><i class="fa-sharp fa-solid fa-cloud"></i><a href="#">Web Hosting</a></li>
                      <li><i class="fa-sharp fa-solid fa-bullhorn"></i><a href="#">Branding</a></li>
                      <li><i class="fa-sharp fa-solid fa-laptop"></i><a href="#">Pay Monthly Websites</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="main-nav__item cyber-security">
                <a href="#">
                  <div class="main-nav__item--child icon cyber-security__icon"></div>
                  <div class="main-nav__item--child">Cyber</div>
                  <div class="main-nav__item--child">Security</div>
                  <div class="triangle"></div>
                </a>
                <div class="menu-popup main-nav__item popup">
                  <div class="width">
                    <h3>Our Cyber Security Services</h3>
                    <ul> 
                      <li><i class="fa-sharp fa-solid fa-paste"></i><a href="#">Assessment</a></li>
                      <li><i class="fa-sharp fa-solid fa-graduation-cap"></i><a href="#">Cyber Essentials</a></li>
                      <li><i class="fa-sharp fa-solid fa-clock"></i><a href="#">Management</a></li>
                      <li><i class="fa-sharp fa-solid fa-shield-halved"></i><a href="#">PCI/DSS</a></li>
                      <li><i class="fa-sharp fa-solid fa-flask"></i><a href="#">Penetration Testing</a></li>
                      <li><i class="fa-sharp fa-solid fa-folder-open"></i><a href="#">Hacker Prevention</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="main-nav__item dev-course">
                <a href="#">
                  <div class="main-nav__item--child icon dev-course__icon"></div>
                  <div class="main-nav__item--child">Developer</div>
                  <div class="main-nav__item--child">Course</div>
                  <div class="triangle"></div>
                </a>
                <div class="menu-popup main-nav__item popup">
                  <div class="width">
                    <h3>Our Developer Course Services</h3>
                    <ul> 
                      <li><i class="fa-sharp fa-solid fa-laptop"></i><a href="#">Train for a Career in Tech</a></li>
                      <li><i class="fa-sharp fa-solid fa-handshake"></i><a href="#">Scion Collaborators</a></li>
                      <li><i class="fa-sharp fa-solid fa-code"></i><a href="#">Skills Bootcamp</a></li>
                      <li><i class="fa-sharp fa-solid fa-circle-question"></i><a href="#">Scion Scheme Frequently Asked Questions</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        
      </header>