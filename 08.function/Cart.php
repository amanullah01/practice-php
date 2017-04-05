<?php
    echo "<h2>Example #4 Closures and scoping</h2>";
    echo "<h4>A simple cart class</h4>";
    Class Cart{
      const PRICE_MANGO = 10.00;
      const PRICE_APPLE = 20.00;
      const PRICE_EGG = 7.25 ;

      protected $products = [];

      public function productArray(){
        echo "<pre>";
        print_r($this->products);
      }

      //add product
      public function add($product, $quantity){
        $this->products[$product] = $quantity;
      }

      //get product quantity
      public function getQuantity($product){
        return isset($this->products[$product]) ? $this->products[$product] : FALSE ;
      }

      //get total with tax
      public function getTotal($tax)
      {
          $total = 0.00;

          $callback =
              function ($quantity, $product) use ($tax, &$total)
              {
                  $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                      strtoupper($product));
                  $total += ($pricePerItem * $quantity) * ($tax + 1.0);
              };

          array_walk($this->products, $callback);
          return round($total, 2);
      }
    }

    $s_cart = new Cart ;
    $s_cart->productArray();
    //$s_cart->add('apple',4);
    $s_cart->add('egg',12);
    //$s_cart->add('mango',24);
    $s_cart->productArray();
    echo "Total Price: ".$s_cart->getTotal(0.05);



    //echo $s_cart->getQuantity('apple');
?>
