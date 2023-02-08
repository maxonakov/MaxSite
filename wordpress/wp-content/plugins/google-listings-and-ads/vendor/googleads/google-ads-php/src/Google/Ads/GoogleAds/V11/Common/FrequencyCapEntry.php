<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/frequency_cap.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule specifying the maximum number of times an ad (or some set of ads) can
 * be shown to a user over a particular time period.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.FrequencyCapEntry</code>
 */
class FrequencyCapEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The key of a particular frequency cap. There can be no more
     * than one frequency cap with the same key.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.FrequencyCapKey key = 1;</code>
     */
    protected $key = null;
    /**
     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>optional int32 cap = 3;</code>
     */
    protected $cap = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V11\Common\FrequencyCapKey $key
     *           The key of a particular frequency cap. There can be no more
     *           than one frequency cap with the same key.
     *     @type int $cap
     *           Maximum number of events allowed during the time range by this cap.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\FrequencyCap::initOnce();
        parent::__construct($data);
    }

    /**
     * The key of a particular frequency cap. There can be no more
     * than one frequency cap with the same key.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.FrequencyCapKey key = 1;</code>
     * @return \Google\Ads\GoogleAds\V11\Common\FrequencyCapKey|null
     */
    public function getKey()
    {
        return $this->key;
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * The key of a particular frequency cap. There can be no more
     * than one frequency cap with the same key.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.FrequencyCapKey key = 1;</code>
     * @param \Google\Ads\GoogleAds\V11\Common\FrequencyCapKey $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Common\FrequencyCapKey::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>optional int32 cap = 3;</code>
     * @return int
     */
    public function getCap()
    {
        return isset($this->cap) ? $this->cap : 0;
    }

    public function hasCap()
    {
        return isset($this->cap);
    }

    public function clearCap()
    {
        unset($this->cap);
    }

    /**
     * Maximum number of events allowed during the time range by this cap.
     *
     * Generated from protobuf field <code>optional int32 cap = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCap($var)
    {
        GPBUtil::checkInt32($var);
        $this->cap = $var;

        return $this;
    }

}

