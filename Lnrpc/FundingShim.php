<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.FundingShim</code>
 */
class FundingShim extends \Google\Protobuf\Internal\Message
{
    protected $shim;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\ChanPointShim $chan_point_shim
     *          *
     *          A channel shim where the channel point was fully constructed outside
     *          of lnd's wallet and the transaction might already be published.
     *     @type \Lnrpc\PsbtShim $psbt_shim
     *          *
     *          A channel shim that uses a PSBT to fund and sign the channel funding
     *          transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *A channel shim where the channel point was fully constructed outside
     *of lnd's wallet and the transaction might already be published.
     *
     * Generated from protobuf field <code>.lnrpc.ChanPointShim chan_point_shim = 1;</code>
     * @return \Lnrpc\ChanPointShim
     */
    public function getChanPointShim()
    {
        return $this->readOneof(1);
    }

    /**
     **
     *A channel shim where the channel point was fully constructed outside
     *of lnd's wallet and the transaction might already be published.
     *
     * Generated from protobuf field <code>.lnrpc.ChanPointShim chan_point_shim = 1;</code>
     * @param \Lnrpc\ChanPointShim $var
     * @return $this
     */
    public function setChanPointShim($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChanPointShim::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     **
     *A channel shim that uses a PSBT to fund and sign the channel funding
     *transaction.
     *
     * Generated from protobuf field <code>.lnrpc.PsbtShim psbt_shim = 2;</code>
     * @return \Lnrpc\PsbtShim
     */
    public function getPsbtShim()
    {
        return $this->readOneof(2);
    }

    /**
     **
     *A channel shim that uses a PSBT to fund and sign the channel funding
     *transaction.
     *
     * Generated from protobuf field <code>.lnrpc.PsbtShim psbt_shim = 2;</code>
     * @param \Lnrpc\PsbtShim $var
     * @return $this
     */
    public function setPsbtShim($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PsbtShim::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getShim()
    {
        return $this->whichOneof("shim");
    }

}
