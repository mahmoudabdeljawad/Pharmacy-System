
<style>
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
        margin-top: 50px;
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
@media(min-width:768px) 
{
    .top-nav{ 
        display: none;
    }
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


/* start manage_invoice  */

.Emplo-manage{ 
    font-size: 20px;
    padding-top: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}
.Emplo-manage .border_under {
    border-bottom:1px solid blue; 
}

.Emplo-manage .border_under span { 
    color:blue;
}
.Emplo-manage .border_under .h5 { 
    font-weight: bold
}
/* end manage_invoice  */

/* start invoice_data */
Employee_data { 
    margin-top:20px;
    margin-bottom:20px;
}
.Employee_data .data { 
    margin-bottom:20px;

}
.Employee_data .border_under { 
    border-bottom :1px solid blue;
}
@media(max-width:768px)
{
    .table{
        overflow:scroll;
    }
    .data label{
        display:block
    }
}
.table_EMPLOYEE{
    margin-top:20px;
    margin-bottom:20px;
}
/* end invoice_data */


/* start table  */

/* end table  */

</style>