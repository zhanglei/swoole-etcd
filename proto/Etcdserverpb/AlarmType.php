<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

/**
 * Protobuf enum <code>etcdserverpb.AlarmType</code>
 */
class AlarmType
{
    /**
     * <pre>
     * default, used to query if any alarm is active
     * </pre>
     *
     * <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * <pre>
     * space quota is exhausted
     * </pre>
     *
     * <code>NOSPACE = 1;</code>
     */
    const NOSPACE = 1;
}
