<?php

class IndexController extends Zend_Controller_Action
{
    
 private $smarty;
    public function init()
    {
        $this->_helper->viewRenderer->setNoRender(true); // Disable default view renderer
        Zend_Layout::getMvcInstance()->disableLayout(); 
       
        $this->smarty = new Smarty();
      
        $this->smarty->setTemplateDir(APPLICATION_PATH .'/views/scripts/index/smarty/templates');
        $this->smarty->setCompileDir(APPLICATION_PATH .'/views/scripts/index/smarty/templates_c');
        $this->smarty->setCacheDir(APPLICATION_PATH . '/views/scripts/index/smarty/cache');
        
         $registry = Zend_Registry::getInstance();       

        // Store URLs in the registry
        $registry['about_urls'] = [
            'aboutUrl1' => $this->view->url(['controller' => 'index', 'action' => 'displayall']),
            'aboutUrl' => $this->view->url(['controller' => 'index', 'action' => 'index']),
            'aboutUrl2' => $this->view->url(['controller' => 'index', 'action' => 'details']),
            'aboutUrl3' => $this->view->url(['controller' => 'index', 'action' => 'about']),
            'aboutUrl4' => $this->view->url(['controller' => 'index', 'action' => 'display']),
            'aboutUrl5' => $this->view->url(['controller' => 'index', 'action' => 'search']),
            'aboutUrl6' => $this->view->url(['controller' => 'index', 'action' => 'add']),
            'aboutUrl7' => $this->view->url(['controller' => 'index', 'action' => 'edit']),
            'aboutUrl8' => $this->view->url(['controller' => 'index', 'action' => 'delete']),
            'aboutUrl9' => $this->view->url(['controller' => 'index', 'action' => 'contact']),
        ];
    }

   public function indexAction()
{
       
        $dbTable = new Application_Model_DbTable_Albums();
        $select = $dbTable->getAlbums();
        $paginator = Zend_Paginator::factory($select);
        $paginator->setCurrentPageNumber($this->_getParam('page', 1));
        $paginator->setItemCountPerPage(4);
        $this->smarty->assign('paginator',  $paginator);
      
        $pageCount = $paginator->count();
        $currentPage = $paginator->getCurrentPageNumber();
        $pagesInRange = range(max(1, $currentPage - 2), min($pageCount, $currentPage + 2));
        $this->smarty->assign('pageCount', $pageCount);
        $this->smarty->assign('current', $currentPage);
        $this->smarty->assign('previous', ($currentPage > 1) ? $currentPage - 1 : null);
        $this->smarty->assign('pagesInRange', $pagesInRange);

        $tatacars=$dbTable->getTataCarModels();
        $this->smarty->assign('tatacars', $tatacars);
        $latestCars =  $dbTable->fetchLatestCars(8);                        
        $this->smarty->assign('latestCars', $latestCars);
        $mostSearchedCars =$dbTable->getMostSearchedCars(10);
        $this->smarty->assign('mostSearchedCars', $mostSearchedCars);
      
         
       $MakeLogo= $dbTable->getDistinctMakeLogos();
       $this->smarty->assign('MakeLogo', $MakeLogo);
       
       $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
        $this->smarty->assign('aboutUrl1', $aboutUrls['aboutUrl1']);
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);

      $this->smarty->display('index.tpl');
         
        
}


public function displayallAction(){
    
    $dbTable = new Application_Model_DbTable_Albums();
        $select = $dbTable->getAlbums();
        $paginator = Zend_Paginator::factory($select);
        $paginator->setCurrentPageNumber($this->_getParam('page', 1));
        $paginator->setItemCountPerPage(10);
        $this->smarty->assign('paginator',  $paginator);
        $pageCount = $paginator->count();
        $currentPage = $paginator->getCurrentPageNumber();
        $pagesInRange = range(max(1, $currentPage - 2), min($pageCount, $currentPage + 2));
        $this->smarty->assign('pageCount', $pageCount);
        $this->smarty->assign('current', $currentPage);
        $this->smarty->assign('previous', ($currentPage > 1) ? $currentPage - 1 : null);
        $this->smarty->assign('pagesInRange', $pagesInRange);
        

        
        
       $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
        $this->smarty->assign('aboutUrl1', $aboutUrls['aboutUrl1']);
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);

 $this->smarty->display('displayAll.tpl');     
}

public function detailsAction()
{
    $selectedMake = $this->_getParam('make');
    $carModel = new Application_Model_DbTable_Albums;
    $selectedDetails = $carModel->getCarDetailsByMake($selectedMake );
    $this->smarty->assign('selectedMake', $selectedMake);
    $this->smarty->assign('selectedDetails', $selectedDetails);
   
    $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
      
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
   
    $this->smarty->display('details.tpl');
}
public function aboutAction()
{
      $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
        $this->smarty->assign('aboutUrl1', $aboutUrls['aboutUrl1']);
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
  
     
    $this->smarty->display('about.tpl');
}
public function contactAction(){
     $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
        $this->smarty->assign('aboutUrl1', $aboutUrls['aboutUrl1']);
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
     
    $this->smarty->display('contact.tpl');
    
}

    public function displayAction()
    {
        $id = $this->_getParam('id');
        //$id=5;
        $carsModel = new Application_Model_DbTable_Albums();
        $carData = $carsModel-> getCarDetailsById($id);
        
        $this->smarty->assign('carData', $carData);
        
        $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
  
          
        $this->smarty->display('display.tpl');
        
    }
    public function searchAction()
    {
        $search = $this->_getParam('search');
        $albumModel = new Application_Model_DbTable_Albums();

        if (!empty($search)) {
            $cars = $albumModel->searchCars($search);
            $this->smarty->assign('cars', $cars);
            $this->smarty->assign('searchQuery', $search);
   
            
          
            
           
     
   $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
                    
        $this->smarty->display('search.tpl');
        }
        else {
          $this->redirect('index');
        }
      }

    public function addAction()
    {
         $this->smarty->assign('title', 'Add new car');

        $form = new Application_Form_Album();
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                     $uploadedData = $form->image->getFileInfo();
            $imageData = file_get_contents($uploadedData['image']['tmp_name']);
            $uploadedData1 = $form->make_logo->getFileInfo();
            $makeLogo=file_get_contents($uploadedData1['make_logo']['tmp_name']);
            $make = $form->getValue('make');
            $model = $form->getValue('model');
            $color=$form->getValue('color');
            $cost=$form->getValue('cost');
            $cars = new Application_Model_DbTable_Albums();
            $cars->addAlbum($make, $model,$color,$imageData,$cost,$makeLogo);
            $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        }
        $form->submit->setLabel('Add');
        $this->smarty->assign('form', $form);
        
        $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
        $this->smarty->assign('aboutUrl1', $aboutUrls['aboutUrl1']);
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
        $this->smarty->display('add.tpl');
    }

    public function editAction()
    {
         $this->smarty->assign('title', 'Edit album');
         $form = new Application_Form_Album();
         if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
              $uploadedData = $form->image->getFileInfo();
                $imageData = file_get_contents($uploadedData['image']['tmp_name']);

                $id = (int)$form->getValue('id');
                $make = $form->getValue('make');
                $model = $form->getValue('model');
                $color=$form->getValue('color');
                $cost=$form->getValue('cost');
                $cars = new Application_Model_DbTable_Albums();
                $cars->updateAlbum($id, $make, $model,$color,$imageData,$cost);
                
                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        } else {
            $id = $this->_getParam('id', 0);
            if ($id > 0) {
                $cars = new Application_Model_DbTable_Albums();
                $form->populate($cars->getAlbum($id));
            }
        }
         $form->submit->setLabel('Save');
         $this->smarty->assign('form', $form);    
        $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
        $this->smarty->display('edit.tpl');
    }
    public function deleteAction()
    {
        $this->smarty->assign('title', 'Delete Car');
        if ($this->getRequest()->isPost()) {
            $del = $this->getRequest()->getPost('del');
            if ($del == 'Yes') { 
                $id = $this->getRequest()->getPost('id');
                $cars = new Application_Model_DbTable_Albums();
                $cars->deleteAlbum($id);
            }
            $this->_helper->redirector('index');
        } else {
            $id = $this->_getParam('id');
            $cars = new Application_Model_DbTable_Albums();
            $album = $cars->getAlbum($id);
            $this->smarty->assign('album', $album);
        } 
        $registry = Zend_Registry::getInstance();
        $aboutUrls = $registry['about_urls'];

        // Now we can use the URLs as needed in this method
        
        $this->smarty->assign('aboutUrl', $aboutUrls['aboutUrl']);
        
        $this->smarty->assign('aboutUrl1', $aboutUrls['aboutUrl1']);
        
        $this->smarty->assign('aboutUrl2', $aboutUrls['aboutUrl2']);
       
        $this->smarty->assign('aboutUrl3', $aboutUrls['aboutUrl3']);
        
        $this->smarty->assign('aboutUrl4', $aboutUrls['aboutUrl4']);
        
        $this->smarty->assign('aboutUrl5', $aboutUrls['aboutUrl5']);
       
        $this->smarty->assign('aboutUrl6', $aboutUrls['aboutUrl6']);
        
        $this->smarty->assign('aboutUrl7', $aboutUrls['aboutUrl7']);
        $this->smarty->assign('aboutUrl8', $aboutUrls['aboutUrl8']);
        $this->smarty->assign('aboutUrl9', $aboutUrls['aboutUrl9']);
        $this->smarty->display('delete.tpl');
    }
}