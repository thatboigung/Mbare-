<style>
@import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

:root{
    --bg-black-900:#f2f2fc;
    --bg-black-100:#fdf9ff;
    --bg-black-50:#e8dfec;
    --text-black-900:#302e4d;
    --text-black-700:#504e70;
}
body{
    font-family: 'Poppins' sans-serif;
    line-height:1.5;
    font-size: 16px;
}
*{
    margin: 0;
    padding: 0;
    outline: none;
    text-decoration: none;
    box-sizing: border-box;
}
ul{
    list-style-type: none;
}
::before, ::after{
    box-sizing: border-box;
}

/* aside */
.aside{
    width: 270px;
    background-color: var(--bg-black-100);
    position: fixed;
    left: 0;
    top: 0;
    z-index: 10;
    height: 100%;
    padding: 30px;
    display: flex;
    justify-content: center;
    align-items:center ;
    border-right: 1px solid var(--bg-black-50);
}
.user{
    position: absolute;
    top: 90%;
left: 88px;

padding: 10px;border-top:1px solid var(--bg-black-50);
}
.user a{
    color: var(--text-black-900); 
}
.user i{
margin-right: 20px;

}
.user:hover{
    transform: scale(1.2);
    transition: 0.2s;
}
.aside .nav-tongler{
    height: 40px;
    width: 45px;
    border: 1px solid var(--bg-black-50);
    cursor: pointer;
    position: fixed;
    left:300px;
    top:20px;
    border-radius: 5px;
    background:var(--bg-black-100);
    display: none;
    align-items: center;
    justify-content: center;
}
.aside .nav-tongler span{
    height: 2px;
    width: 18px;
    background:var(--skin-color);
    display: inline-block;
    position: relative;
}
.aside .nav-tongler span::before{
    content: '';
    height: 2px;
    width: 18px;
    background:var(--skin-color);
    position: absolute;
    top: -6px;
    left: 0;

}
.aside .nav-tongler span::after{
    content: '';
    height: 2px;
    width: 18px;
    background:var(--skin-color);
    position: absolute;
   top: 6px;
    left: 0;

}
.aside .logo{
    position: absolute;
    top:20px;
    font-size: 10px;

}
.logo span{
    font-family: 'Clicker Script', cursive;
    font-size: 16px;
}
.aside .logo a{
    color: var(--text-black-900);
    font-weight: 700;
    padding: 15px 20px;
    font-size: 25px;
    letter-spacing: 5px;
    position: relative;
}
.aside .logo a span{
    font-family: 'Clicker Script', cursive;
    font-size: 40px;
}
.aside .logo a::before{
    content: '';
    position: absolute;
    width: 70px;
    height: 0px;
    border-bottom: 5px solid var(--bg-black-50);
   margin-left: 40px;
    bottom: 0;
    left:0;
    border-radius: 100px;
}
.aside .logo a::after{
    content: '';
    position: absolute;
    width: 10px;
    height: 10px;
    border-top: 5px solid var(--skin-color);
    border-right: 5px solid var(--skin-color);
    top: 0;
    right:12px;
    margin-top: 10px;
    border-radius: 14px;
    background-color:var(--skin-color);
}
.aside .nav{
    margin-top: 50px;
}
.aside .nav li{
    margin-bottom: 20px;
    display: block;
}
.aside .nav li a {
    font-size: 16px;
    font-weight: 600;
    display: block;
    padding: 5px 15px ;
    border-bottom: 1px solid var(--bg-black-50);
    color: var(--text-black-900);
}
.aside .nav li a:hover{
    transform: scale(1.2);
    transition: 0.2s;
}
.aside .nav li a.active{
    color: var(--skin-color);
}
.aside .nav li a i{
    margin-right: 15px;

}


/* Main Content */
.section{
    background-color:var(--bg-black-900);
    min-height: 100vh;
    display: block;
   margin-left: 270px;
    top:0;
    right: 0;
    opacity: 1;
    z-index: 0;
    
}
.category-nav{
  opacity: 0;
  visibility: hidden;
  
  position: absolute;
  height: auto;
  width: auto;
  background-color: #fff;
  box-shadow: 0px 0px 3px 0px grey;
  margin-left: -65px;
  margin-top: 18px;
  border-radius: 8px;
  padding: 12px;transition: 0.1s;
}
.category-nav::before{
content: '';
  position: absolute;
  margin-top: -32px;
  background-color: #fff;
  height: 40px;
  width: 20px;
  margin-left: 2rem;
  box-shadow: 0px -2px 0px 0px;
  border-radius: 80px 0px 0px 0px;

}
.text{
  position: absolute;
  width: 200px;
  margin-top: -230px;
  text-align: center;
  margin-left: 10px;
  font-size: 15px;
  font-weight: 600;
  padding: 8px;
  background-color:#d7b4e690;
  border-radius: 8px;
}
.text::before{
  content: '';
  height: 10px;
  width: 10px;
  border-left:5px solid #504e70;
  position: absolute;
  bottom: 0;
  left: 0;

  border-bottom:5px solid #504e70;
}
.text::after{
  content: '';
  height: 10px;
  width: 10px;
  border-right:5px solid #504e70;
  position: absolute;
  top: 0;
  right: 0;

  border-top:5px solid #504e70;
}
.category-nav .heading{
  color: #504e70;
}
.cates-active{
  visibility: visible;
  opacity: 1;
  height: auto;
  
}
#cate:hover + .category-nav{
opacity: 1;
}
.category-nav .profile-p{
  font-size: 15px;
  padding: 6px;
  color: #504e70;
  text-transform: lowercase;
  margin-bottom: 10px;
}
.category-nav .profile-p:hover{
  transform: scale(1.2);
  background-color:#e8dfec;
  transition: 0.2s;
}
.nav-section{
    width: 100%;
    background-color: var(--bg-black-100);
    padding: 20px;
    display: flex;
  justify-content: center;
  flex-wrap:nowrap ;
  position: sticky;
  top:0;z-index:100 ;
  
}
.category span{
color:#888;
margin-right: 10px;

}
.category{
    padding: 2px;
    cursor: pointer;
}
.search-box{
    border-radius: 40px;
    padding-top: 2px ;
    padding-bottom: 2px;
    padding-left: 1px;
    padding-right: 6px;
    background-color: var(--skin-color);
}
.search-box i{
    color: var(--bg-black-100);
    padding-left: 5px;
    padding-right: 8px;
}
.search-box input{
    border-radius: 40px;
    border: none;
    padding: 7px;
    color: #302e4d;
    width: 300px;
}
.uer-signup{
    display: flex;
    margin-left: 60px;
}
.uer-signup div{
    padding-right: 20px;
    font-size: 20px;
}
.uer-signup div span{
    font-size: 20px;
}
.uer-signup div .free{
    position: absolute;
    margin-left: 20px;
    margin-top: -9px;
    font-size: 16px;
}
.uer-signup div .message{
margin-left:2px ;
}
.dev{
    color:grey;
}
.main-item{
    padding: 23px;
}
.wrapper {
    display: grid;
    grid-template-columns: auto auto auto auto; 
    grid-auto-rows: 90px;
    row-gap: 10px;
    column-gap: 10px;
  }
  
  .box1 {
    grid-column-start: 2;
    grid-column-end: 4;
    grid-row-start: 1;
    grid-row-end: 5;
    
  }
  
  .box2 {
    grid-column-start: 0;
    grid-row-start:1;
    grid-row-end: 5;
    
  
  }
  .box-del {
    grid-column-start:0;
    grid-row-start:3;
    grid-row-end: 1;
    grid-column-end:5;
  
  }
  .box-cloth-1 {
    grid-column-start: 1;
    grid-row-start:1;
    grid-row-end: 3;
 
  
  }
  .box-service-1 {
    grid-column-start: 1;
    grid-row-start:1;
    grid-row-end: 3;
     grid-column-end: 3;
  }
  .box{
    background-color: #fff;
border-radius: 8px;
padding: 12px;
  }
.heading{
    display: flex;
    padding: 12px 0px;
    font-size: 22px;
}

.heading h3{
    font-size: 16px;
    padding: 4px;
    border-bottom:1px solid #969699;
  
}
.welcome{
    text-align: center;
    width: 200px;
    font-size: 18px;
    display: flex;
    justify-content: center;
    word-wrap: break-word;
    padding: 8px;
}

.top-item{
    padding: 8px;
    border-radius: 8px;
    background-color:var(--bg-black-900);
    height: auto;
}
.info{
    background-color:var(--bg-black-900);
    padding: 12px;
    text-align: center;
}
.cats{
    display: flex;
    width: 100%;
    margin-bottom: 10px;
    height: 32px;
}
.cats .profile-p{
    padding: 4px 12px;
    background-color: #fff;
    font-size: 15px;
    margin-right: 40px;
    width: auto;
    border-radius: 30px;
    cursor: pointer;
}
.cats .profile-p:hover{
   
    transform: scale(1.2);
    transition: 0.2s;
    background-color:var(--bg-black-100)
}
.main-item-job .cats .profile-p{
    margin-right: 10px;
}
.item-cover-img{
  text-align: center;

}
.item-cover-img img{
  border-radius: 12px;
width: 280px;
background-color:var(--bg-black-900);
height: 180px;
object-fit: cover;
}
.box2 .profile-p{
    font-size: 16px;
    padding:5px ;
    border-radius: 12px;
    font-weight: 600;
    color:var(--text-black-900);
    cursor: pointer;
}

.heading span{
    background-color:var(--bg-black-50);
    height: 10px;
    width: 80%;
    margin-left: 8px;
    margin-top: 12px;
    border-radius: 12px;
}
.wrapper-items {
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-auto-rows: 200px;
    row-gap: 10px;
    column-gap: 10px;
  }
  .wrapper-job {
  display: block;
    padding: 8px;
    row-gap: 10px;
    column-gap: 10px;
    height: 76.2vh;
    overflow-y: scroll;
    width: 50%;
  }
  .jobs{
    display: flex;
  }

  .job-desc section{
    background-color: #fff;
    border-radius: 8px;
    width: 500px;
    height: 100%;
    margin-left: 14px;
    padding: 20px;
    overflow-y: scroll;
  }
 
  .wrapper-job .box{
    margin-bottom: 10px;
    height: 120px;
  }
  .main-item-job{
    padding: 22px;
    
    margin-bottom: 20px;
  }
 .profile-p{
    font-size: 26px;
  }
  .profile-img{
    width: 120px;
    border-radius: 50%;
    object-fit: contain;
    background-color: #fff;
    color: white;
  }
  .create-type{
    background-color: #fff;
    height: 200px;
    padding: 12px;
    box-shadow: 0px 3px 3px 0px grey;
    position: absolute;
    width: 200px;
    border-radius: 6px;
    margin-top: -232px;
    margin-left: 110px;
    visibility: hidden;
    opacity: 0;
height: 0;
  }
  .create-type-active{
height: auto;
opacity: 1;
visibility: visible;
  }
  .make-form{
    display: flex;
    justify-content: center;
    padding: 32px;
    
  }
  .make-form form{
    padding: 8px;
    background-color: #fff;
    border-radius: 8px;
    margin-bottom: -4px;
  }
  @media(max-width:1000px){
    .cover-make{
     display: none;
    }
    .txt{
      display: none;
    }
  }
  .cover-make{
    height: 200px;
    width: 300px;
    border-radius: 12px;
    background-color:var(--bg-black-50);
    position: absolute;
    left: 3vw;
  }
  .cover-make button{
    position: absolute;
    background-color:var(--bg-black-50);
    border-radius: 8px;
    padding: 8px;
    margin-top: 80px;
    margin-left: 70px;
    font-weight: 600;
    font-size: 15px;
  }
  .cover-make button:hover{
    transform: scale(0.98);
    transition: 0.2s;
  }
.details input{
  padding: 4px;
  font-size: 18px;
  border-radius: 4px;
  border: 1px solid #888;
  color: #504e70;
  width: 300px;
}
.number{
  width: 130px;
  margin-left: 10px;
}
#category{
  padding: 4px;
 color:#504e70 ;
  background-color: #fff;
  border: 1px solid #888;
  border-radius: 4px;
  width: 160px;
}
  .details div{
   margin-bottom: 10px;
   display: flex;
  }
  .details textarea{
    resize: none;
    width: 300px;
    border-radius: 4px;
    border: 1px solid #888;
    padding: 4px;
    font-size: 18px;
    height: 130px;
  }
  .details label {
    margin-right: 5px;
  }
  .create-type h3{
   background-color:#d7b4e6;
    height: 4px;
    border-radius: 20px;
  }
  
  .create-type p{
    padding: 12px;
    border-bottom:1px solid #e8dfec;
  }
  .create-type a{
    color: inherit;
    padding: 8px;
    border:1px solid white;
  }
  .create-type a:hover{
    border:1px solid #d7b4e6;
    border-radius: 12px;
    color: #504e70;
  }
  .change-det{
    margin-left: 16px;
  }
  .change-det a{
    color: var(--text-black-700);
  }
  .change-det a:hover{
    color:indigo;
  }
  .create-listing-btn{
    padding: 8px;
    border-radius: 22px;
    margin-top: 4px;
    font-weight: 600;
    background-color:inherit;
    border: 1px solid var(--text-black-700);
    cursor: pointer;
    color: var(--text-black-700);
  }
  .buy-btn{
    padding: 8px;
    border-radius: 22px;
    margin-top: 4px;
    font-weight: 600;
    background-color:inherit;
    border: 1px solid var(--text-black-700);
    cursor: pointer;
    color: var(--text-black-700);
  }
  .create-listing-btn:hover{
    background-color:var(--text-black-900);
    color: var(--bg-black-100);
    transition: 0.2s;
  }
  .buy-btn:hover{
    background-color:var(--text-black-900);
    color: var(--bg-black-100);
    transition: 0.2s;
  }
  .remove-btn{
    padding: 8px;
    border-radius: 12px;
    margin-top: 4px;
    font-weight: 600;
    background-color:inherit;
    border: 1px solid var(--text-black-700);
    cursor: pointer;
    color: var(--text-black-700);
 
  }
  .remove-btn:hover{
   border: 1px solid red;
    color: red;
    transition: 0.2s;
  }
  .icons{
    width: 100%;
    padding: 12px 0px;
    display: flex;
   text-align: center;
    font-size: 20px;
  }
  .icons img{
    width: 30px;
    object-fit: contain;
  }
  .icons img:hover{
    transform: scale(1.2);
    transition: 0.2s;
  }
  .icons span{
    width: 80%;
  }

  .about-prof{
    text-align: center;
  }
  .about-prof span{
    margin-left: 12rem;
    
  }
  .about-prof a{
    border-radius: 8px;
    padding: 8px;
    
  }
  .about-prof a:hover{
    background-color:#d7b4e6;
    color: #302e4d;
  }
  .add{
    padding: 8px;
    font-size: 20px;
    border-bottom:1px solid #969699;
  }
  .add:hover{
    background-color:aliceblue;
    cursor: pointer;
  }
footer{
    text-align: center;
    background-color:var(--text-black-700);
    padding: 12px;   
}
footer a{
    color: var(--bg-black-100);
    padding: 4px;
 
}
footer a:hover{
    color: aqua;
    text-decoration: underline;
}
/*     Responcive */
@media (max-width:1199px){
.aside{
    left:-270px;
}
.section{
margin-left: 0;
}
.aside .nav-tongler{
    display: flex;
}
.message{
    display: none;
}

} 
</style>