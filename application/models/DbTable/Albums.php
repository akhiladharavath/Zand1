<?php
class Application_Model_DbTable_Albums extends Zend_Db_Table_Abstract
{
    protected $_name = 'cars';
    
    public function getAlbums(){
       return $this->fetchAll();
    } 
    
    public function getAlbum($id) 
    {
        
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Count not find row $id");
        }
        return $row->toArray();    
    }
   
  public function searchCars($search)
   {
    $select = $this->select()
        ->where("make LIKE ?", "%{$search}%")
        ->orWhere("model LIKE ?", "%{$search}%")
        ->orWhere("color LIKE ?", "%{$search}%");

    return $this->fetchAll($select);
    }
    
 public function getDistinctMakeLogos()
{
    $select = $this->select()
        ->from('cars', array('make', 'MAX(make_logo) AS make_logo'))
        ->distinct()
        ->group('make');

    $carDetails = $this->fetchAll($select)->toArray();
    return $carDetails;
}
    public function getCarDetailsByMake($make)
    {
        $select = $this->select()
                ->where("make LIKE ?", "%{$make}%");

        $carDetails= $this->fetchAll($select)->toArray();
        return $carDetails;
       
       
    }
    public function getTataCarModels()
{
    $select = $this->select()
        ->where("make = ?", "TATA");

    $tataCarModels = $this->fetchAll($select)->toArray();
    return $tataCarModels;
}


     public function fetchLatestCars($limit)
    {
        $select = $this->select()
            ->order('id DESC')
            ->limit($limit);

        return $this->fetchAll($select);
    }
 
    public function getCarBySearchCriteria($searchCriteria)
    {
        $select = $this->select()
            ->where('make = ?', $searchCriteria['make'])
            ->where('model = ?', $searchCriteria['model'])
            ->limit(1);

        return $this->fetchRow($select);
    }
 public function getMostSearchedCars($limit = 4)
    {
        $select = $this->select()
            ->order('search_count DESC')
            ->limit($limit);

        return $this->fetchAll($select);
    }
    public function incrementSearchCount($carId)
    {
        $data = array(
            'search_count' => new Zend_Db_Expr('search_count + 1')
        );

        $where = $this->getAdapter()->quoteInto('id = ?', $carId);
        $this->update($data, $where);
    }
    public function addAlbum($make, $model,$color,$imageData,$cost, $imageLogo)
    {
        $data = array(
            'make' => $make,
            'model'=>$model,
            'color'=>$color,
            'image_data' => $imageData,
            'cost'=>$cost,
            'make_logo'=>$imageLogo,
            
        );
        $this->insert($data);
    }
    
    public function updateAlbum($id, $make, $model,$color,$imageData,$cost)
    {
        $data = array(
            'make' => $make,
            'model'=>$model,
            'color'=>$color,
            'image_data' => $imageData,
            'cost'=>$cost,
        );
        $this->update($data, 'id = '. (int)$id);
    }
    
    public function deleteAlbum($id)
    
    {
        $this->delete('id =' . (int)$id);
   
    }
    public function getCarDetailsById($id)
    {
        $select = $this->select()
               
            ->where('id LIKE  ?', "%{$id}%"); // Assuming 'id' is the primary key column

        $carDetails = $this->fetchRow($select);

        if ($carDetails) {
            return $carDetails->toArray();
        } else {
            return null; // Return null if no matching record is found
        }
    }
}
