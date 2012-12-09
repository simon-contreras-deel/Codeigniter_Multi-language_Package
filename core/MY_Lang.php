<?php
/**
 * My_Lang
 *
 *	Adding real multilanguage feature
 *
 * @author		Simon Martin
 */

class My_Lang extends CI_Lang{

	function __construct()
    {
        parent::__construct();
    }

	/**
     * Resets the class variables
     *
     * @access  public
     * @param   void
     * @return  void
     */
    function reset()
    {
		$this->language = array();
		$this->is_loaded = array();
    }

	/**
     * Reloads currently loaded language files
     *
     * @access  public
     * @param   void
     * @return  void
     */
    function reload($file, $new_language)
    {
        $this->reset();
        $this->load($file, $new_language);
    }
}