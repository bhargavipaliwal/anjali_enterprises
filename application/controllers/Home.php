<?php
class Home extends CI_Controller

{
    public function index()
    {

        $data['title'] = 'Home';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function contact()
    {

        $data['title'] = 'Contact';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('contact');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function about()
    {

        $data['title'] = 'About';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('about');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function our_technology()
    {

        $data['title'] = 'Our Technology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('our-technology');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function consultation()
    {

        $data['title'] = 'Our Technology';
        $this->load->view('includes/header-link', $data);
        $this->load->view('consultation');
    }

    public function benefits()
    {

        $data['title'] = 'Benefits';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('benefits');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function service()
    {

        $data['title'] = 'Benefits';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('service');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function solar_inverters()
    {

        $data['title'] = 'Benefits';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('solar_inverters');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function BOS_Materials ()
    {

        $data['title'] = 'Benefits';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('BOS_Materials');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function case_study()
    {

        $data['title'] = 'Benefits';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('case-study');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function service_details_availability()
    {

        $data['title'] = 'Service Availability Details';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('service-details-availability');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function service_details_support()
    {

        $data['title'] = 'Service Support Details';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('service-details-support');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function privacy_policy()
    {

        $data['title'] = 'Privacy Policy';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('privacy-policy');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function terms_services()
    {

        $data['title'] = 'Terms Of Services';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('terms-services');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function carbonization_mobile_unit()
    {

        $data['title'] = 'Carbonization Mobile Unit Negative Emission Tech';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('carbonization-mobile-unit');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

}
