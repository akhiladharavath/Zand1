<?php

class Application_Form_Album extends Zend_Form
{
    public function __construct($options = null)
    {
       
        parent::__construct($options);
        $this->setName('Car');
             

        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');
           
        $make = new Zend_Form_Element_Text('make');
        $make->setLabel('Make')
               ->setRequired(true)
               ->addFilter('StripTags')
               ->addFilter('StringTrim')
               ->addValidator('NotEmpty')
               ->setAttrib('style', 'width: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); border-radius: 5px; box-sizing: border-box; margin-bottom: 10px; margin-left:20px;');
               
        $model = new Zend_Form_Element_Text('model');
        $model->setLabel('Model')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty')
                ->setAttrib('style', 'width: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); border-radius: 5px; box-sizing: border-box; margin-bottom: 10px;margin-left:20px;');
        $color = new Zend_Form_Element_Text('color');
        $color->setLabel('Color')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty')
         ->setAttrib('style', 'width: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); border-radius: 5px; box-sizing: border-box; margin-bottom: 10px;margin-left:20px;');
        
         $image = new Zend_Form_Element_File('image');
        $image->setLabel('Upload an Image:')
            ->setDestination('C:\xampp\htdocs\Zand1\Zand1\public\uploads')
            ->setRequired(true) // Make the image upload field required
            ->addValidator('Count', false, 1) // Ensure at least one file is uploaded
            ->addValidator('Size', false, 2097152) // Limit the file size to 1MB (adjust as needed)
            ->addValidator('Extension', false, 'jpg,png,gif')
             ->setAttrib('style', 'width: 30%;
            padding: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            border-radius: 4px;margin-left:20px;');
        
        
       

        $make_logo = new Zend_Form_Element_File('make_logo');
        $make_logo->setLabel('Upload Make Logo:')
             ->setDestination('C:\xampp\htdocs\Zand1\Zand1\public\uploads') // Specify the directory to store the uploaded files
             ->setRequired(false)
             ->addValidator('Count', false, 1) // Ensure only one file is uploaded
             ->addValidator('Size', false, 2097152) // Limit file size to 100KB
             ->addValidator('Extension', false, 'jpg,jpeg,png,gif') // Allow specified file extensions
              ->setAttrib('style', 'width: 30%;
            padding: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            border-radius: 4px;margin-left:20px;');
        
    

       $cost = new Zend_Form_Element_Text('cost');
        $cost->setLabel('Cost:')
             ->setRequired(true)
             ->addValidator('NotEmpty')
             ->addValidator('Float')
               ->setAttrib('style', 'width: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); border-radius: 5px; box-sizing: border-box; margin-bottom: 10px;margin-left:20px;');

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id', 'submitbutton')
               ->setAttrib('style', ' background-color: red;
            color: #fff;
            border: none;
            padding: 15px 50px;
            border-radius: 4px;
            cursor: pointer;margin-left:20px;');
        $this->addElements(array($id, $make, $model,$color,$image,$make_logo,$cost,$submit));
        
        
    }
}

