<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a Cloud Storage subscription.
 *
 * Generated from protobuf message <code>google.pubsub.v1.CloudStorageConfig</code>
 */
class CloudStorageConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. User-provided name for the Cloud Storage bucket.
     * The bucket must be created by the user. The bucket name must be without
     * any prefix like "gs://". See the [bucket naming
     * requirements] (https://cloud.google.com/storage/docs/buckets#naming).
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $bucket = '';
    /**
     * User-provided prefix for Cloud Storage filename. See the [object naming
     * requirements](https://cloud.google.com/storage/docs/objects#naming).
     *
     * Generated from protobuf field <code>string filename_prefix = 2;</code>
     */
    private $filename_prefix = '';
    /**
     * User-provided suffix for Cloud Storage filename. See the [object naming
     * requirements](https://cloud.google.com/storage/docs/objects#naming).
     *
     * Generated from protobuf field <code>string filename_suffix = 3;</code>
     */
    private $filename_suffix = '';
    /**
     * The maximum duration that can elapse before a new Cloud Storage file is
     * created. Min 1 minute, max 10 minutes, default 5 minutes. May not exceed
     * the subscription's acknowledgement deadline.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_duration = 6;</code>
     */
    private $max_duration = null;
    /**
     * The maximum bytes that can be written to a Cloud Storage file before a new
     * file is created. Min 1 KB, max 10 GiB. The max_bytes limit may be exceeded
     * in cases where messages are larger than the limit.
     *
     * Generated from protobuf field <code>int64 max_bytes = 7;</code>
     */
    private $max_bytes = 0;
    /**
     * Output only. An output-only field that indicates whether or not the
     * subscription can receive messages.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.CloudStorageConfig.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    protected $output_format;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           Required. User-provided name for the Cloud Storage bucket.
     *           The bucket must be created by the user. The bucket name must be without
     *           any prefix like "gs://". See the [bucket naming
     *           requirements] (https://cloud.google.com/storage/docs/buckets#naming).
     *     @type string $filename_prefix
     *           User-provided prefix for Cloud Storage filename. See the [object naming
     *           requirements](https://cloud.google.com/storage/docs/objects#naming).
     *     @type string $filename_suffix
     *           User-provided suffix for Cloud Storage filename. See the [object naming
     *           requirements](https://cloud.google.com/storage/docs/objects#naming).
     *     @type \Google\Cloud\PubSub\V1\CloudStorageConfig\TextConfig $text_config
     *           If set, message data will be written to Cloud Storage in text format.
     *     @type \Google\Cloud\PubSub\V1\CloudStorageConfig\AvroConfig $avro_config
     *           If set, message data will be written to Cloud Storage in Avro format.
     *     @type \Google\Protobuf\Duration $max_duration
     *           The maximum duration that can elapse before a new Cloud Storage file is
     *           created. Min 1 minute, max 10 minutes, default 5 minutes. May not exceed
     *           the subscription's acknowledgement deadline.
     *     @type int|string $max_bytes
     *           The maximum bytes that can be written to a Cloud Storage file before a new
     *           file is created. Min 1 KB, max 10 GiB. The max_bytes limit may be exceeded
     *           in cases where messages are larger than the limit.
     *     @type int $state
     *           Output only. An output-only field that indicates whether or not the
     *           subscription can receive messages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. User-provided name for the Cloud Storage bucket.
     * The bucket must be created by the user. The bucket name must be without
     * any prefix like "gs://". See the [bucket naming
     * requirements] (https://cloud.google.com/storage/docs/buckets#naming).
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Required. User-provided name for the Cloud Storage bucket.
     * The bucket must be created by the user. The bucket name must be without
     * any prefix like "gs://". See the [bucket naming
     * requirements] (https://cloud.google.com/storage/docs/buckets#naming).
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * User-provided prefix for Cloud Storage filename. See the [object naming
     * requirements](https://cloud.google.com/storage/docs/objects#naming).
     *
     * Generated from protobuf field <code>string filename_prefix = 2;</code>
     * @return string
     */
    public function getFilenamePrefix()
    {
        return $this->filename_prefix;
    }

    /**
     * User-provided prefix for Cloud Storage filename. See the [object naming
     * requirements](https://cloud.google.com/storage/docs/objects#naming).
     *
     * Generated from protobuf field <code>string filename_prefix = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilenamePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename_prefix = $var;

        return $this;
    }

    /**
     * User-provided suffix for Cloud Storage filename. See the [object naming
     * requirements](https://cloud.google.com/storage/docs/objects#naming).
     *
     * Generated from protobuf field <code>string filename_suffix = 3;</code>
     * @return string
     */
    public function getFilenameSuffix()
    {
        return $this->filename_suffix;
    }

    /**
     * User-provided suffix for Cloud Storage filename. See the [object naming
     * requirements](https://cloud.google.com/storage/docs/objects#naming).
     *
     * Generated from protobuf field <code>string filename_suffix = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilenameSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename_suffix = $var;

        return $this;
    }

    /**
     * If set, message data will be written to Cloud Storage in text format.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.CloudStorageConfig.TextConfig text_config = 4;</code>
     * @return \Google\Cloud\PubSub\V1\CloudStorageConfig\TextConfig|null
     */
    public function getTextConfig()
    {
        return $this->readOneof(4);
    }

    public function hasTextConfig()
    {
        return $this->hasOneof(4);
    }

    /**
     * If set, message data will be written to Cloud Storage in text format.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.CloudStorageConfig.TextConfig text_config = 4;</code>
     * @param \Google\Cloud\PubSub\V1\CloudStorageConfig\TextConfig $var
     * @return $this
     */
    public function setTextConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\CloudStorageConfig\TextConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * If set, message data will be written to Cloud Storage in Avro format.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.CloudStorageConfig.AvroConfig avro_config = 5;</code>
     * @return \Google\Cloud\PubSub\V1\CloudStorageConfig\AvroConfig|null
     */
    public function getAvroConfig()
    {
        return $this->readOneof(5);
    }

    public function hasAvroConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * If set, message data will be written to Cloud Storage in Avro format.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.CloudStorageConfig.AvroConfig avro_config = 5;</code>
     * @param \Google\Cloud\PubSub\V1\CloudStorageConfig\AvroConfig $var
     * @return $this
     */
    public function setAvroConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\CloudStorageConfig\AvroConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The maximum duration that can elapse before a new Cloud Storage file is
     * created. Min 1 minute, max 10 minutes, default 5 minutes. May not exceed
     * the subscription's acknowledgement deadline.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_duration = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxDuration()
    {
        return $this->max_duration;
    }

    public function hasMaxDuration()
    {
        return isset($this->max_duration);
    }

    public function clearMaxDuration()
    {
        unset($this->max_duration);
    }

    /**
     * The maximum duration that can elapse before a new Cloud Storage file is
     * created. Min 1 minute, max 10 minutes, default 5 minutes. May not exceed
     * the subscription's acknowledgement deadline.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_duration = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_duration = $var;

        return $this;
    }

    /**
     * The maximum bytes that can be written to a Cloud Storage file before a new
     * file is created. Min 1 KB, max 10 GiB. The max_bytes limit may be exceeded
     * in cases where messages are larger than the limit.
     *
     * Generated from protobuf field <code>int64 max_bytes = 7;</code>
     * @return int|string
     */
    public function getMaxBytes()
    {
        return $this->max_bytes;
    }

    /**
     * The maximum bytes that can be written to a Cloud Storage file before a new
     * file is created. Min 1 KB, max 10 GiB. The max_bytes limit may be exceeded
     * in cases where messages are larger than the limit.
     *
     * Generated from protobuf field <code>int64 max_bytes = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_bytes = $var;

        return $this;
    }

    /**
     * Output only. An output-only field that indicates whether or not the
     * subscription can receive messages.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.CloudStorageConfig.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. An output-only field that indicates whether or not the
     * subscription can receive messages.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.CloudStorageConfig.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PubSub\V1\CloudStorageConfig\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->whichOneof("output_format");
    }

}

