<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
          $this->load->library('googlemaps');
        $this->load->model('list_model');
    }

    public function index() {


        $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
	});
}
centreGot = true;';
        $this->googlemaps->initialize($config);

// set up the marker ready for positioning 
// once we know the users location
        $marker = array();
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $data['info'] = $this->list_model->getlist();
                $this->load->view('home', $data);
    }

}
