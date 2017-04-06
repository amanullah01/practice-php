<?php
  /**
   *
   */
  class Book
  {
    var $title;
    var $price;
    var $bookinfo;

    public function setBookInfo($title='', $price=''){
      $this->title = $title;
      $this->price = $price;
    }

    public function getBookInfo(){
      return 'Book Title: '.$this->title.' <br> Price is: '.(float)$this->price.'<br>';
    }
  }

  class Author extends Book{
    var $authorName;
    var $authorAddress;

    public function setAuthor($an,$aa){
      $this->authorName = $an;
      $this->authorAddress = $aa;
    }
    public function getAuthor(){
      return '<br> Author Name: '.$this->authorName.' <br> Address: '.$this->authorAddress.'<br>';
    }
  }

  class Publisher extends Author{
    var $publisherName;
    var $publisherAddress;

    public function setPublisher($pn,$pa){
      $this->publisherName = $pn;
      $this->publisherAddress = $pa;
    }
    public function getPublisher(){
      return '<br>Publisher Name: '.$this->publisherName.' <br> Address: '.$this->publisherAddress.'<br>';
    }
  }

  class All extends Publisher{
    public function getAllInfo(){
      return $this->getBookInfo().'<br>'.$this->getAuthor().'<br>'.$this->getPublisher();
    }
  }


  $all = new All;

  $all->setBookInfo('Calculas for childs', 290);

  $all->setAuthor('Amanullah Aman', 'Dhaka, Bangladesh');
  $all->setPublisher('MZ Ahmed', 'Khulna, Bangladesh');
  echo $all->getAllInfo();
?>
