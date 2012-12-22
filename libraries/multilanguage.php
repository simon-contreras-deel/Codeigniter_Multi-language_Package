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
    	//resolving var autosetting to 'assets' I dont know the reason
        if($this->ci->session->userdata('language') == 'assets')
            $this->ci->session->set_userdata('language', $this->ci->config->item('language'));
            
        if($this->ci->session->userdata('language') != null){
            $this->ci->lang->reload('app', $this->ci->session->userdata('language'));
        }
    }
}
