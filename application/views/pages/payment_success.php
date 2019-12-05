<head>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<style>
    .icon{
        margin: 0 auto;
        display: inherit;
    }
    .payment h1{
    color: #73af55;
    text-align: center;
    font-family:lato;
    }
    .payment h4{
        font-weight: 600;
        text-align:center;
        font-size:20px;
        font-family:lato;
    }

    .payment h5{
        font-size: 17px;
        font-family:lato;
        text-align: center;
    }

    .payment h6{
        font-size: 17px;
        font-family:lato;
        text-align: center;
    }
     
    .payment a{
        color:#2b8bdd;
        text-decoration: underline;  
    }
    .payment{
        border: 5px #FF6600 outset;
    border-radius: 21px;
    padding: 3% 0;
    margin-top: 10%;
    background: #ffffff73;
    } 
    </style>
</head>
<body style="background-image: url('assets/images/bg/ct1.jpg');">
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="payment">
            <img class="icon" src="<?php echo base_url();?>assets/images/right.gif">
            <h1>Payment Sucessful !</h1>
            <h4>Thank your for your order. Your payment has been received.</h4>
            <h5>Order ID: <span>A0001</span></h5>
            <h5>Transcation ID: <span>T0001</span></h5>
            <h5>Amount Received: <span>$1000</span></h5>
            <br/>
            <h6><a href="<?php echo base_url();?>">Return To Home Page</a></h6>
            
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>