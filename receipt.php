<?php
include ('connection.php');
$logid = $_SESSION['id'];
$data = $obj->receipt($logid);
error_reporting(0);
echo "<script>window.print()</script>";

?>

<body>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);

    * {
      margin: 0;
      box-sizing: border-box;
      -webkit-print-color-adjust: exact;
    }

    body {
      font-family: 'Roboto', sans-serif;
    }

    ::selection {
      background: #f31544;
      color: #FFF;
    }

    ::moz-selection {
      background: #f31544;
      color: #FFF;
    }

    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    .col-left {
      float: left;
    }

    .col-right {
      float: right;
    }

    h1 {
      font-size: 1.5em;
      color: #444;
    }

    h2 {
      font-size: .9em;
    }

    h3 {
      font-size: 1.2em;
      font-weight: 300;
      line-height: 2em;
    }

    p {
      font-size: .75em;
      color: #666;
      line-height: 1.2em;
    }

    a {
      text-decoration: none;
      color: #00a63f;
    }

    #invoiceholder {
      width: 100%;
      height: 100%;
      padding: 50px 0;
    }

    #invoice {
      position: relative;
      margin: 0 auto;
      width: 700px;
      background: #FFF;
    }

    [id*='invoice-'] {
      /* Targets all id with 'col-' */
      /*  border-bottom: 1px solid #EEE;*/
      padding: 20px;
    }

    #invoice-top {
      border-bottom: 2px solid #00a63f;
    }

    #invoice-mid {
      min-height: 110px;
    }

    #invoice-bot {
      min-height: 240px;
    }

    .logo {
      display: inline-block;
      vertical-align: middle;
      width: 110px;
      overflow: hidden;
    }

    .info {
      display: inline-block;
      vertical-align: middle;
      margin-left: 20px;
    }

    .logo img,
    .clientlogo img {
      width: 100%;
    }

    .clientlogo {
      display: inline-block;
      vertical-align: middle;
      width: 50px;
    }

    .clientinfo {
      display: inline-block;
      vertical-align: middle;
      margin-left: 20px
    }

    .title {
      float: right;
    }

    .title p {
      text-align: right;
    }

    #message {
      margin-bottom: 30px;
      display: block;
    }

    h2 {
      margin-bottom: 5px;
      color: #444;
    }

    .col-right td {
      color: #666;
      padding: 5px 8px;
      border: 0;
      font-size: 0.75em;
      border-bottom: 1px solid #eeeeee;
    }

    .col-right td label {
      margin-left: 5px;
      font-weight: 600;
      color: #444;
    }

    .cta-group a {
      display: inline-block;
      padding: 7px;
      border-radius: 4px;
      background: rgb(196, 57, 10);
      margin-right: 10px;
      min-width: 100px;
      text-align: center;
      color: #fff;
      font-size: 0.75em;
    }

    .cta-group .btn-primary {
      background: #00a63f;
    }

    .cta-group.mobile-btn-group {
      display: none;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
      border-bottom: 1px solid #cccaca;
      font-size: 0.70em;
      text-align: left;
    }

    .tabletitle th {
      border-bottom: 2px solid #ddd;
      text-align: right;
    }

    .tabletitle th:nth-child(2) {
      text-align: left;
    }

    th {
      font-size: 0.7em;
      text-align: left;
      padding: 5px 10px;
    }

    .item {
      width: 50%;
    }

    .list-item td {
      text-align: right;
    }

    .list-item td:nth-child(2) {
      text-align: left;
    }

    .total-row th,
    .total-row td {
      text-align: right;
      font-weight: 700;
      font-size: .75em;
      border: 0 none;
    }

    .table-main {}

    footer {
      border-top: 1px solid #eeeeee;
      ;
      padding: 15px 20px;
    }

    .effect2 {
      position: relative;
    }

    .effect2:before,
    .effect2:after {
      z-index: -1;
      position: absolute;
      content: "";
      bottom: 15px;
      left: 10px;
      width: 50%;
      top: 80%;
      max-width: 300px;
      background: #777;
      -webkit-box-shadow: 0 15px 10px #777;
      -moz-box-shadow: 0 15px 10px #777;
      box-shadow: 0 15px 10px #777;
      -webkit-transform: rotate(-3deg);
      -moz-transform: rotate(-3deg);
      -o-transform: rotate(-3deg);
      -ms-transform: rotate(-3deg);
      transform: rotate(-3deg);
    }

    .effect2:after {
      -webkit-transform: rotate(3deg);
      -moz-transform: rotate(3deg);
      -o-transform: rotate(3deg);
      -ms-transform: rotate(3deg);
      transform: rotate(3deg);
      right: 10px;
      left: auto;
    }

    @media screen and (max-width: 767px) {
      h1 {
        font-size: .9em;
      }

      #invoice {
        width: 100%;
      }

      #message {
        margin-bottom: 20px;
      }

      [id*='invoice-'] {
        padding: 20px 10px;
      }

      .logo {
        width: 140px;
      }

      .title {
        float: none;
        display: inline-block;
        vertical-align: middle;
        margin-left: 40px;
      }

      .title p {
        text-align: left;
      }

      .col-left,
      .col-right {
        width: 100%;
      }

      .table {
        margin-top: 20px;
      }

      #table {
        white-space: nowrap;
        overflow: auto;
      }

      td {
        white-space: normal;
      }

      .cta-group {
        text-align: center;
      }

      .cta-group.mobile-btn-group {
        display: block;
        margin-bottom: 20px;
      }

      /*==================== Table ====================*/
      .table-main {
        border: 0 none;
      }

      .table-main thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      .table-main tr {
        border-bottom: 2px solid #eee;
        display: block;
        margin-bottom: 20px;
      }

      .table-main td {
        font-weight: 700;
        display: block;
        padding-left: 40%;
        max-width: none;
        position: relative;
        border: 1px solid #cccaca;
        text-align: left;
      }

      .table-main td:before {

        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight: normal;
        text-transform: uppercase;
      }

      .total-row th {
        display: none;
      }

      .total-row td {
        text-align: left;
      }

      footer {
        text-align: center;
      }
    }
  </style>
  <div id="invoiceholder">
    <div id="invoice" class="effect2">

      <div id="invoice-top">
        <div class="logo">Eco-Scrap Exchange</div>
        <div class="title">
          <h1>Invoice #<span class="invoiceVal invoice_num">
              <?= $inv = (rand(11, 99)) ?>
            </span></h1>,
          <p>Invoice Date: <span id="invoice_date">
              <?= date('d M Y'); ?>
            </span><br>
            Pick Up Date: <span id="gl_date">
              <?= $data['date']; ?>
            </span>
          </p>
        </div><!--End Title-->
      </div><!--End InvoiceTop-->



      <div id="invoice-mid">
        <div id="message">
          <h2>Hello
            <?= $_SESSION['name']; ?>,
          </h2>
          <p>An invoice with invoice number #<span id="invoice_num">tst-inv-
              <?= $inv; ?>
            </span> is created for <span id="supplier_name">Eco-Scrap Exchange.</span> which is 100% matched with PO and
            is waiting for your approval. </p>
        </div>

        <div class="clearfix">
          <div class="col-left">
            <div class="clientlogo"><img
                src="https://cdn3.iconfinder.com/data/icons/daily-sales/512/Sale-card-address-512.png" alt="Sup" />
            </div>
            <div class="clientinfo">
              <h2 id="supplier">Eco-Scrap Exchange</h2>
              <p><span id="address">Vardhaman College of Enginnering</span><br><span id="city">Hyderabad</span><br><span
                  id="country">India</span> - <span id="zip">500035</span><br><span id="tax_num">555-555-5555</span><br>
              </p>
            </div>
          </div>
          <div class="col-right">
            <table class="table">
              <tbody>
                <tr>
                  <td><span>Invoice Total</span><label id="invoice_total">
                      <?= $data['kg'] * $data['price']; ?>
                    </label></td>
                  <td><span>Currency</span><label id="currency">INR</label></td>
                </tr>
                <tr>
                  <td><span>Payment Term</span><label id="payment_term">Online</label></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div><!--End Invoice Mid-->

      <div id="invoice-bot">

        <div id="table">
          <table class="table-main">
            <thead>
              <tr class="tabletitle">
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>

              </tr>
            </thead>

            <tr class="list-item">
              <td data-label="Type" class="tableitem">
                <?= $data['category']; ?>
              </td>
              <td data-label="Description" class="tableitem">
                <?= $data['price']; ?>
              </td>
              <td data-label="Quantity" class="tableitem">
                <?= $data['kg']; ?>
              </td>
              <td data-label="Unit Price" class="tableitem">
                <?= $data['kg'] * $data['price']; ?>
              </td>

            </tr>
            <tr class="list-item total-row">
              <th colspan="9" class="tableitem">Grand Total</th>
              <td data-label="Grand Total" class="tableitem">
                <?= $data['kg'] * $data['price']; ?>
              </td>
            </tr>
          </table>
        </div><!--End Table-->


      </div><!--End InvoiceBot-->
      <footer>
        <div id="legalcopy" class="clearfix">
          <p class="col-right">Our mailing address is:
            <span class="email"><a href="mailto:info@ecoscrapexchange.com">info@ecoscrapexchange.com</a></span>
          </p>
        </div>
      </footer>
    </div><!--End Invoice-->
  </div><!-- End Invoice Holder-->

  <a href="home.php">Back to homepage</a>



</body>