<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtrpc.proto

namespace Vitess\Proto\Vtrpc {

  class RPCError extends \DrSlump\Protobuf\Message {

    /**  @var int - \Vitess\Proto\Vtrpc\LegacyErrorCode */
    public $legacy_code = null;
    
    /**  @var string */
    public $message = null;
    
    /**  @var int - \Vitess\Proto\Vtrpc\Code */
    public $code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtrpc.RPCError');

      // OPTIONAL ENUM legacy_code = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "legacy_code";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\LegacyErrorCode';
      $descriptor->addField($f);

      // OPTIONAL STRING message = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM code = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "code";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\Code';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <legacy_code> has a value
     *
     * @return boolean
     */
    public function hasLegacyCode(){
      return $this->_has(1);
    }
    
    /**
     * Clear <legacy_code> value
     *
     * @return \Vitess\Proto\Vtrpc\RPCError
     */
    public function clearLegacyCode(){
      return $this->_clear(1);
    }
    
    /**
     * Get <legacy_code> value
     *
     * @return int - \Vitess\Proto\Vtrpc\LegacyErrorCode
     */
    public function getLegacyCode(){
      return $this->_get(1);
    }
    
    /**
     * Set <legacy_code> value
     *
     * @param int - \Vitess\Proto\Vtrpc\LegacyErrorCode $value
     * @return \Vitess\Proto\Vtrpc\RPCError
     */
    public function setLegacyCode( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(2);
    }
    
    /**
     * Clear <message> value
     *
     * @return \Vitess\Proto\Vtrpc\RPCError
     */
    public function clearMessage(){
      return $this->_clear(2);
    }
    
    /**
     * Get <message> value
     *
     * @return string
     */
    public function getMessage(){
      return $this->_get(2);
    }
    
    /**
     * Set <message> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtrpc\RPCError
     */
    public function setMessage( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <code> has a value
     *
     * @return boolean
     */
    public function hasCode(){
      return $this->_has(3);
    }
    
    /**
     * Clear <code> value
     *
     * @return \Vitess\Proto\Vtrpc\RPCError
     */
    public function clearCode(){
      return $this->_clear(3);
    }
    
    /**
     * Get <code> value
     *
     * @return int - \Vitess\Proto\Vtrpc\Code
     */
    public function getCode(){
      return $this->_get(3);
    }
    
    /**
     * Set <code> value
     *
     * @param int - \Vitess\Proto\Vtrpc\Code $value
     * @return \Vitess\Proto\Vtrpc\RPCError
     */
    public function setCode( $value){
      return $this->_set(3, $value);
    }
  }
}
