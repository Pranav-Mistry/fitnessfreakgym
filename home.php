<?php
ob_start();
include('header.php');
?>

<?php
			session_start();
			
			$name=$_SESSION['user'];
			if(!empty($name))
						{
						echo "<h1 Style=\"color:green;text-align:center\">Welcome, $name</h1>";
						}
						else
						{
							header("Location: index.php");
						}
			
		?>


    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img class="about__bg" src="Images/dot-bg.png" alt="bg" />
        <img src="Images/class22.jpg" alt="about" />
      </div>
      <div class="about__content">
        <h2 class="section__header">About us</h2>
        <p class="section__description">
          Led by our team of expert and motivational instructors, "The Class You
          Will Get Here" is a high-energy, results-driven session that combines
          a perfect blend of cardio, strength training, and functional
          exercises.
        </p>
        <div class="about__grid">
          <div class="about__card">
            <span><i class="ri-open-arm-line"></i></span>
            <div>
              <h4>Open Door Policy</h4>
              <p>
                We believe in providing unrestricted access to all individuals,
                regardless of their fitness level, age, or background.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-shield-cross-line"></i></span>
            <div>
              <h4>Fully Insured</h4>
              <p>
                Your peace of mind is our top priority, and our commitment to
                your safety extends to every aspect of your fitness journey.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-p2p-line"></i></span>
            <div>
              <h4>Personal Trainer</h4>
              <p>
                With personalized workout plans tailored to your needs, we will
                ensure that you get the most out of your gym experience.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container class__container" id="class">
      <h2 class="section__header">Our Classes</h2>
      <p class="section__description">
        Discover a diverse range of exhilarating classes at our gym designed to
        cater to all fitness levels and interests. Whether you're a seasoned
        athlete or just starting your fitness journey, our classes offer
        something for everyone.
      </p>
      <div class="class__grid">
        <div class="class__card">
          <img src="Images/dot-bg.png" alt="bg" class="class__bg" />
          <img src="Images/class1.jpg" alt="class" />
          <div class="class__content">
            <h4>Strength Training</h4>
            <p>Resistance Training</p>
          </div>
        </div>
        <div class="class__card">
          <img src="Images/dot-bg.png" alt="bg" class="class__bg" />
          <img src="Images/class.webp" alt="class" />
          <div class="class__content">
            <h4>Flexibility & Mobility</h4>
            <p>Yoga & Pilates</p>
          </div>
        </div>
        <div class="class__card">
          <img src="Images/dot-bg.png" alt="bg" class="class__bg" />
          <img src="Images/class2.jpg" alt="class"/>
          <div class="class__content">
            <h4>HIIT</h4>
            <p>Circuit Training</p>
          </div>
        </div>
        <div class="class__card">
          <img src="Images/dot-bg.png" alt="bg" class="class__bg" />
          <img src="Images/class.jpeg" alt="class" />
          <div class="class__content">
            <h4>Group Fitness</h4>
            <p>Zumba or Dance</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container trainer__container" id="trainer">
      <h2 class="section__header">Our Trainers</h2>
      <p class="section__description">
        Our trainers are more than just experts in exercise; they are passionate
        about helping you achieve your health and fitness goals. Our trainers
        are equipped to tailor workout programs to meet your unique needs.
      </p>
      <div class="trainer__grid">
        <div class="trainer__card">
          <img src="Images/ankittrainer.jpeg" alt="trainer" />
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Giga Chad </h4>
            <h5>Strength and Conditioning</h5>
            <hr />
            <p>
              With a background in competitive sports, he's dedicated to helping
              you reach your peak physical performance.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-google-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
          </div>
        </div>
        <div class="trainer__card">
          <img src="Images/gigachad.png" alt="trainer" />
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Ankit Bainpuriya</h4>
            <h5>Sapate Star</h5>
            <hr />
            <p>
              His energetic and dynamic workouts are designed to push your
              limits, boost metabolism, and torch calories.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-google-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
          </div>
        </div>
        <div class="trainer__card">
          <img src="Images/trainergirl.webp" alt="trainer" />
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Kanika Sunaria</h4>
            <h5>Yoga and Mindfulness</h5>
            <hr />
            <p>
              Kanika's sessions are about physical postures and also about
              cultivating inner peace and mindfulness.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-google-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container price__container" id="price">
      <h2 class="section__header">Our Pricing</h2>
      <p class="section__description">
        Our pricing plan comes with various membership tiers, each tailored to
        cater to different preferences and fitness aspirations.
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__content">
            <h4>Basic Plan</h4>
            <img src="Images/price-1.png" alt="price" />
            <p>
              Our Basic Plan is the perfect starting point for individuals
              looking to kickstart their fitness journey or maintain an active
              lifestyle.
            </p>
            <hr />
            <h4>Key Features</h4>
            <p>Smart workout plan</p>
            <p>At home workouts</p>
			<div>
		  <h3 style="color:red">Rs:1000/- Only</h3>
		  </div>
          </div>
          <a href="one.php"><button class="btn">Join Now</button></a>
        </div>
        <div class="price__card">
          <div class="price__content">
            <h4>Weekly Plan</h4>
            <img src="Images/price-2.png" alt="price" />
            <p>
              Our weekly plan is designed to provide structure and variety to
              your workouts, ensuring you stay motivated and on track.
            </p>
            <hr />
            <h4>Key Features</h4>
            <p>PRO Gyms</p>
            <p>Smart workout plan</p>
            <p>At home workouts</p>
			<h3 style="color:red">Rs:1500/- Only</h3>
          </div>
		  
          <a href="two.php"><button class="btn">Join Now</button></a> 
        </div>
        <div class="price__card">
          <div class="price__content">
            <h4>Monthly Plan</h4>
            <img src="Images/price-3.png" alt="price" />
            <p>
              With this flexible membership, you'll have access to our
              state-of-the-art gym facilities, expert trainers, and a vibrant
              fitness community
            </p>
            <hr />
            <h4>Key Features</h4>
            <p>ELITE Gyms & Classes</p>
            <p>PRO Gyms</p>
            <p>Smart workout plan</p>
            <p>At home workouts</p>
            <p>Personal Training</p>
			<h3 style="color:red">Rs:2500/- Only</h3>
          </div>
          <a href="three.php"><button class="btn">Join Now</button></a> 
        </div>
      </div>
    </section>

    <section class="section__container client__container" id="client">
      <h2 class="section__header">What People Says About Us?</h2>
      <p class="section__description">
        These testimonials serve as a testament to our commitment to helping
        individuals achieve their fitness goals, and fostering a supportive
        environment for everyone who walks through our doors.
      </p>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              <img src="Images/client3.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-line"></i></span>
              </div>
              <p>
                The trainers here customized a plan that balanced my work-life
                demands, and I've seen remarkable progress in my fitness
                journey. It's not just a gym; it's my sanctuary for self-care.
              </p>
              <h4>Shivam Purohit</h4>
              <h5>Footballer</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <img src="Images/client2.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-half-fill"></i></span>
              </div>
              <p>
                The trainers' expertise and the gym's commitment to cleanliness
                during these times have made it a safe haven for me to maintain
                my health and de-stress.
              </p>
              <h4>Daksh Verma</h4>
              <h5>Owner of confidence sector</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <img src="Images/client.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-half-fill"></i></span>
                <span><i class="ri-star-line"></i></span>
              </div>
              <p>
                The variety of classes and the supportive community have kept me
                motivated. I've shed pounds, gained confidence, and found a new
                level of energy to inspire my students.
              </p>
              <h4>Pranav Raj</h4>
              <h5>Speaker</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <img src="Images/client4.jpg" alt="client" />
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                This gym's 24/7 access has been a lifesaver. Whether it's a
                late-night workout or an early morning session, the convenience
                here is unbeatable.
              </p>
              <h4>Shaleen Chordia</h4>
              <h5>Singer</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	


 <?php
include('footer.php');
?>

 