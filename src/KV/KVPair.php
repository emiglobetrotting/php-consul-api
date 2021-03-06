<?php namespace DCarbone\PHPConsulAPI\KV;

/*
   Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\AbstractModel;

/**
 * Class KVPair
 * @package DCarbone\PHPConsulAPI\KV
 */
class KVPair extends AbstractModel {
    /** @var string */
    public $Key = '';
    /** @var int */
    public $CreateIndex = 0;
    /** @var int */
    public $ModifyIndex = 0;
    /** @var int */
    public $LockIndex = 0;
    /** @var int */
    public $Flags = 0;
    /** @var null|string */
    public $Value = null;
    /** @var string */
    public $Session = '';

    /**
     * KVPair constructor.
     * @param array $data
     * @param bool $_decodeValue
     */
    public function __construct(array $data = [], $_decodeValue = false) {
        parent::__construct($data);
        if ((bool)$_decodeValue && isset($this->Value)) {
            $this->Value = base64_decode($this->Value);
        }
    }

    /**
     * @return string
     */
    public function getKey(): string {
        return $this->Key;
    }

    /**
     * @param string $Key
     * @return \DCarbone\PHPConsulAPI\KV\KVPair
     */
    public function setKey(string $Key): KVPair {
        $this->Key = $Key;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateIndex(): int {
        return $this->CreateIndex;
    }

    /**
     * @param int $CreateIndex
     * @return \DCarbone\PHPConsulAPI\KV\KVPair
     */
    public function setCreateIndex(int $CreateIndex): KVPair {
        $this->CreateIndex = $CreateIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getModifyIndex(): int {
        return $this->ModifyIndex;
    }

    /**
     * @param int $ModifyIndex
     * @return \DCarbone\PHPConsulAPI\KV\KVPair
     */
    public function setModifyIndex(int $ModifyIndex): KVPair {
        $this->ModifyIndex = $ModifyIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getLockIndex(): int {
        return $this->LockIndex;
    }

    /**
     * @param int $LockIndex
     * @return \DCarbone\PHPConsulAPI\KV\KVPair
     */
    public function setLockIndex(int $LockIndex): KVPair {
        $this->LockIndex = $LockIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getFlags(): int {
        return $this->Flags;
    }

    /**
     * @param int $Flags
     * @return \DCarbone\PHPConsulAPI\KV\KVPair
     */
    public function setFlags(int $Flags): KVPair {
        $this->Flags = $Flags;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getValue() {
        return $this->Value;
    }

    /**
     * @param null|string $Value
     * @return \DCarbone\PHPConsulAPI\KV\KVPair
     */
    public function setValue(string $Value): KVPair {
        $this->Value = $Value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSession(): string {
        return $this->Session;
    }

    /**
     * @param string $Session
     * @return \DCarbone\PHPConsulAPI\KV\KVPair
     */
    public function setSession(string $Session): KVPair {
        $this->Session = $Session;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString() {
        return (string)$this->Value;
    }
}