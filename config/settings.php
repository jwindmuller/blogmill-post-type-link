<?php
	class LinkSettings extends BlogmillSettings {
        public $types;

        public function __construct() {
		    $this->types = array(
    			'Link' => array(
                    'name' => __d('link', 'Link', true),
		    		'fields' => array(
                        'url' => array(
                            'label' => __d('link', 'Link', true),
                            'type' => 'text',
                        ),
			    		'title' => array(
                            'label' => __d('link', 'Title', true),
                            'type' => 'text',
                        ),
				    	'description' => array(
                            'label' => __d('link', 'Description', true),
                            'type' => 'html'
                        ),
    				),  
	    			'form_layout' => array(
		    			'form-main' => array(
                            array(
                                'fields' => array('url', 'title', 'description'),
                                'width' => '100%'
                            )
                        ),
			    		'form-sidebar' => array()
				    ),
    				'display' => 'title'
	    		)
		    );
        }
	}
