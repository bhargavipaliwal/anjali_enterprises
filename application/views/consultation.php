<?php include('includes/header.php') ?>
<section class="pt-md-5 pb-md-5" style="background-image: url('assets/img/consultationbk.png');background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <img src="<?= base_url() ?>assets/img/images/consult.png" alt="Solegy Power Private Limited - Let's Connect Solegy" class="img-fluid">
            </div>

            <div class="col-lg-5">
                <div class="position-relative elements-block">
                    <h3 class="consultation">Book Your Free Consultation Today!</h3>
                    <div class="shadow p-4" style="background: #fff;border-radius: 0 0 10px 10px;">
                        <form class="contact" action="" method="post">
                            <?php
                            if ($this->session->has_userdata('msg')) {
                                echo $this->session->userdata('msg');
                                $this->session->unset_userdata('msg');
                            }
                            ?>
                            <div class="quform-elements">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="name">Name <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="email">Email <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="phone">Contact Number <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="Phone" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="address">Address <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="address" type="text" name="address" placeholder="Address" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="btn-style1 primary" type="submit"><span>Submit</span></button>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>

