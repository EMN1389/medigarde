<?php
if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

/**
 * Simple_Job_Board_Shortcode_Jobpost Details Page
 * 
 * This class lists the jobs on frontend for [jobpost] shortcode.
 * 
 * @link        https://wordpress.org/plugins/simple-job-board
 * @since       2.2.3
 * @since       2.4.0   Revised Inputs & Outputs Sanitization & Escaping
 * @package     Simple_Job_Board
 * @author      PressTigers <support@presstigers.com>
 */


class Simple_Job_Board_Shortcode_job_details {

	public function __construct() {

        // Hook -> Add Job Job details ShortCode
        add_shortcode('job_details', array($this, 'sjb_job_form_function'));
    }

	public function sjb_job_form_function() {

		
		do_action('sjb_enqueue_scripts');
		
		get_simple_job_board_template('single-jobpost/single-job-wrapper-start.php');

		get_simple_job_board_template('single-jobpost/content-single-job-listing-meta.php', array()); ?>
		
		<div class="job-description" id="job-desc">
		
			<?php
			global $post;
			
			echo __( get_post( $post->ID )->post_content );
			?>
		</div>
		<div class="clearfix"></div>
		<?php
		get_simple_job_board_template('single-jobpost/job-features.php', array());
			
		get_simple_job_board_template('single-jobpost/job-application.php', array());

		get_simple_job_board_template('single-jobpost/single-job-wrapper-end.php');
	}

}