


<?php
include('header.php');
?>
            <!-- Required CSS -->
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            height: 100%;
        }

        .timeline {
            padding-left: 30px;

        }

        .timeline::before {
            left: 0px !important;
        }

        .timeline-item::after {
            left: -38px !important;
        }

        .timeline-item {
            margin-bottom: 30px;
            padding: 15px 20px;
            background: #f8fdfc;
            border-radius: 10px;
        }
    </style>
        <div class="page-banner" >
            <div class="overlay"></div>
            <h1 class="title">Career</h1>
        </div>
        <section class="career-hero text-center text-white">
            <div class="col-lg-12">
                <div class="container" data-aos="fade-up">
                    <div class="col-lg-6 mx-auto">

                        <h1>Build Your Career with Hayath Medicare</h1>
                    </div>
                    <p class="mt-4">Where passion meets purpose in healthcare excellence</p>
                    <a href="#openings" class="btn btn-light mt-3">Explore Opportunities</a>
                </div>
            </div>
        </section>
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row text-center">

                    <div class="col-md-3" data-aos="zoom-in">
                        <div class="glass-card">
                            <h5>Purpose-Driven Work</h5>
                            <p>Make a real impact in community healthcare</p>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="glass-card">
                            <h5>Career Growth</h5>
                            <p>Learning, promotions & leadership paths</p>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="glass-card">
                            <h5>Job Security</h5>
                            <p>Stable and expanding healthcare group</p>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="glass-card">
                            <h5>Ethical Culture</h5>
                            <p>Respect, transparency & teamwork</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="openings" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-up">Current Openings</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="timeline">

                            <div class="timeline-item" data-aos="fade-right">
                                <h5>Staff Nurse</h5>
                                <p>Kuttippuram / Clinics</p>
                            </div>

                            <div class="timeline-item" data-aos="fade-left">
                                <h5>Lab Technician</h5>
                                <p>Hayath Medicare Clinics</p>
                            </div>

                            <div class="timeline-item" data-aos="fade-right">
                                <h5>Pharmacist</h5>
                                <p>Pharma Care Division</p>
                            </div>

                            <div class="timeline-item" data-aos="fade-left">
                                <h5>Hospital Administrator</h5>
                                <p>Head Office</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 mt-5">
                        <div class="container mx-auto" data-aos="zoom-in">
                            <h3>Ready to Join Our Team?</h3>
                            <p>Send your resume or connect instantly</p>

                            <a href="mailto:careers@hayathmedicare.com" class="btn btn-success m-2">
                                Email Resume
                            </a>

                            <a href="https://wa.me/91XXXXXXXXXX" class="btn btn-success m-2">
                                WhatsApp HR
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>




   


<?php
include('footer.php');
?>