<?php
class Link extends LinkAppModel {
    
    var $useTable = false;
    
    var $validate = array(
		'url' => array(
			'required' => array(
				'rule' => array('notEmpty'),
                'last' => true
			),
			'valid' => array(
				'rule' => array('url')
			)
		),
        'title' => array(
			'required' => array(
				'rule' => array('notEmpty')
			),
			'maxLength' => array(
				'rule' => array('maxLength', 255)
			)
		),
		'description' => array(
		),
	);
    /**
	 * Initialize Validation
	 *
	 * @return void
	 * @author Joaquin Windmuller
	 */
	protected function __initializeValidation() {
        $this->defineErrorMessage('url.required', __d('link','The URL is required', true));
        $this->defineErrorMessage('url.valid', __d('link','The URL is not valid', true));
		$this->defineErrorMessage('title.required', __d('link','The title is required', true));
		$this->defineErrorMessage('title.maxLength', __d('link','Maximum length is 255 character', true));
	}
}