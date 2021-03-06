<?php

namespace Kirki\Controls;

class PromoControl extends \WP_Customize_Control {

	public $type = 'promo';

	/**
	 * Render the control's content.
	 */
	protected function render_content() { ?>
		<div class="promo-box">
        <div class="promo-2">
		    <h3><?php esc_attr_e( 'Upgrade to Pro version!', 'ophelia' ); ?></h3>
        	<div class="promo-wrap">
            	<a class="promoupgrade" href="<?php esc_attr_e( 'http://www.themestune.com/theme/ophelia/', 'ophelia' ); ?>" target="_blank"><?php esc_attr_e( 'Upgrade to Pro', 'ophelia' ); ?></a>
                <a class="promodemo" href="<?php esc_attr_e( 'http://www.themestune.com/demo/?theme=ophelia', 'ophelia' ); ?>" target="_blank"><?php esc_attr_e( 'View Demo', 'ophelia' ); ?></a>   
                <a class="promocontact" href="<?php esc_attr_e( 'http://www.themestune.com/contact-us/', 'ophelia' ); ?>" target="_blank"><?php esc_attr_e( 'Contact Us', 'ophelia' ); ?></a> 				
            </div>	
            <p class="contactmess"><?php esc_attr_e( 'The Pro Version gives you more opportunities to improve your site and implicitly your business. Only through buying the pro version will you have the wide range of useful options and premium support necessary for a succesfull online project.', 'lucy' ); ?></p>			
        </div>
		</div>
		<?php
	}
}
