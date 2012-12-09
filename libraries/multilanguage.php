<?php
/**
 * MultiLanguage
 *
 *	Adding real multilanguage feature
 *
 * @author		Simon Martin
 */

class Multilanguage {

    function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->library('session');

        $this->reload();
    }
	

    function reload()
    {
        if($this->ci->session->userdata('language') != null){
            $this->ci->lang->reload('app', $this->ci->session->userdata('language'));
        }
    }
}