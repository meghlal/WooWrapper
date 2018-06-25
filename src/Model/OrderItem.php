<?php
/**
 * Created by PhpStorm.
 * User: Meghlal
 * Date: 6/23/2018
 * Time: 2:25 AM
 */

namespace Primitiveonline\Woocommerce\Model;


class OrderItem
{

    private $id;
    private $name;
    private $product_id;
    private $variation_id;
    private $quantity;
    private $tax_class;

    private $subtotal;
    private $subtotal_tax;
    private $total;
    private $total_tax;
    private $taxes;
    private $meta_data;
    private $sku;
    private $price;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getVariationId()
    {
        return $this->variation_id;
    }

    /**
     * @param mixed $variation_id
     */
    public function setVariationId($variation_id)
    {
        $this->variation_id = $variation_id;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getTaxClass()
    {
        return $this->tax_class;
    }

    /**
     * @param mixed $tax_class
     */
    public function setTaxClass($tax_class)
    {
        $this->tax_class = $tax_class;
    }

    /**
     * @return mixed
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param mixed $subtotal
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @return mixed
     */
    public function getSubtotalTax()
    {
        return $this->subtotal_tax;
    }

    /**
     * @param mixed $subtotal_tax
     */
    public function setSubtotalTax($subtotal_tax)
    {
        $this->subtotal_tax = $subtotal_tax;
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
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param mixed $taxes
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
    }

    /**
     * @return mixed
     */
    public function getMetaData()
    {
        return $this->meta_data;
    }

    /**
     * @param mixed $meta_data
     */
    public function setMetaData($meta_data)
    {
        $this->meta_data = $meta_data;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    
}