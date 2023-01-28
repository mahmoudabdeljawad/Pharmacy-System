<style> 
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 7px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: gray; 
  border-radius: 7px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: rgb(33 51 76);; 
}

 @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(max-width:768px) {
    body {
        margin-top: 120px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

#wrapper {
    padding-left: 0;    
}


#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;

}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #84837e;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: blue;
    background-color: #1a242f;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;    
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;    
}
.top-nav>.open>.dropdown-menu>li>a:hover { 
    background-color: blue;

}
/* Side Navigation */

@media(min-width:768px) 
 {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-image: linear-gradient( #243752,black);
         /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
        
    }

    .collapse { 
        background-image: linear-gradient( #243752,black);

    }
    /* side nav a */

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;    
    }


    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: blue !important;
        margin-left: 5px;
    }


.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}


.side-nav>li>ul>li>a 
{
    display: block;
    padding: 10px 15px 10px 20px ;
    text-decoration: none;
     color: #999;
    color: #fff; 
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
    margin-top: 13px;
    color: blue !important;
    -webkit-transition: all 1.0s ease-in-out;
        -moz-transition: all 1.0s ease-in-out;
        -o-transition: all 1.0s ease-in-out;
        transition: all 1.0s ease-in-out; 
    
}
.navbar-brand:hover { 
    font-size: 25px;
}
.well { 
    background-color: white;
    padding: 0;
    border:none;
}
/* end nav bar */

/* start header  */

.header { 
font-size: 20px;
padding-top: 10px;
margin-bottom: 10px;
margin-top: 10px;
}
.border_bottom {
     border-bottom: 1px solid blue;
}
.header span { 
    color: blue;
}
.header .h5  {
    font-weight: bold
}
/* end header */

/* start headertwo */
.headertwo  { 
    margin-bottom: 20px;
    margin-top: 20px;
}
.headertwo .invoice input { 
    width: 100% ;
}

 .address  { 

    background-color: #d3d2ce;
}
/* end headertwo */

/* staet headerthree */
.headerthree { 
    margin-top: 25px;
    margin-bottom: 25px;
}
.headerthree .contact input { 
    width: 100% ;
    height: 34px;

}
.num { 
    background-color: #d3d2ce;

}
/* end headerthree */

/*  start new customer */
.button-customer { 
    margin-bottom: 30px;
    margin-top: 20px;
}
.button-customer .second_border { 
    border-bottom: 1px solid blue;
}
.button-customer .new_button { 
    margin-bottom: 20px;
    margin-top: 10px;
}
/*  end new customer */

/*  */
.info input[type=text] { 
    background-color: #d3d2ce;
}
.btn-danger {
        color: #333;
        background-color: yellow;
        border-color: yellow;
    }

 .price { 
    margin-bottom: 25px;
    margin-top: 10px;
}
.price .total_price { 
    margin-bottom: 25px;
    margin-top: 10px;
}

}
.price .total_price .add_remove {
        margin-top: 20px !important;
    }



/* start cach */

.cash .thired_border {
        border-bottom: 1px solid blue;
        margin-top: 20px ;

    }
    .cash .totalscash { 
        margin-bottom: 20px ;

    }
/* end cach */

.btn-lg, .btn-group-lg > .btn {
    padding: 10px 16px;
    font-size: 12px;
    line-height: 1.3333333;
    border-radius: 6px;
}

    /* start save  */

    .save { 
        margin-top: 20px ;
        margin-bottom: 20px ;
-
    }
    /* Form for add customer */
    .modal-body input{ 
        margin-bottom:40px;
        width:80%;
    }

</style>

