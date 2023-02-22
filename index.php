<?php
session_start();

if ($_SERVER['HTTPS'] == 'true') {
  $url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header('Location: ' . $url);
  exit;
}

if(!isset($_SESSION['emailValidado']) || $_SESSION['emailValidado'] == false){
	header('Location: login.php');
	exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
  <script src="assets/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Ricoh RLA Summit</title>

</head>

<body>
  <main>
    <section class="bg-banner">

    </section>
    <article class="my-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-end">
            <div class="text-end px-5 margin-summit">
              <h2 class="red">Event description</h2>
              <p class="my-0 fw-semibold fs-5">Let´s envisioned the future now, let´s talk about Ricoh´s</p>
              <p class="my-0 fs-5">Value Proposition: Equip-Connect-Unleash, digital ecosystems adjusted to new market<br> trends, fullfillment through work, customers as the center of what we do and everything in between.</p>
            </div>
          </div>
        </div>
      </div>
    </article>
    <section class="bg-gray">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 d-flex px-0">
            <img src="assets/images/image-executive.png" alt="" class="w-100">
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="text-end px-5 pt-3 margin-summit">
              <h2 class="red">Why you should attend</h2>
              <p class="fs-5"><strong>Executive networking</strong> with Ricoh Top Regional Leadership Team, Ricoh Alliance Partners, Strategic Customers & Business Partners.
              </p>
              <p class="fs-5"><strong>Executive sessions, Be a key player on our</strong><span class="red fst-italic"> “Accelerate Digital Adoption Journey”</span> showing creative solutions for today’s business challenges.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <article>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 my-3">
            <h2 class="text-center my-4 red">Event highlights</h2>
          </div>
          <div class="col-lg-6 col-sm-12 d-flex align-items-center px-5 pb-3">
            <div class="fs-5 lh-sm margin-summit">
              <ul class="list-unstyled">
                <li><strong>- Top Executive Networking:</strong> All in one place: Ricoh Top Regional Leadership Team, Ricoh Alliance Partners and Strategic Customers

                <li><strong>- Networking sessions</strong> with endless opportunities, an experience you cannot get online.</li>

                <li><strong>- Interactive Breakout Sessions</strong> to share and discuss Ricoh’s business strategy and value proposition.</li>

                <li><strong>- Sponsor Exhibits</strong> through the “Accelerate Digital Transformation Journey” & “VR Experience” for an all-interactive event about Ricoh’s Digital Ecosystem.</li>

                <li><strong>- Networking events:</strong> group dinners, relaxation activities and much more.</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-end px-0">
            <img src="assets/images/summit-highlights.png" alt="" class="w-100">
          </div>
        </div>
      </div>
    </article>
    <article>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 my-5">
            <h3 class="text-center fw-semibold fs-2">Take advantage of this in-person event!</h3>
          </div>
          <div class="col-lg-12 ps-5 margin-summit w-50 w-auto">
            <div class="d-flex align-items-center mb-5">
              <img src="assets/images/calendar-sm.jpg" alt="" class="w-small">
              <div>
                <h4 class="red my-0">Agenda at-a-glance</h4>
                <p class="fs-small my-0">(times & sessions subject to change without notice)</p>
              </div>
            </div>
            <div>
              <h4 class="fw-semibold">Monday, April 17 - Pre-Event Day</h4>
              <ul class="list-unstyled fs-5">
                <li>- 9:00 am - 5:00 pm&nbsp;&nbsp;&nbsp;&nbsp; Arrivals & registration
                </li>
                <li>- Time TBD -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Accelerate Digital Adoption Journey - Exhibition set-up
                </li>
                <li>- Time TBD -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evening Welcome reception Ricoh & Sponsors
                </li>
              </ul>
            </div>
            <div>
              <h4 class="fw-semibold">Tuesday, April 18, Day 1</h4>
              <ul class="list-unstyled fs-5">
                <li>- 7:00 am - 5:30 pm&nbsp;&nbsp;&nbsp;&nbsp; Registration & Information Hours
                </li>
                <li>- 7:00 am - 7:30 am&nbsp;&nbsp;&nbsp;&nbsp; Short fitness sesión (optional)
                </li>
                <li>- 8:00 am - 9:00 am&nbsp;&nbsp;&nbsp;&nbsp; Breakfast
                </li>
                <li>- 9:00 am - 12:00 pm&nbsp;&nbsp; General Session - Part 1 (only for Ricoh executives)
                </li>
                <li>- 12:00 pm - 1:00 pm&nbsp;&nbsp; Lunch
                </li>
                <li>- 1:00 pm - 4:00 pm&nbsp;&nbsp;&nbsp;&nbsp; General Session - Part 2 (only Ricoh executives)
                </li>
                <li>- 4:00 pm - 5:00 pm&nbsp;&nbsp;&nbsp;&nbsp; Accelerate Digital Adoption Journey/VR Experience
                </li>
                <li>- 5:00 pm - 5:30 pm&nbsp;&nbsp;&nbsp;&nbsp; Network with Ricoh & Sponsors
                </li>
                <li>- 7:00 pm - 10:00 pm&nbsp;&nbsp; Ricoh Excellence Club Awards (limited to Ricoh and Alliance Partners)
                </li>
                <p class="fs-small">** Alliance Partners arrive on this day but only join us for the evening reception on Day 1 & event Day 2, Day 3.</p>
              </ul>
            </div>
            <div>
              <h4 class="fw-semibold">Wednesday, April 19, Day 2</h4>
              <ul class="list-unstyled fs-5">
                <li>- 7:00 am - 5:30 pm&nbsp;&nbsp;&nbsp;&nbsp; Registration & Information Hours
                </li>
                <li>- 7:00 am - 7:30 am&nbsp;&nbsp;&nbsp;&nbsp; Fun with the sun sesión (optional)
                </li>
                <li>- 8:00 am - 9:00 am&nbsp;&nbsp;&nbsp;&nbsp; Breakfast
                </li>
                <li>- 9:00 am - 12:00 pm&nbsp;&nbsp; General Session - Part 1(only for Ricoh executives & Alliance Partners)
                </li>
                <li>- 12:00 pm - 1:00 pm&nbsp;&nbsp; Lunch
                </li>
                <li>- 1:00 pm - 3:00 pm&nbsp;&nbsp;&nbsp;&nbsp; Breakout sessions Ricoh 2025
                </li>
                <li>- 3:00 pm - 5:00 pm&nbsp;&nbsp;&nbsp;&nbsp; Focus Groups with Strategic Customers *
                </li>
                <li>- 5:00 pm - 7:00 pm&nbsp;&nbsp;&nbsp;&nbsp; Accelerate Digital Adoption Journey/VR Experience
                </li>
                <li>- 8:00 pm - 10:00 pm&nbsp;&nbsp; Ricoh Leadership Team & Alliance Partners dinner
                </li>
                <dl>Ricoh OpCo & Customers dinner</dl>
                <div class="d-block">
                  <p class="fs-small my-0">* Selected Strategic Customers must arrive in the morning to join the Focus Group
                  </p>
                  <p class="fs-small my-0">** Ricoh Customers arrive on this day but only join us for the Dinner and the following Day 3.
                  </p>
                </div>
              </ul>
            </div>
            <div>
              <h4 class="fw-semibold">Thursday, April 20 - Day 3</h4>
              <ul class="list-unstyled fs-5">
                <li>- 7:00 am - 5:30 pm&nbsp;&nbsp;&nbsp;&nbsp; Registration & Information Hours</li>
                <li>- 7:00 am - 7:30 am&nbsp;&nbsp;&nbsp;&nbsp; Mindfulness / Streching activity (optional)</li>
                <li>- 8:00 am - 9:00 am&nbsp;&nbsp;&nbsp;&nbsp; Breakfast </li>
                <li>- 9:00 am - 12:00 pm&nbsp;&nbsp; General Session with Keynote Speaker <br>
                  (only for Ricoh, Alliance Partners & Customers)</li>
                <li>- 12:00 pm - 1:00 pm&nbsp;&nbsp; Lunch</li>
                <li>- 1:00 pm - 3:00 pm&nbsp;&nbsp;&nbsp;&nbsp; Customer Centric Digital Solutions Showcase</li>
                <li>- 3:00 pm - 4:30 pm&nbsp;&nbsp;&nbsp;&nbsp; Accelerate Digital Adoption Journey//VR Experience</li>
                <li>- 4:30 pm - 5:30 pm&nbsp;&nbsp;&nbsp;&nbsp; Happy Hour, Network with attendees</li>
                <li class="ps-2">END OF THE EVENT</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
    <article id="who-should-attend">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 my-5">
            <h2 class="red text-center">Who should attend</h2>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="fs-5 w-auto margin-who px-5">
              <p class="fw-semibold my-0">Ricoh Top Regional Leadership Team</p>
              <p>Arrivals on Monday, April 17
                First event: Evening Welcome Reception,
                7:00pm - 9:00pm
                Departures on Friday, April 21, Saturday, April 22
                (based on agenda)</p>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="fs-5 w-auto margin-who px-5">
              <p class="fw-semibold my-0">Ricoh Alliance Partners</p>
              <p>Number of guests is limited to 2 executives
                Arrivals on Tuesday, April 18
                First event: Ricoh Awards Ceremony,
                7:00 pm - 9:00 pm
                Departures on Friday, April 21</p>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="fs-5 w-auto margin-who px-5">
              <p class="fw-semibold my-0">Ricoh Business Partners (Sponsors)</p>
              <p>Number of guests is based on Sponsorship Package chosen
                Arrivals on Sunday, April 16 (event set-up)
                First event: Monday, April 17, Evening Welcome Reception, 7pm - 9 pm
                Departures on Saturday, April 22</p>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="fs-5 w-auto margin-who px-5">
              <p class="fw-semibold my-0">Ricoh Strategic Customers </p>
              <p>Arrivals on Wednesday, April 19
                First event: Ricoh dinner hosted by country
                Departures on Friday, April 210</p>
            </div>
          </div>
        </div>
      </div>
    </article>
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="red text-center">Registration</h2>
        </div>
      </div>
    </div>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 d-lg-none d-sm-flex justify-content-end px-0 mb-3">
            <img src="assets/images/registration.png" alt="" class="w-100">
          </div>
          <div class="col-md-6 ps-5">
            <div class="text-start margin-summit">
              <h3 class="my-0 ">Registration is now open!</h3>
              <p class="red fs-small">The deadline to register for this event is April 13, 2023</p>
            </div>
            <div class="margin-summit">
              <p class="mb-0">What's included?</p>
              <ul class="list-unstyled fs-5">
                <li>- Participation in the general and breakout sessions</li>
                <li>- Breakfast (Tuesday, Wednesday, Thursday)</li>
                <li>- Lunch (Tuesday, Wednesday, Thursday)</li>
                <li>- Dinner: specific group events</li>
              </ul>
            </div>
            <div class="d-block text-center">
                <a href="registration.php">
                    <button class="fs-5 button-cta">Click here</button>
                </a>
              <p class="fs-5 mt-3">to complete yout registration</p>
            </div>
          </div>
          <div class="col-md-6 d-none d-lg-flex justify-content-end px-0">
            <img src="assets/images/registration.png" alt="" class="w-100">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="row justify-content-between">
          <div class="col-md-6 d-flex px-0">
            <img src="assets/images/hotel.png" alt="" class="w-100">
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center px-5">
            <div class="mt-3 margin-summit">
              <h3 class="red text-end">Hotel & travel information</h3>
              <p class="text-end fs-5">Located in the heart of Santa Fe, one of Mexico City's most important financial and corporate districts, the modern Hilton Mexico City Santa Fe hotel is ideally located within the dynamic SAMARA complex, which offers corporate offices and a luxurious shopping center. This elegant Santa Fe hotel is steps from restaurants, movie theaters, shopping, and entertainment options, a 40-minute drive from Benito Juarez International Airport and an hour from Toluca Airport.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 d-flex align-items-center px-5">
            <div id="hotel " class="margin-summit">
              <h2>Hotel</h2>
              <p class="fs-5">Hilton Mexico City Santa Fe<br>
                Located in Samara Shops<br>
                Antonio Dovali Jaime 70, Santa Fe, Zedec<br> Sta Fé, Álvaro Obregón, 01219 Mexico City, CDMX, Mexico<br>
                +52 55 5985 9000</p>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-end py-0 px-0">
            <img src="assets/images/hotel-info.png" alt="" class="w-100">
          </div>
        </div>
      </div>
    </section>
    <article class="mt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-11 padding-summit px-5">
            <h2 class="text-center">Hotel Reservation</h2>
            <p class="fs-5">We have a room block on hold at the hotel which offers attendees the special discounted rate of $300 per night (single or double occupancy) including buffet breakfast. The daily resort fee is discounted to $XX and includes: Wi-Fi access in sleeping rooms, use of the Health Club.</p>
            <p class="fs-5">Discounted rates are available from April 15 - 23 based on room availability.</p>
            <p class="fs-5">This room block is on a first-come, first-served basis, based on availability and a deadline of <span class="red">April 10, 2023.</span> After this date, you will need to contact the hotel directly for reservations, our discounted rate will no longer apply.</p>
            <div class="text-center mb-5">
              <p class="fw-bold fs-3">To book your discounted hotel reservations</p>
              <button class="fs-5 button-cta">Click here</button>
            </div>
            <div>
              <ul class="list-unstyled fs-5">
                <li>- Hotel Check-In time is 4:00 p.m. / Check-Out time is 11:00 a.m.</li>
                <li>- Reservations require a credit card </li>
                <li>- Cancellation is 72 hours prior to arrival, no show rooms are charged one-night room and tax.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
    <article>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-11 padding-summit px-5">
            <div>
              <h3 class="fw-bold">Dress code</h3>
              <p class="fs-5">The type of attire is smart casual and relaxed, but still professional and appropriate for the type of meeting and work environment.
                Smart Casual: denim pants (jeans), dockers, khaki pants, dresses and skirts, polo shirts, collared shirts, button-down, jackets, sweaters. Tennis/sneakers, mocasinns, flats, loafers, closed shoes with or without heels, boots. </p>
              <p class="fs-5">Please avoid: suits and ties, party dresses, sports pants, ripped jeans, faded jeans, shorts or Bermuda shorts, collarless or sleeveless T-shirts or shirts, shirts with images, slogans or messages, flip flops, miniskirts.</p>
            </div>
            <div class="mt-5">
              <h3 class="fw-bold">Weather forecast</h3>
              <p class="fs-5">The average temperature in Mexico City in April for a typical day ranges from a high of 79°F (26°C) to a low of 48°F (9°C). Some would describe it as mildly cool, comfortable.</p>
            </div>
            <div>
              <h3 class="fw-bold">Transfers</h3>
              <p class="fs-5">For transfer arrangements, please contact any of the following transportation companies:
                Name, website, contact email, phone</p>
            </div>
          </div>
        </div>
      </div>
    </article>
    <section class="bg-footer py-4 my-4">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <p class="text-center fs-small mb-0">
              <span class="red">For general event questions, contact Ricoh at:</span><br>
              patricia.releford@ricoh-usa.com<br>
              (954) 459-7446
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container-flex py-4">
      <div class="row-flex">
        <div class="col-lg d-flex justify-content-center">
          <img src="assets/images/ricoh-logo-footer.png" alt="">
        </div>
      </div>
    </div>
  </footer>
</body>

</html>