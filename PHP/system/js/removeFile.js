function conf(){
    if(confirm("you sure delete select file?")){
        var obj=document.getElementsByName('delf[]');
        var flag=false;
        for(var i=0;i<obj.length;i++){
            if(obj[i].checked == true){
                flag = true;
                break;
            }
        }
        if(flag == false){
            alert("Please , otherwise select a option");
            return flag;
        }
        else
            return false;
    }
function change(){
    var obj = document.getElementsByName('delf[]');
    for(var i=0;i<obj.length;i++){
        obj[i].checked=document.f.all.checked;
    }
}
