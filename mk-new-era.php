<?php
/*
 * @link   https://moneys.today/mk-new-era-plugin/
 * @since  5.0
 * @package mk-new-era
 * Plugin Name: Master Key Get Remote JSON Plugin
 * Plugin URI: https://moneys.today/
 * Description: Test Plugin for Inpsyde
 * Author: Sabrina Torres (SA) & Mark Dgz (WPMAN)
 * Version:0.1.0
 * UpdDated: 2020-05-11 14:31
 * Author URI: https://moneys.today/
*/
 
 /*
  * [mk-new-era-shcut][/mk-new-era-shcut]
  * [mk-new-era-shcut output="html|json" columns="3" rows="5" detail="hide|show"][/mk-new-era-shcut]
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in **<>
 */
function mk_activate_mk_new_era() {
	/*	
	require_once plugin_dir_path( __FILE__ ) . 'classes/class-mk-new-era-key-activator.php';
	class_Page_Visit_Activator::activate();
	*/
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in **<>
 */
function mk_deactivate_mk_new_era() {
	/*
	require_once plugin_dir_path( __FILE__ ) . 'classes/class-mk-new-era-key-deactivator.php';
	class_Page_visit_Deactivator::deactivate();
	*/
}

require_once plugin_dir_path(__FILE__) . 'classes/mk-functions.php';

class mk_class_json_table {

    public $mk_json;
    public $mk_method = "post";
    public $mk_action = "./";
    public $mk_html = "";
	public $mk_html_header = '<header><h1>TESTING GET JSON</h1><button id="btn">Fetch Info for 2 Users</button></header>';
	public $mk_url_file = '';

    /**
     * Class Constructor
     * @param array $param ['file'=>YourFilePath, 'json'=>'json string']
     * 
    function __construct($params){
		//if $params["mk_url_file"] == NULL
	}
     */
			
    /**
     * Load json file
     * 
     * @param string $filePath
     * 
     * @return array
     */
		/* not implemented
    public function load_json($filePath){
        $data = json_decode(file_get_contents($filePath), true);
        
        if($data){
            $this->json = $data;
            
        }else{
            $this->errorMessage = "File not found";
        }
    }
	*/
		
	public function mk_print_var () {
		/*
<header><h1>Plugin to Get JSON Structure with AJAX</h1><button id="btn" class="bmain">Fetch Info for New Users</button></header>

<div id="user-info"></div>
*/
		
		printf(
		'%s %s %s %s <a href=\"%s\">',
		__( '<header><h1>Plugin to Get JSON Structure with AJAX</h1><button id="btn" class="bmain">Fetch Info for New Users</button></header><br>' ),
		__( '<div id="user-info"></div>' ),
		$mk_html_header,
		$mk_html,
		$mk_url_file
	);
	}
	
    
}

add_shortcode('mk-new-era-shcut','mk_class_json_table::mk_print_var');


$mk_table = new mk_class_json_table();

