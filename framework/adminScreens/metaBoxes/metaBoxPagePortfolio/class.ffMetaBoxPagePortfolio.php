<?php

class ffMetaBoxPagePortfolio extends ffMetaBox {
	protected function _initMetaBox() {
		$this->_addPostType( 'page' );
		$this->_setTitle( __( 'Portfolio Page Settings', 'zero'));
		$this->_setContext( ffMetaBox::CONTEXT_NORMAL);

		$this->_setParam( ffMetaBox::PARAM_NORMALIZE_OPTIONS, true);
		$this->_addVisibility( ffMetaBox::VISIBILITY_PAGE_TEMPLATE, 'page-template-portfolio.php');
	}
}