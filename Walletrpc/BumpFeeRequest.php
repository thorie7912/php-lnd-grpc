<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.BumpFeeRequest</code>
 */
class BumpFeeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The input we're attempting to bump the fee of.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 1;</code>
     */
    private $outpoint = null;
    /**
     * The target number of blocks that the input should be spent within.
     *
     * Generated from protobuf field <code>uint32 target_conf = 2;</code>
     */
    private $target_conf = 0;
    /**
     *The fee rate, expressed in sat/byte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint32 sat_per_byte = 3;</code>
     */
    private $sat_per_byte = 0;
    /**
     **
     *Whether this input must be force-swept. This means that it is swept even
     *if it has a negative yield.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     */
    private $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\OutPoint $outpoint
     *           The input we're attempting to bump the fee of.
     *     @type int $target_conf
     *           The target number of blocks that the input should be spent within.
     *     @type int $sat_per_byte
     *          The fee rate, expressed in sat/byte, that should be used to spend the input
     *          with.
     *     @type bool $force
     *          *
     *          Whether this input must be force-swept. This means that it is swept even
     *          if it has a negative yield.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     * The input we're attempting to bump the fee of.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 1;</code>
     * @return \Lnrpc\OutPoint
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }

    /**
     * The input we're attempting to bump the fee of.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 1;</code>
     * @param \Lnrpc\OutPoint $var
     * @return $this
     */
    public function setOutpoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\OutPoint::class);
        $this->outpoint = $var;

        return $this;
    }

    /**
     * The target number of blocks that the input should be spent within.
     *
     * Generated from protobuf field <code>uint32 target_conf = 2;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     * The target number of blocks that the input should be spent within.
     *
     * Generated from protobuf field <code>uint32 target_conf = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetConf($var)
    {
        GPBUtil::checkUint32($var);
        $this->target_conf = $var;

        return $this;
    }

    /**
     *The fee rate, expressed in sat/byte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint32 sat_per_byte = 3;</code>
     * @return int
     */
    public function getSatPerByte()
    {
        return $this->sat_per_byte;
    }

    /**
     *The fee rate, expressed in sat/byte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint32 sat_per_byte = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSatPerByte($var)
    {
        GPBUtil::checkUint32($var);
        $this->sat_per_byte = $var;

        return $this;
    }

    /**
     **
     *Whether this input must be force-swept. This means that it is swept even
     *if it has a negative yield.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     **
     *Whether this input must be force-swept. This means that it is swept even
     *if it has a negative yield.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}
