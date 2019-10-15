<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ListChannelsResponse</code>
 */
class ListChannelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The list of active channels
     *
     * Generated from protobuf field <code>repeated .lnrpc.Channel channels = 11[json_name = "channels"];</code>
     */
    private $channels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\Channel[]|\Google\Protobuf\Internal\RepeatedField $channels
     *          &#47; The list of active channels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The list of active channels
     *
     * Generated from protobuf field <code>repeated .lnrpc.Channel channels = 11[json_name = "channels"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     *&#47; The list of active channels
     *
     * Generated from protobuf field <code>repeated .lnrpc.Channel channels = 11[json_name = "channels"];</code>
     * @param \Lnrpc\Channel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Channel::class);
        $this->channels = $arr;

        return $this;
    }

}
