<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon 5.0</title>
    <link rel="shortcut icon" type="image/png" href="assets/logo.svg">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Damion&family=Poppins:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>

<body>
     <!-- Home -->
     <section id="home">
        <div class="navbar">
            <header>
                <a class="logo" href="/main">
                    <img src="assets/logo.svg" alt="">
                </a>

                <nav>
                    <ul class="nav__links">
                        <li class="home__link">
                            <a href="#home">Home</a>
                        </li>
                        <li class="active__link">
                            <a href="#prizes">Prizes</a>
                        </li>
                        <li>
                            <a href="#mentor-jury">Mentor & Jury</a>
                        </li>
                        <li>
                            <a href="#timeline">Timeline</a>
                        </li>
                        <li>
                            <a href="#faq">FAQ</a>
                        </li>
                        <li>
                            <div class="sign-in">
                                <a href="/login">Sign In</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>


        <div class="home-container">
            <div class="home-title">
                <h1>HACKATHON 5.0</h1>
            </div>
            <div class="home-content">
                <div class="home-left">
                    <div class="home-description">
                        <h3>Changing the World Through<br>the Technology</h3>
                        <p>July 3 - 5, 2022</p>
                    </div>
                    <div class="home-register">
                        <a href="/register">Register Now</a>
                    </div>
                </div>
                <div class="home-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EuKu-YhkTLA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <img id="bulan" src="assets/Atas/Moon.svg" alt="">
            <!-- <img id="star" src="assets/Atas/Stars.svg" alt="" > -->
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="about-left">
            <img src="assets/about.png" alt="poster">
        </div>
        <div class="about-right">
            <div>
                <h1>About <br> Hackathon 5.0</h1>
                <p>Hackathon 5.0 is a 48-hour online coding competition where each team competes to create innovative applications or websites that could solve problems. Hackathon offers participant coding competition experience mentored by experts in their respective field. This year is the 5th time Binus Computer Club (BNCC) held a Hackathon event. Throughout the years, Hackathon has produced many innovative ideas and become the main event of TechnoScape.</p>
            </div>
            <div class="about-buttons">
                <div class="about-register">
                    <a href="/register">Register Now</a>
                </div>
                <div class="about-guidebook">
                    <a href="">Download Guidebook</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why -->

    <section id="why">
        <div class="whypage">
            <h2>Why Should You Join Hackathon</h2>
        <main class="grid">
        <img src="assets/why/cv.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/why/networking.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/why/mentor.svg" alt=" "" data-tilt data-tilt-scale="1.1"">
        <img src="assets/why/interview.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/why/develop skill.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/why/realize idea.svg" alt=""  data-tilt data-tilt-scale="1.1">
        </main>
        </div>
    </section>

    <!-- Champion Prize -->
    <section id="prizes">
        <h1>Champion Prize</h1>
        <div class="prizes-cols">
            <div>
                <img src="assets/prize/rank2.png" alt=""  data-tilt data-tilt-scale="1.1">
            </div>
            <div>
                <img src="assets/prize/rank1.png" alt=""  data-tilt data-tilt-scale="1.1">
            </div>
            <div>
                <img src="assets/prize/rank3.png" alt=""  data-tilt data-tilt-scale="1.1">
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section id="timeline">
        <div class="timeline-container">
            <div class="timeline-image">
                <img src="assets/timeline-astro.png" alt="timeline-poster"  >
            </div>
            <div class="timeline-content">
                <div>
                    <h1> Timeline </h1>
                    <img src="assets/timeline.png" alt="timeline-poster"  >

                </div>
            </div>
        </div>
    </section>

    <!-- Jury -->
    <section id="mentor-jury">
        <div class="container2">
            <h2>Meet Our Jury</h2>

            <main class="grid2">
                <img src="assets/jury/jury-design.svg" alt=""  data-tilt data-tilt-scale="1.1">
                <img src="assets/jury/jury-technology.svg" alt=""  data-tilt data-tilt-scale="1.1">
                <img src="assets/jury/jury-business.svg" alt=""  data-tilt data-tilt-scale="1.1">
                </main>
                </div>
    </section>

    <!-- Mentor -->
    <section id="mentor">
        <div class="container3">
            <h2>Meet Our Mentor</h2>

        <div class="toggle">
            <a onclick="showDesign()" id="design" href="#mentor">Design</a>
            <a onclick="showTechnology()" id="technology" href="#mentor">Technology</a>
            <a onclick="showBusiness()" id="business" href="#mentor">Business</a>

        </div>

        <main class="grid3">
            <div id="lol1" class="design">
            <article>
                <img src="assets/Mentor/Design/mentor-1.svg" alt=""  data-tilt data-tilt-scale="1.1">
            </article>

            <article>
                <img src="assets/Mentor/Design/mentor-2.svg" alt=""  data-tilt data-tilt-scale="1.1">
            </article>

            <article>
                <img src="assets/Mentor/Design/mentor-3.svg" alt=""  data-tilt data-tilt-scale="1.1">
            </article>
            </div>

            <div id="lol2" class="technology">
                <article>
                    <img src="assets/Mentor/Technology/mentor tech-1.svg" alt=""  data-tilt data-tilt-scale="1.1">
                </article>

                <article>
                    <img src="assets/Mentor/Technology/mentor tech-2.svg" alt=""  data-tilt data-tilt-scale="1.1">
                </article>

                <article>
                    <img src="assets/Mentor/Technology/mentor tech-3.svg" alt=""  data-tilt data-tilt-scale="1.1">
                </article>
            </div>

            <div id="lol3" class="business">
                <article>
                    <img src="assets/Mentor/Business/mentor business-1.svg" alt=""  data-tilt data-tilt-scale="1.1">
                </article>

                <article>
                    <img src="assets/Mentor/Business/mentor business-2.svg" alt=""  data-tilt data-tilt-scale="1.1">
                </article>

                <article>
                    <img src="assets/Mentor/Business/mentor business-3.svg" alt=""  data-tilt data-tilt-scale="1.1">
                </article>
            </div>
        </main>
        </div>
    </section>

   <!-- FAQ -->
   <section id="faq">
    <h1> Frequently Asked Questions </h1>
    <div class="faq-content">
        <div class="faq-accordion">
            <button class="accordion active">When is the registration deadline?</button>
            <div class="panel">
                <br>
                <p>- Participants can only join 1 team, either individually or collaboratively
                    (Each team can have up to 4 members)<br>
                  - Participants must be Indonesian citizens aged 17 to 25 to qualify.<br>
                  - Participants must submit the required documents on the Hackathon<br>
                    </p>
                <br>
            </div>

            <button class="accordion">What are the requirements for participation</button>
            <div class="panel">
                <br>
                <p>Registration page, such as:<br><br>
                    &nbsp;1. CV (Curriculum Vitae)<br>
                    &nbsp;2. Non-Binusian: ID Card (KTP/SIM/etc.)<br>
                    &nbsp;Binusian: Binusian Card</p>
                <br>
            </div>

            <button class="accordion">Is Hackathon 5.0 free of charge?</button>
            <div class="panel">
                <br>
                <p>We regret to inform you that this event is on charge. To join Hackathon 5.0, each team must make a payment according to the period below:
                    Early Bird (9 Juni 2022 - 30 Juni 2022):<br><br>
                    &nbsp;Binusian: Rp. 85.000,-<br>
                    &nbsp;Non-Binusian: Rp. 100.000,-<br><br>
                    General (1 Juli 2022 - 10 Juli 2022):<br><br>
                    &nbsp;Binusian: Rp. 100.000,-<br>
                    &nbsp;Non-Binusian: Rp. 120.000,-</p>
                <br>
            </div>

            <button class="accordion">Can I join more than one team?</button>
            <div class="panel">
                <br>
                <p>Unfortunately, you only allowed to join one team</p>
                <br>
            </div>

            <button class="accordion">If I don’t qualify for Hackathon 5.0, what about my registration fee?</button>
            <div class="panel">
                <br>
                <p>If participants don't qualify for Hackathon 5.0, their registration fee will be 100% refunded.</p>
                <br>
            </div>

            <button class="accordion">If I have any questions, who can I contact?</button>
            <div class="panel">
                <br>
                <p>If you have any questions, you may contact us on:<br><br>
                    &nbsp;Name: John Doe<br>
                    &nbsp;WA: 081367935342<br>
                    &nbsp;Line: @john_doe</p>
                <br>
            </div>
        </div>
        <div class="faq-astronaut">
            <img src="assets/faq-astro.png" alt="">
        </div>
    </div>
</section>

    <!-- Sponsor -->

    <section id="sponsor">
        <div class="spons">
            <h1>Sponsors</h1>

    <h2>Platinum</h2>
    <div class="sponsor1">

        <img src="assets/sponsor/gold/tiket.svg" alt=""  data-tilt data-tilt-scale="1.1">

    </div>

    <h2>Gold</h2>
    <div class="sponsor2">

        <img src="assets/sponsor/platinum/dicoding.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/sponsor/platinum/investree.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/sponsor/platinum/niagahoster.svg" alt=""  data-tilt data-tilt-scale="1.1">

    </div>

    <h2>Silver</h2>
    <div class="sponsor3">

        <img src="assets/sponsor/silver/bibit.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/sponsor/silver/cakap.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/sponsor/silver/coding id.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/sponsor/silver/pinhome.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/sponsor/silver/skilvul.svg" alt=""  data-tilt data-tilt-scale="1.1">
        <img src="assets/sponsor/silver/tanihub.svg" alt=""  data-tilt data-tilt-scale="1.1">
    </div>
    <!-- Media Partner -->

    <h1>Media Partner</h1>

    <div class="marquee">
        <div class="track">
          <div class="content">
            <img src="assets/Media Partner/bisnis indonesia.svg" alt="">
            <img src="assets/Media Partner/event jakarta.svg" alt="">
            <img src="assets/Media Partner/info seminar.svg" alt="">
            <img src="assets/Media Partner/lokerid.svg" alt="">
            <img src="assets/Media Partner/milenia news(1).svg" alt="">
            <img src="assets/Media Partner/ziliun.svg" alt="">
          </div>
        </div>
        <div class="track2">
          <div class="content">
            <img src="assets/Media Partner/bisnis indonesia.svg" alt="">
            <img src="assets/Media Partner/event jakarta.svg" alt="">
            <img src="assets/Media Partner/info seminar.svg" alt="">
            <img src="assets/Media Partner/lokerid.svg" alt="">
            <img src="assets/Media Partner/milenia news(1).svg" alt="">
            <img src="assets/Media Partner/ziliun.svg" alt="">
          </div>
        </div>


        </div>
         <!-- Other Events -->
         <div class="event">
            <h1>Other Event</h1>

            <div class="event2">
                <img src="assets/Other Event/developer workshop.svg" alt=" "">

                    <a class="butt" href="#">Register Now</a>

                <img src="assets/Other Event/virtual conference.svg" alt=""  >

                    <a class="butt2" href="#">Register Now</a>

            </div>




            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer>
        <div>
            <h1>Have Some Questions?</h1>
        </div>
        <div class="footer-container">
            <div class="footer-left">
                <div>
                    <h3>Connect with Us</h3>
                    <div class="footer-social">
                        <a href=""><img src="assets/footer-social/mail.png" alt=""></a>
                        <a href=""><img src="assets/footer-social/instagram.png" alt=""></a>
                        <a href=""><img src="assets/footer-social/twitter.png" alt=""></a>
                        <a href=""><img src="assets/footer-social/linkedin.png" alt=""></a>
                        <a href=""><img src="assets/footer-social/facebook.png" alt=""></a>
                    </div>
                </div>
                <div>
                    <h3>Powered & <br> Organized by</h3>
                    <img class="footer-bncc" src="assets/logo.svg" alt="">
                </div>
            </div>
            <div class="footer-right">
                <h3>Contact Us</h3>
                <div class="footer-wrapper">
                    <form class="footer-form" action="">
                        <input type="text" name="" id="" placeholder="Full Name">
                        <input type="email" name="" id="" placeholder="Email">
                        <input type="text" name="" id="" placeholder="Subject">
                        <textarea name="" id="" rows="5" placeholder="Message"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-copyright">
            <div>
                <p>All rights reserved BNCC 2022 @ Bina Nusantara Computer Club</p>
            </div>
            <div>
                <a href="">Privacy Policy & Terms of Service</a>
            </div>
        </div>
    </footer>

    <script>
        // FAQ Accordion
        // =================================================================
        var acc = document.getElementsByClassName("accordion");
        var i;

        var active = acc[0];
        var panel = active.nextElementSibling;
        panel.style.maxHeight = panel.scrollHeight + "px";;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {

                if (this != active && panel.style.maxHeight) {
                    active.classList.toggle("active");
                    panel.style.maxHeight = null;
                }

                this.classList.toggle("active");
                panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    active = this;
                } else {
                    console.log(active);
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    active = this;
                }
            });
        }
        //===================================================================
    </script>

    <script src="{{asset('/js/script.js')}}"></script>
    <script src="{{asset('/js/vanilla-tilt.js')}}"></script>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var navbar = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        })
    </script>
</body>

</html>
