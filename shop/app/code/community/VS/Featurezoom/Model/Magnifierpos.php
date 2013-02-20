<?php

class VS_Featurezoom_Model_Magnifierpos{
    protected $_options;
	const MAGNIFIERPOS_RIGHT = 'right';
    const MAGNIFIERPOS_LEFT  = 'left';
    const MAGNIFIERPOS_TOP	= 'top';
    const MAGNIFIERPOS_BOTTOM = 'bottom';
    
    public function toOptionArray(){
        if (!$this->_options) {
			$this->_options[] = array(
			   'value'=>self::MAGNIFIERPOS_RIGHT,
			   'label'=>Mage::helper('featurezoom')->__('Right')
			);
			$this->_options[] = array(
			   'value'=>self::MAGNIFIERPOS_LEFT,
			   'label'=>Mage::helper('featurezoom')->__('Left')
			);
			$this->_options[] = array(
			   'value'=>self::MAGNIFIERPOS_TOP,
			   'label'=>Mage::helper('featurezoom')->__('Top')
			);
			$this->_options[] = array(
			   'value'=>self::MAGNIFIERPOS_BOTTOM,
			   'label'=>Mage::helper('featurezoom')->__('Bottom')
			);
		}
		return $this->_options;
	}
}
