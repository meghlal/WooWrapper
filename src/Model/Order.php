<?php
/**
 * Created by PhpStorm.
 * User: Meghlal
 * Date: 6/23/2018
 * Time: 1:18 AM
 */

namespace Primitiveonline\Woocommerce\Model;


class Order
{
    private $id;
    private $parent_id;
    private $number;
    private $order_key;
    private $version;
    private $status;
    private $currency;
    private $date_created;
    private $date_created_gmt;
    private $date_modified;
    private $date_modified_gmt;
    private $discount_total;
    private $discount_tax;
    private $shipping_total;
    private $cart_tax;
    private $total;
    private $total_tax;
    private $prices_include_tax;
    private $customer_id;
    private $customer_ip_address;
    private $customer_user_agent;
    private $customer_note;
    private $payment_method;
    private $payment_method_title;
    private $transaction_id;
    private $date_paid;

    private $date_paid_gmt;
    private $date_completed;
    private $date_completed_gmt;
    private $cart_hash;


    private $billing;
    private $shipping;


    private $line_items = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param mixed $parent_id
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getOrderKey()
    {
        return $this->order_key;
    }

    /**
     * @param mixed $order_key
     */
    public function setOrderKey($order_key)
    {
        $this->order_key = $order_key;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * @param mixed $date_created
     */
    public function setDateCreated($date_created)
    {
        $this->date_created = $date_created;
    }

    /**
     * @return mixed
     */
    public function getDateCreatedGmt()
    {
        return $this->date_created_gmt;
    }

    /**
     * @param mixed $date_created_gmt
     */
    public function setDateCreatedGmt($date_created_gmt)
    {
        $this->date_created_gmt = $date_created_gmt;
    }

    /**
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }

    /**
     * @param mixed $date_modified
     */
    public function setDateModified($date_modified)
    {
        $this->date_modified = $date_modified;
    }

    /**
     * @return mixed
     */
    public function getDateModifiedGmt()
    {
        return $this->date_modified_gmt;
    }

    /**
     * @param mixed $date_modified_gmt
     */
    public function setDateModifiedGmt($date_modified_gmt)
    {
        $this->date_modified_gmt = $date_modified_gmt;
    }

    /**
     * @return mixed
     */
    public function getDiscountTotal()
    {
        return $this->discount_total;
    }

    /**
     * @param mixed $discount_total
     */
    public function setDiscountTotal($discount_total)
    {
        $this->discount_total = $discount_total;
    }

    /**
     * @return mixed
     */
    public function getDiscountTax()
    {
        return $this->discount_tax;
    }

    /**
     * @param mixed $discount_tax
     */
    public function setDiscountTax($discount_tax)
    {
        $this->discount_tax = $discount_tax;
    }

    /**
     * @return mixed
     */
    public function getShippingTotal()
    {
        return $this->shipping_total;
    }

    /**
     * @param mixed $shipping_total
     */
    public function setShippingTotal($shipping_total)
    {
        $this->shipping_total = $shipping_total;
    }

    /**
     * @return mixed
     */
    public function getCartTax()
    {
        return $this->cart_tax;
    }

    /**
     * @param mixed $cart_tax
     */
    public function setCartTax($cart_tax)
    {
        $this->cart_tax = $cart_tax;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getTotalTax()
    {
        return $this->total_tax;
    }

    /**
     * @param mixed $total_tax
     */
    public function setTotalTax($total_tax)
    {
        $this->total_tax = $total_tax;
    }

    /**
     * @return mixed
     */
    public function getPricesIncludeTax()
    {
        return $this->prices_include_tax;
    }

    /**
     * @param mixed $prices_include_tax
     */
    public function setPricesIncludeTax($prices_include_tax)
    {
        $this->prices_include_tax = $prices_include_tax;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return mixed
     */
    public function getCustomerIpAddress()
    {
        return $this->customer_ip_address;
    }

    /**
     * @param mixed $customer_ip_address
     */
    public function setCustomerIpAddress($customer_ip_address)
    {
        $this->customer_ip_address = $customer_ip_address;
    }

    /**
     * @return mixed
     */
    public function getCustomerUserAgent()
    {
        return $this->customer_user_agent;
    }

    /**
     * @param mixed $customer_user_agent
     */
    public function setCustomerUserAgent($customer_user_agent)
    {
        $this->customer_user_agent = $customer_user_agent;
    }

    /**
     * @return mixed
     */
    public function getCustomerNote()
    {
        return $this->customer_note;
    }

    /**
     * @param mixed $customer_note
     */
    public function setCustomerNote($customer_note)
    {
        $this->customer_note = $customer_note;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param mixed $payment_method
     */
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodTitle()
    {
        return $this->payment_method_title;
    }

    /**
     * @param mixed $payment_method_title
     */
    public function setPaymentMethodTitle($payment_method_title)
    {
        $this->payment_method_title = $payment_method_title;
    }

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * @param mixed $transaction_id
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }



    /**
     * @return mixed
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param mixed $billing
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;
    }

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param mixed $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @return mixed
     */
    public function getDatePaid()
    {
        return $this->date_paid;
    }

    /**
     * @param mixed $date_paid
     */
    public function setDatePaid($date_paid)
    {
        $this->date_paid = $date_paid;
    }

    /**
     * @return mixed
     */
    public function getDatePaidGmt()
    {
        return $this->date_paid_gmt;
    }

    /**
     * @param mixed $date_paid_gmt
     */
    public function setDatePaidGmt($date_paid_gmt)
    {
        $this->date_paid_gmt = $date_paid_gmt;
    }

    /**
     * @return mixed
     */
    public function getDateCompleted()
    {
        return $this->date_completed;
    }

    /**
     * @param mixed $date_completed
     */
    public function setDateCompleted($date_completed)
    {
        $this->date_completed = $date_completed;
    }

    /**
     * @return mixed
     */
    public function getDateCompletedGmt()
    {
        return $this->date_completed_gmt;
    }

    /**
     * @param mixed $date_completed_gmt
     */
    public function setDateCompletedGmt($date_completed_gmt)
    {
        $this->date_completed_gmt = $date_completed_gmt;
    }

    /**
     * @return mixed
     */
    public function getCartHash()
    {
        return $this->cart_hash;
    }

    /**
     * @param mixed $cart_hash
     */
    public function setCartHash($cart_hash)
    {
        $this->cart_hash = $cart_hash;
    }

    /**
     * @return mixed
     */
    public function getLineItems()
    {
        return $this->line_items;
    }

    /**
     * @param mixed $line_items
     */
    public function setLineItems($line_items)
    {
        $mapper = new \JsonMapper();
        $mapper->bStrictNullTypes = false;
        $resp = array();
        foreach ($line_items as $item)
        {
            $resp[] = $mapper->map(
                json_decode(json_encode($item)),
                new OrderItem()
            );
        }

        $this->line_items = $resp;
    }













}