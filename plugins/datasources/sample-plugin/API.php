<?php

namespace Plugin\Datasource\Sample;
/**
 * Apache Log Analytics Plugin for DbFace - by DbFace
 *
 * @package		plugins/datasources/apache-log
 * @author		DbFace 
 * @copyright	Copyright (c) 2017 DbFace, Inc.
 * @link		https://www.dbface.com
 * @since		Version 1.0
 */
class API {
  private $database;
  
  /**
	 * accept data source configuration
	 *
   * 
	 * @return array schemas array
	 */
  public function setup($config = array()) {
    $this->database = $config['database'];
  }
  
  /**
	 * get schemas of this data source
	 *
   * 
	 * @return array schemas array
	 */
  public function get_schemas() {
    // TODO: do your business and get the schemas finally
    return array(
      'sample_view1' => array(
        'fields' => array(
          'id' => array('type'=> 'integer', 'pk'=>1),
          'comment' => array('type'=> 'string')
        )
      )
    );
  }
  
  /**
	 * get datas of this specific schema
	 *
	 * @return array datas of the schema
	 */
  public function get_datas($schema) {
    // TODO: do your business and finally get the resultset for $schema
    $result = array(
      array('id'=>0, 'comment'=>'this is string1'),
      array('id'=>1, 'comment'=>'this is string2'),
      array('id'=>2, 'comment'=>'this is string3'),
      array('id'=>3, 'comment'=>'this is string4')
    );
    return $result;
  }
}

