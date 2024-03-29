<?php
/**
 * FAQ accordion for Magento

 */

/**
 * FAQ accordion for Magento
 *
 * Website: www.hiremagento.com 
 * Email: hiremagento@gmail.com
 */
class HM_Faq_Block_Adminhtml_Category_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Preperation of current form
     *
     * @return HM_Faq_Block_Adminhtml_Category_Edit_Form
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array (
                'id' => 'edit_form', 
                'action' => $this->getData('action'), 
                'method' => 'post', 
                'enctype' => 'multipart/form-data' ));
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
