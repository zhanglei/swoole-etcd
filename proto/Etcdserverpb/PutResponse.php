<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.PutResponse</code>
 */
class PutResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * <pre>
     * if prev_kv is set in the request, the previous key-value pair will be returned.
     * </pre>
     *
     * <code>.mvccpb.KeyValue prev_kv = 2;</code>
     */
    private $prev_kv = null;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    public function setHeader(&$var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\ResponseHeader::class);
        $this->header = $var;
    }

    /**
     * <pre>
     * if prev_kv is set in the request, the previous key-value pair will be returned.
     * </pre>
     *
     * <code>.mvccpb.KeyValue prev_kv = 2;</code>
     */
    public function getPrevKv()
    {
        return $this->prev_kv;
    }

    /**
     * <pre>
     * if prev_kv is set in the request, the previous key-value pair will be returned.
     * </pre>
     *
     * <code>.mvccpb.KeyValue prev_kv = 2;</code>
     */
    public function setPrevKv(&$var)
    {
        GPBUtil::checkMessage($var, \Mvccpb\KeyValue::class);
        $this->prev_kv = $var;
    }

}

