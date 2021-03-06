<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.MemberUpdateRequest</code>
 */
class MemberUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * ID is the member ID of the member to update.
     * </pre>
     *
     * <code>uint64 ID = 1;</code>
     */
    private $ID = 0;
    /**
     * <pre>
     * peerURLs is the new list of URLs the member will use to communicate with the cluster.
     * </pre>
     *
     * <code>repeated string peerURLs = 2;</code>
     */
    private $peerURLs;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * ID is the member ID of the member to update.
     * </pre>
     *
     * <code>uint64 ID = 1;</code>
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * <pre>
     * ID is the member ID of the member to update.
     * </pre>
     *
     * <code>uint64 ID = 1;</code>
     */
    public function setID($var)
    {
        GPBUtil::checkUint64($var);
        $this->ID = $var;
    }

    /**
     * <pre>
     * peerURLs is the new list of URLs the member will use to communicate with the cluster.
     * </pre>
     *
     * <code>repeated string peerURLs = 2;</code>
     */
    public function getPeerURLs()
    {
        return $this->peerURLs;
    }

    /**
     * <pre>
     * peerURLs is the new list of URLs the member will use to communicate with the cluster.
     * </pre>
     *
     * <code>repeated string peerURLs = 2;</code>
     */
    public function setPeerURLs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->peerURLs = $arr;
    }

}

