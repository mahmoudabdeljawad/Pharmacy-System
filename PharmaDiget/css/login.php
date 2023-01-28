<style>
*{
    margin:0;
    padding :0;
    box-sizing: border-box;
}


section { 
    position: relative;
    width: 100%;
    height: 100vh;
    display:flex;
}
section .imgBx {
position: relative;
width: 50%;
height: 100%;
}

section .imgBx:before {
content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(225deg,#2c1ee9,#03a9f4);
    z-index: 1;
    mix-blend-mode:screen;
}

section .imgBx img  { 

    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    
}
section .contentBx { 
    display: flex;
    justify-content: center;
    justify-items: center;
    width: 50%;
    height: 100%;
    
}

section .contentBx .formBX { 
    width: 50%;
}

section .contentBx .formBX h2  { 
    color-interpolation-filters: #607d8b;
    font-weight: 600;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 10px solid blue;
    display: inline-block;
    letter-spacing: 1px;

}
section .contentBx .formBX .inputBX { 
    margin-bottom: 20px;
} 
section .contentBx .formBX .inputBX span { 
    font-size: 16px ; 
    margin-bottom: 5px; 
    display: inline-block;
    color: #607d8b;
    font-weight: 300;
    font-size: 16px;
    letter-spacing: 1px;
}
section .contentBx .formBX .inputBX input { 
    width: 100%;
    padding: 10px 20px;
    outline: none;
    font-weight: 400;
    border: 1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #607d8b;
    background: transparent;
    border-radius: 30px;
}
section .contentBx .formBX .inputBX  [type="submit"]
{ 
    background: #454bff;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 500;
}
section .contentBx .formBX .inputBX  [type="submit"]:hover { 
    background:#494ede ;
}
.remember { 
    margin-bottom: 10px;
    color:#607d8b;
    font-weight: 400;
    font-size: 14px;
}
section .contentBx .formBX .inputBX p a { 
    color :#454bff;

}
section .contentBx .formBX h3  { 
    color: #607d8b;
    text-align: center;
    margin: 80px 0 10px;
    font-weight: 500;

} 
section .contentBx .formBX .sci { 
    display: flex;
    justify-content: center;
    align-items: center;
}
section .contentBx .formBX .sci li  {
list-style: none;
width: 50px;
height: 50px;
display: flex;
justify-content: center;
align-items: center;
background: #000000;
border-radius: 50%;
margin: 0 7px;
cursor: pointer;
} 
section .contentBx .formBX .sci li:hover  { 
    background-color: #454bff;
}

section .contentBx .formBX .sci li i  {
    transform: scale(0.5);
    filter: invert(1);
} 
@media (max-width :768px)
{
    section .imgBx {
       
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            
        }
        section .contentBx { 
            display: flex;
            justify-content: center;
            justify-items: center;
            width: 100%;
            height: 100%;
            z-index: 1;
            
        }
        section .contentBx .formBX {
            width: 100%;
            padding: 40px;
            background: rgb(255 255 255 / 92%);
            margin: 50px;
        }
        section .contentBx .formBX h3  { 
            color: #607d8b;
            text-align: center;
            margin: 30px 0 10px;
            font-weight: 500;
        
        } 
}
</style>
