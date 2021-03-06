<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ListUnspentResponse</code>
 */
class ListUnspentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; A list of utxos
     *
     * Generated from protobuf field <code>repeated .lnrpc.Utxo utxos = 1;</code>
     */
    private $utxos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\Utxo[]|\Google\Protobuf\Internal\RepeatedField $utxos
     *          &#47; A list of utxos
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; A list of utxos
     *
     * Generated from protobuf field <code>repeated .lnrpc.Utxo utxos = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUtxos()
    {
        return $this->utxos;
    }

    /**
     *&#47; A list of utxos
     *
     * Generated from protobuf field <code>repeated .lnrpc.Utxo utxos = 1;</code>
     * @param \Lnrpc\Utxo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUtxos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Utxo::class);
        $this->utxos = $arr;

        return $this;
    }

}

