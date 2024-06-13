<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Media
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Media;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Media\V1\MediaProcessorList;
use Twilio\Rest\Media\V1\MediaRecordingList;
use Twilio\Rest\Media\V1\PlayerStreamerList;
use Twilio\Version;

/**
 * @property MediaProcessorList $mediaProcessor
 * @property MediaRecordingList $mediaRecording
 * @property PlayerStreamerList $playerStreamer
 * @method \Twilio\Rest\Media\V1\MediaProcessorContext mediaProcessor(string $sid)
 * @method \Twilio\Rest\Media\V1\MediaRecordingContext mediaRecording(string $sid)
 * @method \Twilio\Rest\Media\V1\PlayerStreamerContext playerStreamer(string $sid)
 */
class V1 extends Version
{
    protected $_mediaProcessor;
    protected $_mediaRecording;
    protected $_playerStreamer;

    /**
     * Construct the V1 version of Media
     *
     * @param Domain $domain Domain that contains the version
     */
    public function __construct(Domain $domain)
    {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    protected function getMediaProcessor(): MediaProcessorList
    {
        if (!$this->_mediaProcessor) {
            $this->_mediaProcessor = new MediaProcessorList($this);
        }
        return $this->_mediaProcessor;
    }

    protected function getMediaRecording(): MediaRecordingList
    {
        if (!$this->_mediaRecording) {
            $this->_mediaRecording = new MediaRecordingList($this);
        }
        return $this->_mediaRecording;
    }

    protected function getPlayerStreamer(): PlayerStreamerList
    {
        if (!$this->_playerStreamer) {
            $this->_playerStreamer = new PlayerStreamerList($this);
        }
        return $this->_playerStreamer;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get(string $name)
    {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext
    {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Media.V1]';
    }
}