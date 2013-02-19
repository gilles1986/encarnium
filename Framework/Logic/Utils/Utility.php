<?php
declare(ENCODING = 'utf-8');
namespace Framework\Logic\Utils;

class Utility {
  
  public static function splitArrayIntoKeyValue($array, $except=array()) {
    $keys = array();
    $values = array();
    
    foreach($array as $key=>$value) {
      if(!in_array($key, $except)) {
        array_push($keys, $key);
        array_push($values, $value);
      }
    }
    
    return array("keys"=>$keys, "values"=>$values);
  }
  
  public static function filterArray($array, $crits, $check=true, $negate=false ) {
    $newArray = array();
  
    foreach($array as $key=>$value) {
      // Wenn check true, dann alle Values Filtern
      if($check === true) {
        $checking = true;
      } else {
        if(in_array($key, $check)) {
          $checking = true;
        } else {
          $checking = false;
        }
      }
      
      if($checking) {
        if(is_string($crits)) {
          if($value == $crits) {
            $add = false;
          } else {
            $add = true;
          }
        } else if(is_array($crits)) {
          $add = true;
          for($i=0; $i < count($crits); $i++) {
            if($value == $cirts[$i]) {
              $add = false; 
            }
          }
        } else {
          throw new Exception("Falsche Art von Kriterien für filterArray");
        }
        
        if($negate) {
          $add = ($add) ? false : true;
        }
        
        if($add) {
          $newArray[$key] = $value;
        }
        
      } else {
        $newArray[$key] = $value;
      }
      
      
    }
  
    return $newArray;
  }
  
  public static function removeArrayEntries($array, $remove) {
    
    $newArray = array();
    
    foreach($array as $key=>$value) {
      if(!in_array($key, $remove)) {
        $newArray[$key] = $value;
      } 
    }
  }
}

?>