<?php include 'header.php' ?>

<section class="contact-inner-page">
    <div class="container">
        <h6> Contact Us </h6>
        <h1> Fostering Successful <br> <span>Digital Relationships</span><strong>.</strong> </h1>
        <p> We love taking on exciting new projects for aspiring businesses and growth-oriented clients. <br> Get in
            touch with us today for a free strategic consultation! </p>
    </div>
</section>

<!-- Contact Inner Page Section -------------->

<section class="contact-inner-sect-2">
    <div class="container">
        <div class="contact-inner-heading">
            <h1> Get In <span> Contact </span></h1>
        </div>

        <div class="contact-us-form">
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-10 col-lg-10 col-12">
                    <form action="/sending/" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input type="text" placeholder="Full Name"
                                    name="cn" required></div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input type="text" placeholder="Last Name"
                                    name="gn" required></div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input type="email" placeholder="Email"
                                    name="em" required></div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input type="tel" placeholder="Number"
                                    name="pn" required></div>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-12"><textarea placeholder="Message" name="msg"
                                    required></textarea></div>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                                <div class="contact-inner-btn">
                                    <button type="submit" name="submit" value="Submit">SEND
                                        MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-lg-6">
                <input type="text" placeholder="First Name" required>
            </div>
            <div class="col-lg-6">
                <input type="text" placeholder="Last Name">
            </div>
            <div class="col-lg-6">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="col-lg-6">
                <input type="tel" placeholder="Phone Number" required>
            </div>
            <div class="col-lg-6">
                <textarea name="msg" placeholder="Message"></textarea>
            </div>
        </div> -->
    </div>
</section>

<!-- Contact Inner Page Section -------------->


<?php include 'footer.php' ?>