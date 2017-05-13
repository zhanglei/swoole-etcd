<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.MemberAddResponse</code>
 */
class MemberAddResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * <pre>
     * member is the member information for the added member.
     * </pre>
     *
     * <code>.etcdserverpb.Member member = 2;</code>
     */
    private $member = null;

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
     * member is the member information for the added member.
     * </pre>
     *
     * <code>.etcdserverpb.Member member = 2;</code>
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * <pre>
     * member is the member information for the added member.
     * </pre>
     *
     * <code>.etcdserverpb.Member member = 2;</code>
     */
    public function setMember(&$var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\Member::class);
        $this->member = $var;
    }

}
