<?php
    include('connection.php');

?>
<style>
    #lo {
    display: block;
    margin-left: auto;
    margin-right: auto;
    height: 120px;

  }

  h1 {
    margin-top: 0px;
    margin-bottom: 0px;

    text-align: center;
    font-family: 'Satisfy', cursive;
  }
  header {
    margin: 0px;
    padding: 0px;
    background-color: #e8c9ea;
  }

  .topnav {
    top: 0;
    overflow: hidden;
    background-color: #e4dde4;
    margin: 0px;
    /*position: -webkit-sticky;*/
    position: sticky;
    z-index: 4;
  }
  .zoom:hover {
    -ms-transform: scale(1.1);
    /* IE 9 */
    -webkit-transform: scale(1.1);
    /* Safari 3-8 */
    transform: scale(1.1);
  }

  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover {
    background-color: #c8bec8e2;
    color: black;
  }

  .topnav a.active {
    background-color: #9e64a1;
    color: white;
  }

  .topnav input[type=text] {
    float: right;
    padding: 6px;
    margin-top: 8px;
    margin-right: 16px;
    border: none;
    font-size: 17px;
  }

body{
    margin:0px;

}
.h2{
    margin:5px;

}

.main{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.cake {
    border: 0px solid;
    width:20%;
    padding:1%;
    margin:1%;
   
}
.cake:hover{
    box-shadow: grey 3px 3px 5px 2px;

}
.cake img:hover{
    width:100%;
}
.cake *{
    
    margin:0px;

}
.cake img{
    width:100%;
    
}
.cake_img{
    border:0px solid red;
   
}
.description{
    margin-top: 0px;
   
    padding:0px;
}
small{
    font-family: 'Courier New', Courier, monospace;
    font-family:calibri;
    font-weight: lighter;
    font-size: 15px;
}
footer{
    background-color: black;
    color: white;
    
}
.footer{
    display: flex;
    justify-content: center;
}
.footer_social_media{
    width:30%;
}
.footer_catogarie_flex{
    width: 69%;
   
    display: flex;
    justify-content: center;
}
.footer_footer{
    width: 33%;
   
}
.footer_footer h4{
    padding-left: 5px;
}
.footer_footer ul{
    list-style: none;
    padding-left: 6px;
}
.footer_footer li{
    color:grey;
}
.copyright{
    padding:10px;
    text-align: center;
    color: grey;
}
.ul_socialMedia,.footer_socila_media_ul{
    list-style: none;
    display: flex;
    padding: 3px;
    justify-content: center;
   

}
.ul_socialMedia li{
    width:22px;
    margin:0px 5px;
    /* border:1px solid; */
}
.footer_socila_media_ul img{
    width:22px;
    margin:0px 5px;
}

@media screen and (max-width:500px){
    .footer{
        flex-direction: column;
        text-align: center;
    }
    .footer_social_media{
        width:99%;
        justify-content: center;
        border:1px solid white;
    }
    .footer_catogarie_flex{
        width: 99%;
        justify-content: center;
        flex-direction: column;
    }
    .footer_footer{
        width: 100%;
        /* border: 1px solid; */
       
    }
}

@media screen and (max-width:700px) {
    .cake{
        width:40%
        border:10px solid blue;
    }
    

   
}
/* @media screen and (min-width:300px) {
    .cake{
        width:45%
    }
    
    body{
        background-color:red;
    }
    
}
@media screen and (min-width:450px) {
    .cake{
        width:27%
    }
    body{
        background-color:yellow;
    }
   
} */



</style>