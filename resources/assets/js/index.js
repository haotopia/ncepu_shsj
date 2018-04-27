 
    // 这里使用最原始的js语法实现，可对应换成jquery语法进行逻辑控制  
    var open = document.getElementById('open');//text block  
    var close = document.getElementById('close');//password block  
    var password = document.getElementById('password');   
    //隐藏text block，显示password block  
    function showPsw(){  
        console.log("asda")
        var val = password.value;//将password的值传给text  
        password.value = val;
        password.type = 'text'  
        close.style.display = "none";        
    }  
    //隐藏password，显示text    
    function hidePsw(){  
        var val=password.value;//将text的值传给password    
        password.value = val;     
        open.style.display = "none";    
    }  
