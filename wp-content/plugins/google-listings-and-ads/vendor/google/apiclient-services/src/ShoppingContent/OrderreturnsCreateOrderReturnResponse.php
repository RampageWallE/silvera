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

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class OrderreturnsCreateOrderReturnResponse extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Model
{
  /**
   * @var string
   */
  public $executionStatus;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var MerchantOrderReturn
   */
  public $orderReturn;
  protected $orderReturnType = MerchantOrderReturn::class;
  protected $orderReturnDataType = '';

  /**
   * @param string
   */
  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }
  /**
   * @return string
   */
  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param MerchantOrderReturn
   */
  public function setOrderReturn(MerchantOrderReturn $orderReturn)
  {
    $this->orderReturn = $orderReturn;
  }
  /**
   * @return MerchantOrderReturn
   */
  public function getOrderReturn()
  {
    return $this->orderReturn;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrderreturnsCreateOrderReturnResponse::class, 'Google_Service_ShoppingContent_OrderreturnsCreateOrderReturnResponse');
