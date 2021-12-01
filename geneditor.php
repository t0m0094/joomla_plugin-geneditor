<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class plgSystemGeneditor extends JPlugin
{

	function onBeforeCompileHead() {
		
		/*
		* Load the JDocument Object
		*/
		$obj_getdocument = JFactory::getDocument();
		
		/*
		* Get the defined params
		*/
		$param_generatorStatus = $this->params->get('generator_status', 1);
		$param_generatorCustom = $this->params->get('generator_custom', '');
		
		/*
		* Show or hide a custom generator tag
		* Default: Show
		*/
		if ($param_generatorStatus == 1) {
			$obj_getdocument->setGenerator($param_generatorCustom);
		} else {
			$obj_getdocument->setGenerator('');
		}

		return true;
	}
}
?>