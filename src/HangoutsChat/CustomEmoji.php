<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\HangoutsChat;

class CustomEmoji extends \Google\Model
{
  /**
   * @var string
   */
  public $emojiName;
  /**
   * @var string
   */
  public $name;
  protected $payloadType = CustomEmojiPayload::class;
  protected $payloadDataType = '';
  /**
   * @var string
   */
  public $temporaryImageUri;
  /**
   * @var string
   */
  public $uid;

  /**
   * @param string
   */
  public function setEmojiName($emojiName)
  {
    $this->emojiName = $emojiName;
  }
  /**
   * @return string
   */
  public function getEmojiName()
  {
    return $this->emojiName;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param CustomEmojiPayload
   */
  public function setPayload(CustomEmojiPayload $payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return CustomEmojiPayload
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * @param string
   */
  public function setTemporaryImageUri($temporaryImageUri)
  {
    $this->temporaryImageUri = $temporaryImageUri;
  }
  /**
   * @return string
   */
  public function getTemporaryImageUri()
  {
    return $this->temporaryImageUri;
  }
  /**
   * @param string
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomEmoji::class, 'Google_Service_HangoutsChat_CustomEmoji');
